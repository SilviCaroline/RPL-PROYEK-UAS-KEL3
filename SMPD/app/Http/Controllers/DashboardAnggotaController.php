<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class DashboardAnggotaController extends BaseController
{
    public function index()
    {
        $stats = [
            'active_loans' => 2,
            'loan_history' => 14,
            'reservations' => 1,
            'fine' => 0,
            'books_read' => 25,
            'member_since' => '2024',
        ];

        $popularBooks = [
            [
                'title' => 'Atomic Habits',
                'borrowed' => 45,
            ],
            [
                'title' => 'Laskar Pelangi',
                'borrowed' => 38,
            ],
            [
                'title' => 'Bumi Manusia',
                'borrowed' => 31,
            ],
        ];

        return view(
            'anggota.dashboard.index',
            compact(
                'stats',
                'popularBooks'
            )
        );
    }
}
