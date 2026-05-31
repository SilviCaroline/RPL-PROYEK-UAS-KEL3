<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Member;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ReservationController extends BaseController
{
    //Pustakwan
    public function index()
    {
        $reservations = Reservation::with([
            'member',
            'book'
        ])
            ->latest()
            ->paginate(10);

        $totalReservations = Reservation::count();

        $waitingReservations = Reservation::where(
            'status',
            'Menunggu'
        )->count();

        $approvedReservations = Reservation::where(
            'status',
            'Disetujui'
        )->count();

        return view(
            'pustakawan.reservations.pustakawan',
            compact(
                'reservations',
                'totalReservations',
                'waitingReservations',
                'approvedReservations'
            )
        );
    }

    //Pengguna
    public function pengguna()
    {

        $reservations = Reservation::with([
            'member',
            'book'
        ])
            ->latest()
            ->paginate(10);

        $totalReservations = Reservation::count();

        $waitingReservations = Reservation::where(
            'status',
            'Menunggu'
        )->count();

        $approvedReservations = Reservation::where(
            'status',
            'Disetujui'
        )->count();

        return view(
            'pengunjung.reservations.pengunjung',
            compact(
                'reservations',
                'totalReservations',
                'waitingReservations',
                'approvedReservations'
            )
        );
    }

    // ==========================
    // SIMPAN RESERVASI
    // ==========================

    public function store(Request $request)
    {
        $request->validate([
            'member_code'      => 'required',
            'kode_buku'     => 'required',
            'reservation_date' => 'required|date',
        ]);

        $member = Member::where(
            'member_code',
            $request->member_code
        )->firstOrFail();

        $book = Book::where(
            'barcode',
            $request->kode_buku
        )->firstOrFail();

        Reservation::create([
            'reservation_code' => 'RSV' . date('YmdHis'),
            'member_id'        => $member->id,
            'book_id'          => $book->id,
            'reservation_date' => $request->reservation_date,
            'status'           => 'Menunggu',
        ]);

        if (request()->is('reservations/pengunjung')) {

            return redirect()
                ->route('reservations.pengunjung')
                ->with('success', 'Reservasi buku berhasil dibuat.');
        }

        return redirect()
            ->route('reservations.pustakawan')
            ->with('success', 'Reservasi buku berhasil dibuat.');
    }
    // ==========================
    // APPROVE
    // ==========================

    public function approve(Reservation $reservation)
    {
        $reservation->update([
            'status' => 'Disetujui',
        ]);

        return redirect()
            ->route('reservations.pustakawan')
            ->with('success', 'Reservasi berhasil disetujui.');
    }

    // ==========================
    // CANCEL
    // ==========================

    public function cancel(Reservation $reservation)
    {
        $reservation->update([
            'status' => 'Dibatalkan',
        ]);

        return redirect()
            ->route('reservations.pustakawan')
            ->with('success', 'Reservasi berhasil dibatalkan.');
    }
}
