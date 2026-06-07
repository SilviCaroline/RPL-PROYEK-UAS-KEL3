<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Reservation;
use App\Models\ReturnBook;
use App\Models\Member;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class DashboardAnggotaController extends BaseController
{
    public function index(Request $request)
    {
        $memberId = session('member_id');

        $periode = $request->periode;

        $bulan = null;
        $tahun = null;

        if ($periode) {

            [$tahun, $bulan] =
                explode('-', $periode);
        }

        $loanQuery = Loan::query();

        if ($periode) {

            $loanQuery
                ->whereYear('loan_date', $tahun)
                ->whereMonth('loan_date', $bulan);
        }

        $loanQuery = Loan::query();

        if ($periode) {

            $loanQuery
                ->whereYear(
                    'loan_date',
                    $tahun
                )
                ->whereMonth(
                    'loan_date',
                    $bulan
                );
        }
        $activeLoans =
            (clone $loanQuery)
            ->where(
                'status',
                'Dipinjam'
            )
            ->count();

        $loanHistory =
            (clone $loanQuery)
            ->count();

        $reservationQuery =
            Reservation::query();

        if ($periode) {

            $reservationQuery
                ->whereYear(
                    'created_at',
                    $tahun
                )
                ->whereMonth(
                    'created_at',
                    $bulan
                );
        }

        $reservations =
            $reservationQuery->count();

        $fineQuery =
            ReturnBook::query();

        if ($periode) {

            $fineQuery
                ->whereYear(
                    'created_at',
                    $tahun
                )
                ->whereMonth(
                    'created_at',
                    $bulan
                );
        }

        $fine =
            $fineQuery
            ->sum('fine_amount');

        $stats = [
            'active_loans' => $activeLoans,
            'loan_history' => $loanHistory,
            'reservations' => $reservations,
            'fine' => $fine,
        ];

        // Buku populer
        $popularBooks =
            (clone $loanQuery)
            ->select(
                'book_id',
                DB::raw(
                    'COUNT(*) as total'
                )
            )
            ->with('book')
            ->groupBy('book_id')
            ->orderByDesc('total')
            ->take(5)
            ->get();

        // Anggota teraktif
        $activeMembers =
            (clone $loanQuery)
            ->select(
                'member_id',
                DB::raw(
                    'COUNT(*) as total'
                )
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

        if ($periode) {

            $days =
                cal_days_in_month(
                    CAL_GREGORIAN,
                    $bulan,
                    $tahun
                );

            for ($d = 1; $d <= $days; $d++) {

                $loanChart[] = [

                    'bulan' => $d,

                    'jumlah' => Loan::whereDate(
                        'loan_date',
                        sprintf(
                            '%s-%s-%02d',
                            $tahun,
                            $bulan,
                            $d
                        )
                    )->count()
                ];
            }
        } else {

            for ($i = 5; $i >= 0; $i--) {

                $date = now()->subMonths($i);

                $loanChart[] = [

                    'bulan' =>
                    $date->format('M'),

                    'jumlah' =>
                    Loan::whereMonth(
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
