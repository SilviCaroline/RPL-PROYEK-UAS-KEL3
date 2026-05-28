<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class StatisticController extends BaseController
{
    public function index()
    {
        $popularBooks = [

            [
                'title' => 'Laskar Pelangi',
                'borrowed' => 45,
            ],

            [
                'title' => 'Atomic Habits',
                'borrowed' => 38,
            ],

            [
                'title' => 'Bumi Manusia',
                'borrowed' => 31,
            ],

        ];

        $activeMembers = [

            [
                'name' => 'Diana Putri',
                'total' => 18,
            ],

            [
                'name' => 'Andi Saputra',
                'total' => 15,
            ],

            [
                'name' => 'Siti Aminah',
                'total' => 12,
            ],

        ];

        return view(
            'admin.statistics.index',
            compact(
                'popularBooks',
                'activeMembers'
            )
        );
    }
}