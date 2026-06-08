<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Reservation;
use App\Models\ReturnBook;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class DashboardAnggotaController extends BaseController
{
    public function index(Request $request)
    {
        $memberId = session('member_id');

        if (!$memberId) {
            return redirect()->route('login');
        }

        $periode = $request->periode;

        $bulan = null;
        $tahun = null;

        if ($periode) {
            [$tahun, $bulan] = explode('-', $periode);
        }

        /*
        |--------------------------------------------------------------------------
        | QUERY PINJAMAN SAYA
        |--------------------------------------------------------------------------
        */

        $loanQuery = Loan::where(
            'member_id',
            $memberId
        );

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

        /*
        |--------------------------------------------------------------------------
        | STATISTIK SAYA
        |--------------------------------------------------------------------------
        */

        $activeLoans = (clone $loanQuery)
            ->where('status', 'Dipinjam')
            ->count();

        $loanHistory = (clone $loanQuery)
            ->count();

        /*
        |--------------------------------------------------------------------------
        | RESERVASI SAYA
        |--------------------------------------------------------------------------
        */

        $reservationQuery = Reservation::where(
            'member_id',
            $memberId
        );

        if ($periode) {

            $reservationQuery
                ->whereYear('created_at', $tahun)
                ->whereMonth('created_at', $bulan);
        }

        $reservations = $reservationQuery->count();

        /*
        |--------------------------------------------------------------------------
        | DENDA SAYA
        |--------------------------------------------------------------------------
        */

        $fineQuery = ReturnBook::whereHas(
            'loan',
            function ($query) use ($memberId) {

                $query->where(
                    'member_id',
                    $memberId
                );
            }
        );

        if ($periode) {

            $fineQuery
                ->whereYear('created_at', $tahun)
                ->whereMonth('created_at', $bulan);
        }

        $fine = $fineQuery->sum('fine_amount');

        /*
        |--------------------------------------------------------------------------
        | STATISTIK
        |--------------------------------------------------------------------------
        */

        $stats = [

            'active_loans' => $activeLoans,

            'loan_history' => $loanHistory,

            'reservations' => $reservations,

            'fine' => $fine,

        ];

        /*
        |--------------------------------------------------------------------------
        | BUKU TERPOPULER (GLOBAL)
        |--------------------------------------------------------------------------
        */

        $popularBooks = Loan::select(
            'book_id',
            DB::raw('COUNT(*) as total')
        )
            ->with('book')
            ->groupBy('book_id')
            ->orderByDesc('total')
            ->take(5)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | ANGGOTA TERAKTIF (GLOBAL)
        |--------------------------------------------------------------------------
        */

        $activeMembers = Loan::select(
            'member_id',
            DB::raw('COUNT(*) as total')
        )
            ->with('member')
            ->groupBy('member_id')
            ->orderByDesc('total')
            ->take(5)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | ANGGOTA ONLINE
        |--------------------------------------------------------------------------
        |
        | Jika belum punya kolom last_seen,
        | sementara gunakan updated_at.
        |
        */

        $onlineUsers = Member::where('role_id', 3)
            ->where(
                'updated_at',
                '>=',
                now()->subMinutes(10)
            )
            ->count();

        /*
        |--------------------------------------------------------------------------
        | GRAFIK PEMINJAMAN KESELURUHAN
        |--------------------------------------------------------------------------
        */

        $loanChart = [];

        if ($periode) {

            $days = cal_days_in_month(
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

                    'bulan' => $date->format('M'),

                    'jumlah' => Loan::whereMonth(
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
