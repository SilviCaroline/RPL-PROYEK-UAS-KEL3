<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseControllers;

class LoanController extends BaseControllers
{
    public function index()
    {
        $loans = Loan::latest()->paginate(10);

        return view(
            'pustakawan.loans.index',
            compact('loans')
        );
    }

    public function create()
    {
        return view('pustakawan.loans.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'member_code' => 'required',
            'kode_buku'   => 'required',
            'loan_date'   => 'required|date',
            'due_date'    => 'required|date|after_or_equal:loan_date',
        ]);

        $member = Member::where('member_code', $request->member_code)
            ->where('status', 'Aktif')
            ->first();

        if (!$member) {
            return back()->with('error', 'Anggota tidak ditemukan atau status tidak aktif.');
        }

        $book = Book::where('kode_buku', $request->kode_buku)->first();

        if (!$book) {
            return back()->with('error', 'Buku dengan kode tersebut tidak ditemukan.');
        }

        if ($book->stock <= 0) {
            return back()->with('error', 'Stok buku habis.');
        }

        DB::transaction(function () use ($request, $member, $book) {

            Loan::create([
                'loan_code' => 'LN' . now()->format('YmdHis'),
                'member_id' => $member->id,
                'book_id'   => $book->id,
                'loan_date' => $request->loan_date,
                'due_date'  => $request->due_date,
                'status'    => 'Dipinjam',
            ]);

            $book->decrement('stock');
        });

        return redirect()
            ->route('loans.index')
            ->with(
                'success',
                'Peminjaman buku berhasil disimpan dan stok buku otomatis berkurang.'
            );
    }
}
