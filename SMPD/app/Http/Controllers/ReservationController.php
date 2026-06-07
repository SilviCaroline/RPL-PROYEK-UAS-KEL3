<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Member;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Loan;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Notification;

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

    //anggota
    public function anggota()
    {
        $memberId = session('member_id');

        $reservations = Reservation::with([
            'member',
            'book'
        ])
            ->where('member_id', $memberId)
            ->latest()
            ->paginate(10);

        $totalReservations = Reservation::where(
            'member_id',
            $memberId
        )->count();

        $waitingReservations = Reservation::where(
            'member_id',
            $memberId
        )
            ->where('status', 'Menunggu')
            ->count();

        $approvedReservations = Reservation::where(
            'member_id',
            $memberId
        )
            ->where('status', 'Disetujui')
            ->count();

        return view(
            'anggota.reservations.anggota',
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
            'kode_buku',
            $request->kode_buku
        )->firstOrFail();

        Reservation::create([
            'reservation_code' => 'RSV' . date('YmdHis'),
            'member_id'        => $member->id,
            'book_id'          => $book->id,
            'reservation_date' => $request->reservation_date,
            'status'           => 'Menunggu',
        ]);

        if ($request->from == 'anggota') {

            return redirect()
                ->route('reservations.anggota')
                ->with(
                    'success',
                    'Reservasi buku berhasil dibuat.'
                );
        }

        return redirect()
            ->route('reservations.pustakawan')
            ->with(
                'success',
                'Reservasi buku berhasil dibuat.'
            );
    }
    // ==========================
    // APPROVE
    // ==========================

    public function approve(Reservation $reservation)
    {
        $reservation->update([
            'status' => 'Disetujui'
        ]);

        Loan::create([
            'loan_code' => 'LON' . now()->format('YmdHis'),
            'member_id' => $reservation->member_id,
            'book_id' => $reservation->book_id,
            'loan_date' => now(),
            'due_date' => now()->addDays(7),
            'status' => 'Dipinjam',
        ]);

        $notification = Notification::create([
            'member_id' => $reservation->member_id,
            'title' => 'Reservasi Disetujui',
            'message' => 'Reservasi buku Anda telah disetujui dan buku berhasil dipinjam.',
            'type' => 'success',
            'is_read' => false,
        ]);

        return redirect()
            ->route('reservations.pustakawan')
            ->with(
                'success',
                'Reservasi berhasil disetujui.'
            );
    }

    // ==========================
    // CANCEL
    // ==========================

    public function cancel(Reservation $reservation)
    {
        $reservation->update([
            'status' => 'Dibatalkan'
        ]);

        Notification::create([
            'member_id' => $reservation->member_id,
            'title' => 'Reservasi Ditolak',
            'message' => 'Reservasi buku Anda ditolak oleh pustakawan.',
            'type' => 'danger',
            'is_read' => false,
        ]);

        return redirect()
            ->route('reservations.pustakawan')
            ->with(
                'success',
                'Reservasi berhasil ditolak.'
            );
    }
}
