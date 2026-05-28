<?php

namespace App\Http\Controllers;

use App\Models\Fine;
use App\Models\Loan;
use App\Models\ReturnBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseControllers;

class ReturnController extends BaseControllers
{
    public function index()
    {
        $returns = ReturnBook::with(['loan.member', 'loan.book'])
            ->latest()
            ->paginate(10);

        return view('returns.index', compact('returns'));
    }

    public function process(Request $request)
    {
        $request->validate([
            'loan_code' => 'required',
            'book_barcode' => 'required',
            'return_date' => 'required|date',
        ]);

        $loan = Loan::with(['book', 'member'])
            ->where('loan_code', $request->loan_code)
            ->where('status', '!=', 'Dikembalikan')
            ->first();

        if (!$loan) {
            return back()->with('error', 'Data peminjaman tidak ditemukan atau sudah dikembalikan.');
        }

        if ($loan->book->barcode !== $request->book_barcode) {
            return back()->with('error', 'Barcode buku tidak sesuai dengan data peminjaman.');
        }

        $returnDate = strtotime($request->return_date);
        $dueDate = strtotime($loan->due_date);

        $lateDays = 0;
        if ($returnDate > $dueDate) {
            $lateDays = floor(($returnDate - $dueDate) / 86400);
        }

        $fineAmount = $lateDays * 5000;

        DB::transaction(function () use ($loan, $request, $lateDays, $fineAmount) {
            ReturnBook::create([
                'return_code' => 'RT' . date('YmdHis'),
                'loan_id' => $loan->id,
                'return_date' => $request->return_date,
                'late_days' => $lateDays,
                'fine_amount' => $fineAmount,
            ]);

            if ($fineAmount > 0) {
                Fine::create([
                    'loan_id' => $loan->id,
                    'amount' => $fineAmount,
                    'status' => 'Belum Dibayar',
                ]);
            }

            $loan->update([
                'status' => $lateDays > 0 ? 'Terlambat' : 'Dikembalikan',
            ]);

            $loan->book->increment('stock');
        });

        return redirect()->route('returns.index')->with('success', 'Pengembalian berhasil diproses.');
    }
}