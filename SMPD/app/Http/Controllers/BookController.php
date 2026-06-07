<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseControllers;

class BookController extends BaseControllers
{
    public function index(Request $request)
    {
        $books = Book::latest()->paginate(10);

        $search = $request->search;

        $books = Book::with('category')

            ->when($search, function ($query) use ($search) {

                $query->where('title', 'like', "%{$search}%")
                    ->orWhere('author', 'like', "%{$search}%")
                    ->orWhere('barcode', 'like', "%{$search}%")
                    ->orWhere('isbn', 'like', "%{$search}%");
            })

            ->latest()
            ->paginate(10)

            ->withQueryString();

        return view(
            'admin.books.index',
            compact('books')
        );
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.books.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'author'      => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'stock'       => 'required|integer|min:0',
            'barcode'     => 'required|string|unique:books,barcode',
        ]);
        Book::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'year' => $request->year,
            'isbn' => $request->isbn,
            'barcode' => $request->barcode,
            'stock' => $request->stock,
            'title'       => $request->title,
            'author'      => $request->author,
            'publisher'   => $request->publisher,
            'year'        => $request->year,
            'isbn'        => $request->isbn,
            'barcode'     => $request->barcode,
            'stock'       => $request->stock,
            'description' => $request->description,
        ]);
        return redirect()->route('books.index')->with('success', 'Data buku berhasil ditambahkan.');
    }
    public function show(Book $book)
    {
        $book->load('category');
        return view('admin.books.show', compact('book'));
    }
    public function edit(Book $book)
    {
        $categories = Category::all();
        return view('admin.books.edit', compact('book', 'categories'));
    }
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'author'      => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'stock'       => 'required|integer|min:0',
            'barcode'     => 'required|string|unique:books,barcode,' . $book->id,
        ]);
        $book->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'year' => $request->year,
            'isbn' => $request->isbn,
            'barcode' => $request->barcode,
            'stock' => $request->stock,
            'title'       => $request->title,
            'author'      => $request->author,
            'publisher'   => $request->publisher,
            'year'        => $request->year,
            'isbn'        => $request->isbn,
            'barcode'     => $request->barcode,
            'stock'       => $request->stock,
            'description' => $request->description,
        ]);
        return redirect()->route('books.index')->with('success', 'Data buku berhasil diperbarui.');
    }
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Data buku berhasil dihapus.');
    }
}
