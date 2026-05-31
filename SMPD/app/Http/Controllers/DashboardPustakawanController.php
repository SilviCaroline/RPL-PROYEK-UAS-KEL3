<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

use App\Models\Book;
use App\Models\Loan;
use App\Models\Member;
use App\Models\Reservation;
use App\Models\ReturnBook;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardPustakawanController extends BaseController
{
    public function index(Request $request)
    {
        $period = $request->period ?? 'week';

        $labels = [];
        $data = [];

        /*
        |--------------------------------------------------------------------------
        | Grafik Peminjaman
        |--------------------------------------------------------------------------
        */

        if ($period == 'week') {

            for ($i = 6; $i >= 0; $i--) {

                $date = Carbon::now()->subDays($i);

                $labels[] = $date->format('D');

                $data[] = Loan::whereDate(
                    'loan_date',
                    $date
                )->count();
            }
        } elseif ($period == 'month') {

            for ($i = 29; $i >= 0; $i--) {

                $date = Carbon::now()->subDays($i);

                $labels[] = $date->format('d M');

                $data[] = Loan::whereDate(
                    'loan_date',
                    $date
                )->count();
            }
        } elseif ($period == 'year') {

            for ($i = 11; $i >= 0; $i--) {

                $month = Carbon::now()->subMonths($i);

                $labels[] = $month->format('M');

                $data[] = Loan::whereMonth(
                    'loan_date',
                    $month->month
                )
                    ->whereYear(
                        'loan_date',
                        $month->year
                    )
                    ->count();
            }
        } elseif ($period == '3years') {

            for ($i = 2; $i >= 0; $i--) {

                $year = Carbon::now()->subYears($i);

                $labels[] = $year->format('Y');

                $data[] = Loan::whereYear(
                    'loan_date',
                    $year->year
                )->count();
            }
        }

        /*
        |--------------------------------------------------------------------------
        | Statistik Dashboard
        |--------------------------------------------------------------------------
        */

        // Total seluruh peminjaman
        $totalLoans = Loan::count();

        // Total seluruh pengembalian
        $totalReturns = ReturnBook::count();

        // Reservasi menunggu
        $pendingReservations = Reservation::where(
            'status',
            'Menunggu'
        )->count();

        // Total keterlambatan
        $lateLoans = ReturnBook::where(
            'late_days',
            '>',
            0
        )->count();

        /*
        |--------------------------------------------------------------------------
        | Ringkasan Sistem
        |--------------------------------------------------------------------------
        */

        $totalBooks = Book::count();

        $totalMembers = Member::count();

        $borrowedBooks = Loan::where(
            'status',
            'Dipinjam'
        )->count();

        $availableBooks =
            $totalBooks - $borrowedBooks;

        /*
        |--------------------------------------------------------------------------
        | Reservasi Terbaru
        |--------------------------------------------------------------------------
        */

        $reservations = Reservation::with([
            'member',
            'book'
        ])
            ->latest()
            ->take(5)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | Buku Terpopuler
        |--------------------------------------------------------------------------
        */

        $popularBooks = Loan::with('book')
            ->get()
            ->groupBy('book_id')
            ->map(function ($item) {

                return [

                    'title' =>
                    $item->first()->book->title,

                    'total' =>
                    $item->count()

                ];
            })
            ->sortByDesc('total')
            ->take(5);

        /*
        |--------------------------------------------------------------------------
        | Return View
        |--------------------------------------------------------------------------
        */

        return view(
            'pustakawan.dashboard.index',
            compact(
                'period',
                'labels',
                'data',

                'totalLoans',
                'totalReturns',
                'pendingReservations',
                'lateLoans',

                'totalBooks',
                'totalMembers',

                'borrowedBooks',
                'availableBooks',

                'reservations',
                'popularBooks'
            )
        );
    }
}
