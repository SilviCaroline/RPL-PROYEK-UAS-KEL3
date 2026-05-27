<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class OpacController extends BaseController
{
    public function index(Request $request)
    {
        $books = [
            [
                'id' => 1,
                'title' => 'Laskar Pelangi',
                'author' => 'Andrea Hirata',
                'category' => 'Novel',
                'year' => '2005',
                'stock' => 5,
                'status' => 'Tersedia',
                'description' => 'Novel inspiratif tentang perjuangan anak-anak Belitung dalam meraih pendidikan.',
            ],
            [
                'id' => 2,
                'title' => 'Bumi Manusia',
                'author' => 'Pramoedya Ananta Toer',
                'category' => 'Sastra',
                'year' => '1980',
                'stock' => 0,
                'status' => 'Dipinjam',
                'description' => 'Karya sastra Indonesia yang menceritakan kehidupan masa kolonial.',
            ],
            [
                'id' => 3,
                'title' => 'Atomic Habits',
                'author' => 'James Clear',
                'category' => 'Pengembangan Diri',
                'year' => '2018',
                'stock' => 3,
                'status' => 'Tersedia',
                'description' => 'Buku tentang membangun kebiasaan kecil yang menghasilkan perubahan besar.',
            ],
            [
                'id' => 4,
                'title' => 'Algoritma dan Pemrograman',
                'author' => 'Rinaldi Munir',
                'category' => 'Teknologi',
                'year' => '2020',
                'stock' => 2,
                'status' => 'Tersedia',
                'description' => 'Buku dasar tentang logika algoritma dan pemrograman.',
            ],
        ];

        $keyword = strtolower($request->search);

        if ($keyword) {
            $books = array_filter($books, function ($book) use ($keyword) {
                return str_contains(strtolower($book['title']), $keyword)
                    || str_contains(strtolower($book['author']), $keyword)
                    || str_contains(strtolower($book['category']), $keyword);
            });
        }

        return view('opac.index', compact('books'));
    }

    public function show($id)
    {
        $books = [
            1 => [
                'id' => 1,
                'title' => 'Laskar Pelangi',
                'author' => 'Andrea Hirata',
                'category' => 'Novel',
                'year' => '2005',
                'publisher' => 'Bentang Pustaka',
                'isbn' => '9789793062792',
                'stock' => 5,
                'status' => 'Tersedia',
                'description' => 'Novel inspiratif tentang perjuangan anak-anak Belitung dalam meraih pendidikan.',
            ],
            2 => [
                'id' => 2,
                'title' => 'Bumi Manusia',
                'author' => 'Pramoedya Ananta Toer',
                'category' => 'Sastra',
                'year' => '1980',
                'publisher' => 'Hasta Mitra',
                'isbn' => '9789799731234',
                'stock' => 0,
                'status' => 'Dipinjam',
                'description' => 'Karya sastra Indonesia yang menceritakan kehidupan masa kolonial.',
            ],
            3 => [
                'id' => 3,
                'title' => 'Atomic Habits',
                'author' => 'James Clear',
                'category' => 'Pengembangan Diri',
                'year' => '2018',
                'publisher' => 'Avery',
                'isbn' => '9780735211292',
                'stock' => 3,
                'status' => 'Tersedia',
                'description' => 'Buku tentang membangun kebiasaan kecil yang menghasilkan perubahan besar.',
            ],
            4 => [
                'id' => 4,
                'title' => 'Algoritma dan Pemrograman',
                'author' => 'Rinaldi Munir',
                'category' => 'Teknologi',
                'year' => '2020',
                'publisher' => 'Informatika',
                'isbn' => '9786028758123',
                'stock' => 2,
                'status' => 'Tersedia',
                'description' => 'Buku dasar tentang logika algoritma dan pemrograman.',
            ],
        ];

        $book = $books[$id] ?? abort(404);

        return view('opac.detail', compact('book'));
    }
}