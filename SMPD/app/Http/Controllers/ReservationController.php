<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Member;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::with(['member', 'book'])
            ->latest()
            ->paginate(10);

        return view('reservations.index', compact('reservations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'member_code' => 'required',
            'book_barcode' => 'required',
            'reservation_date' => 'required|date',
        ]);

        $member = Member::where('member_code', $request->member_code)
            ->where('status', 'Aktif')
            ->first();

        if (!$member) {
            return back()->with('error', 'Anggota tidak ditemukan atau status tidak aktif.');
        }

        $book = Book::where('barcode', $request->book_barcode)->first();

        if (!$book) {
            return back()->with('error', 'Buku tidak ditemukan.');
        }

        Reservation::create([
            'reservation_code' => 'RSV' . date('YmdHis'),
            'member_id' => $member->id,
            'book_id' => $book->id,
            'reservation_date' => $request->reservation_date,
            'status' => 'Menunggu',
        ]);

        return redirect()->route('reservations.index')->with('success', 'Reservasi buku berhasil dibuat.');
    }

    public function approve(Reservation $reservation)
    {
        $reservation->update([
            'status' => 'Disetujui',
        ]);

        return redirect()->route('reservations.index')->with('success', 'Reservasi berhasil disetujui.');
    }

    public function cancel(Reservation $reservation)
    {
        $reservation->update([
            'status' => 'Dibatalkan',
        ]);

        return redirect()->route('reservations.index')->with('success', 'Reservasi berhasil dibatalkan.');
    }
}