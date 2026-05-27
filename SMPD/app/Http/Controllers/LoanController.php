<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoanController extends BaseController
{
    public function index()
    {
        $loans = Loan::with(['member', 'book'])
            ->latest()
            ->paginate(10);

        return view('loans.index', compact('loans'));
    }

    public function create()
    {
        return view('loans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'member_code' => 'required',
            'book_barcode' => 'required',
            'loan_date' => 'required|date',
            'due_date' => 'required|date|after_or_equal:loan_date',
        ]);

        $member = Member::where('member_code', $request->member_code)
            ->where('status', 'Aktif')
            ->first();

        if (!$member) {
            return back()->with('error', 'Anggota tidak ditemukan atau status tidak aktif.');
        }

        $book = Book::where('barcode', $request->book_barcode)->first();

        if (!$book) {
            return back()->with('error', 'Buku dengan barcode tersebut tidak ditemukan.');
        }

        if ($book->stock <= 0) {
            return back()->with('error', 'Stok buku habis. Buku tidak dapat dipinjam.');
        }

        DB::transaction(function () use ($request, $member, $book) {
            Loan::create([
                'loan_code' => 'LN' . date('YmdHis'),
                'member_id' => $member->id,
                'book_id' => $book->id,
                'loan_date' => $request->loan_date,
                'due_date' => $request->due_date,
                'status' => 'Dipinjam',
            ]);

            $book->decrement('stock');
        });

        return redirect()->route('loans.index')->with('success', 'Peminjaman buku berhasil disimpan dan stok buku otomatis berkurang.');
    }
}