<?php

namespace App\Http\Controllers;

use App\Models\DigitalBook;
use App\Models\Reservation;
use Illuminate\Routing\Controller as BaseControllers;

class ELibraryController extends BaseControllers
{
    public function index()
    {
        $digitalBooks = DigitalBook::with('category')->latest()->get();
        return view('e-library.index', compact('digitalBooks'));
    }

    public function read($id)
    {
        $digitalBook = DigitalBook::findOrFail($id);

        $memberId = 1; // sementara dummy

        $reservation = Reservation::where('book_id', $digitalBook->book_id)
            ->where('member_id', $memberId)
            ->where('status', 'Disetujui')
            ->first();

        return view(
            'e-library.read',
            compact(
                'digitalBook',
                'reservation'
            )
        );
    }
}
