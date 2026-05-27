<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanController extends Controller
{
    private function loans()
    {
        return [
            1 => [
                'id' => 1,
                'loan_code' => 'LN001',
                'member_code' => 'MBR001',
                'member_name' => 'Diana Putri',
                'book_barcode' => 'BK001',
                'book_title' => 'Laskar Pelangi',
                'loan_date' => '2026-05-20',
                'due_date' => '2026-05-27',
                'status' => 'Dipinjam',
            ],
            2 => [
                'id' => 2,
                'loan_code' => 'LN002',
                'member_code' => 'MBR002',
                'member_name' => 'Andi Saputra',
                'book_barcode' => 'BK002',
                'book_title' => 'Bumi Manusia',
                'loan_date' => '2026-05-18',
                'due_date' => '2026-05-25',
                'status' => 'Terlambat',
            ],
        ];
    }

    public function index()
    {
        $loans = $this->loans();
        return view('loans.index', compact('loans'));
    }

    public function create()
    {
        return view('loans.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('loans.index')->with('success', 'Peminjaman buku berhasil disimpan.');
    }
}