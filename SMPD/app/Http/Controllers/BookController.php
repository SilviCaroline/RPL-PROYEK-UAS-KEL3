<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class BookController extends BaseController
{
    private function books()
    {
        return [
            1 => [
                'id' => 1,
                'title' => 'Laskar Pelangi',
                'author' => 'Andrea Hirata',
                'category' => 'Novel',
                'year' => '2005',
                'stock' => 5,
                'barcode' => 'BK001',
                'status' => 'Tersedia',
            ],
            2 => [
                'id' => 2,
                'title' => 'Bumi Manusia',
                'author' => 'Pramoedya Ananta Toer',
                'category' => 'Sastra',
                'year' => '1980',
                'stock' => 0,
                'barcode' => 'BK002',
                'status' => 'Dipinjam',
            ],
            3 => [
                'id' => 3,
                'title' => 'Atomic Habits',
                'author' => 'James Clear',
                'category' => 'Pengembangan Diri',
                'year' => '2018',
                'stock' => 3,
                'barcode' => 'BK003',
                'status' => 'Tersedia',
            ],
        ];
    }

    public function index()
    {
        $books = $this->books();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('books.index')->with('success', 'Data buku berhasil ditambahkan.');
    }

    public function show($id)
    {
        $book = $this->books()[$id] ?? abort(404);
        return view('books.show', compact('book'));
    }

    public function edit($id)
    {
        $book = $this->books()[$id] ?? abort(404);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('books.index')->with('success', 'Data buku berhasil diperbarui.');
    }

    public function destroy($id)
    {
        return redirect()->route('books.index')->with('success', 'Data buku berhasil dihapus.');
    }
}