<?php

namespace App\Http\Controllers;

class StatisticController extends BaseController
{
    public function index()
    {
        $popularBooks = [
            ['title' => 'Laskar Pelangi', 'borrowed' => 45],
            ['title' => 'Atomic Habits', 'borrowed' => 38],
            ['title' => 'Bumi Manusia', 'borrowed' => 31],
            ['title' => 'Algoritma dan Pemrograman', 'borrowed' => 26],
        ];

        $activeMembers = [
            ['name' => 'Diana Putri', 'total' => 18],
            ['name' => 'Andi Saputra', 'total' => 15],
            ['name' => 'Siti Aminah', 'total' => 12],
            ['name' => 'Budi Santoso', 'total' => 10],
        ];

        return view('statistics.index', compact('popularBooks', 'activeMembers'));
    }
}