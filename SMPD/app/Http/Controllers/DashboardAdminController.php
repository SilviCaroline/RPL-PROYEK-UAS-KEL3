<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Member;
use App\Models\Loan;
use App\Models\Reservation;
use Illuminate\Routing\Controller as BaseController;

class DashboardAdminController extends BaseController
{
    public function index()
    {
        $totalBooks = Book::count();

        $totalMembers =
            Member::whereHas(
                'role',
                fn($q) =>
                $q->where(
                    'name',
                    'anggota'
                )
            )->count();

        $totalLibrarians =
            Member::whereHas(
                'role',
                fn($q) =>
                $q->where(
                    'name',
                    'pustakawan'
                )
            )->count();

        $todayLoans =
            Loan::whereDate(
                'loan_date',
                today()
            )->count();

        $borrowedBooks =
            Loan::where(
                'status',
                'Dipinjam'
            )->count();

        $totalReservations =
            Reservation::count();

        // =====================
        // PERSENTASE DASHBOARD
        // =====================

        $borrowPercent =
            round(
                ($borrowedBooks / max($totalBooks, 1))
                    * 100
            );

        $reservationPercent =
            round(
                ($totalReservations / max($totalBooks, 1))
                    * 100
            );

        return view(
            'admin.dashboard.index',
            compact(
                'totalBooks',
                'totalMembers',
                'totalLibrarians',
                'todayLoans',
                'borrowedBooks',
                'totalReservations',
                'borrowPercent',
                'reservationPercent'
            )
        );
    }
}
