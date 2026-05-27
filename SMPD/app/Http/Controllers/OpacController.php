<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class OpacController extends BaseController
{
    public function index(Request $request)
    {
        $books = Book::with('category')
            ->when($request->search, function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%')
                    ->orWhere('author', 'like', '%' . $request->search . '%')
                    ->orWhereHas('category', function ($categoryQuery) use ($request) {
                        $categoryQuery->where('name', 'like', '%' . $request->search . '%');
                    });
            })
            ->latest()
            ->paginate(12);

        return view('opac.index', compact('books'));
    }

    public function show(Book $book)
    {
        $book->load('category');

        return view('opac.detail', compact('book'));
    }
}