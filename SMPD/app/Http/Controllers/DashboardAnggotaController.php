<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Reservation;
use App\Models\ReturnBook;
use App\Models\Book;
use App\Models\Member;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class DashboardAnggotaController extends BaseController{
    public function index()
    {
        $memberId = session('member_id');

        $activeLoans = Loan::where(
            'member_id',
            $memberId
        )
            ->where('status', 'Dipinjam')
            ->count();

        $loanHistory = Loan::where(
            'member_id',
            $memberId
        )->count();

        $reservations = Reservation::where(
            'member_id',
            $memberId
        )->count();

        $fine = ReturnBook::whereHas(
            'loan',
            fn($q) =>
            $q->where(
                'member_id',
                $memberId
            )
        )->sum('fine_amount');

        $stats = [
            'active_loans' => $activeLoans,
            'loan_history' => $loanHistory,
            'reservations' => $reservations,
            'fine' => $fine,
        ];

        // Buku populer
        $popularBooks = Loan::select(
            'book_id',
            DB::raw('COUNT(*) as total')
        )
            ->with('book')
            ->groupBy('book_id')
            ->orderByDesc('total')
            ->take(5)
            ->get();

        // Anggota teraktif
        $activeMembers = Loan::select(
            'member_id',
            DB::raw('COUNT(*) as total')
        )
            ->with('member')
            ->groupBy('member_id')
            ->orderByDesc('total')
            ->take(5)
            ->get();

        // Online user (simulasi)
        $onlineUsers = Member::where(
            'updated_at',
            '>=',
            now()->subMinutes(10)
        )->count();

        // Grafik peminjaman saya
        $loanChart = [];

        for ($i = 5; $i >= 0; $i--) {
            $date = now()->subMonths($i);

            $loanChart[] = [
                'bulan' => $date->format('M'),
                'jumlah' => Loan::where(
                    'member_id',
                    $memberId
                )
                    ->whereMonth(
                        'loan_date',
                        $date->month
                    )
                    ->whereYear(
                        'loan_date',
                        $date->year
                    )
                    ->count()
            ];
        }

        return view(
            'anggota.dashboard.index',
            compact(
                'stats',
                'popularBooks',
                'activeMembers',
                'onlineUsers',
                'loanChart'
            )
        );
    }
}
