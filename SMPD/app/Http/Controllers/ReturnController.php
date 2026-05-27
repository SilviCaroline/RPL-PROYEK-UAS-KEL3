<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReturnController extends BaseController
{
    public function index()
    {
        $returns = [
            [
                'return_code' => 'RT001',
                'loan_code' => 'LN001',
                'member_name' => 'Diana Putri',
                'book_title' => 'Laskar Pelangi',
                'due_date' => '2026-05-27',
                'return_date' => '2026-05-27',
                'late_days' => 0,
                'fine' => 0,
                'status' => 'Tepat Waktu',
            ],
            [
                'return_code' => 'RT002',
                'loan_code' => 'LN002',
                'member_name' => 'Andi Saputra',
                'book_title' => 'Bumi Manusia',
                'due_date' => '2026-05-25',
                'return_date' => '2026-05-27',
                'late_days' => 2,
                'fine' => 10000,
                'status' => 'Terlambat',
            ],
        ];

        return view('returns.index', compact('returns'));
    }

    public function process(Request $request)
    {
        return redirect()->route('returns.index')->with('success', 'Pengembalian berhasil diproses dan denda otomatis dihitung.');
    }
}