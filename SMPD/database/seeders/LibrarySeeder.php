<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrarySeeder extends Seeder
{
    public function run(): void
    {
        $categories = ['Novel', 'Sastra', 'Teknologi', 'Pendidikan', 'Sejarah'];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        for ($i = 1; $i <= 200; $i++) {
            DB::table('books')->insert([
                'category_id' => rand(1, 5),
                'title' => 'Buku Perpustakaan ' . $i,
                'author' => 'Penulis ' . $i,
                'publisher' => 'Penerbit ' . $i,
                'year' => rand(2000, 2026),
                'isbn' => '978602' . str_pad($i, 7, '0', STR_PAD_LEFT),
                'kode_buku' => 'BK' . str_pad($i, 4, '0', STR_PAD_LEFT),
                'stock' => rand(0, 10),
                'description' => 'Deskripsi singkat buku perpustakaan nomor ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        for ($i = 1; $i <= 50; $i++) {
            DB::table('members')->insert([
                'member_code' => 'MBR' . str_pad($i, 4, '0', STR_PAD_LEFT),
                'name' => 'Anggota ' . $i,
                'email' => 'anggota' . $i . '@email.com',
                'phone' => '08' . rand(1000000000, 9999999999),
                'address' => 'Alamat anggota ' . $i,
                'status' => 'Aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        for ($i = 1; $i <= 10; $i++) {
            DB::table('digital_books')->insert([
                'category_id' => rand(1, 5),
                'title' => 'Digital Book ' . $i,
                'author' => 'Author Digital ' . $i,
                'file' => 'digital-book-' . $i . '.pdf',
                'access' => 'Anggota',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}