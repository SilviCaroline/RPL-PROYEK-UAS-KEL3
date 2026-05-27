<?php

namespace App\Http\Controllers;

use App\Models\DigitalBook;

class ELibraryController extends BaseController
{
    public function index()
    {
        $digitalBooks = DigitalBook::with('category')->latest()->get();

        return view('elibrary.index', compact('digitalBooks'));
    }

    public function read(DigitalBook $digitalBook)
    {
        $digitalBook->load('category');

        return view('elibrary.read', compact('digitalBook'));
    }
}