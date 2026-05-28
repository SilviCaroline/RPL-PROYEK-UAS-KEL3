<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Routing\Controller as BaseControllers;

class LoanHistoryController extends BaseControllers
{
    // Pustakawan - semua histori
    public function index()
    {
        $loans = Loan::with(['member', 'book'])
            ->latest()
            ->paginate(10);
        return view('loanhistory.index', compact('loans'));
        $loans = Loan::with(['member', 'book'])->latest()->paginate(10);
        return view('pengunjung.loanhistory.index', compact('loans'));
    }

    // Pengguna - histori peminjaman
    public function pengguna()
    {
        $loans = Loan::latest()->paginate(10);

        return view(
            'pengunjung.loanhistory.index',
            compact('loans')
        );
    }
}
