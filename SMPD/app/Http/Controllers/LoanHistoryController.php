<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Routing\Controller as BaseControllers;



class LoanHistoryController extends BaseControllers
{
    public function index()
    {
        $loans = Loan::with(['member', 'book'])
            ->latest()
            ->paginate(10);

        return view('loanhistory.index', compact('loans'));
    }

   
    public function pengguna()
    {
        $loans = Loan::latest()->paginate(10);

        return view('loans.pengguna', compact('loans'));
    }
}