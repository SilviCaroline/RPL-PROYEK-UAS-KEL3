<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LibrarySeeder extends Seeder
{
    public function run(): void
    {
        // =====================
        // CATEGORY
        // =====================

        $categories = [
            'Novel',
            'Sastra',
            'Teknologi',
            'Pendidikan',
            'Sejarah'
        ];

        foreach ($categories as $category) {

            DB::table('categories')->insert([
                'name' => $category,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // =====================
        // BOOKS
        // =====================

        for ($i = 1; $i <= 200; $i++) {

            DB::table('books')->insert([

                'category_id' => rand(1, 5),

                'title' =>
                'Buku Perpustakaan ' . $i,

                'author' =>
                'Penulis ' . $i,

                'publisher' =>
                'Penerbit ' . $i,

                'year' =>
                rand(2000, 2026),

                'isbn' =>
                '978602' .
                    str_pad(
                        $i,
                        7,
                        '0',
                        STR_PAD_LEFT
                    ),

                'barcode' =>
                'BK' .
                    str_pad(
                        $i,
                        4,
                        '0',
                        STR_PAD_LEFT
                    ),

                'stock' =>
                rand(1, 10),

                'description' =>
                'Deskripsi singkat buku perpustakaan nomor ' . $i,

                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // =====================
        // ADMIN
        // =====================

        DB::table('members')->insert([

            'member_code' => 'ADM001',

            'name' => 'Administrator',

            'email' => 'admin@smpd.com',

            'password' =>
            Hash::make('admin123'),

            'role' => 'admin',

            'phone' => '081111111111',

            'address' => 'Kantor SMPD',

            'status' => 'Aktif',

            'created_at' => now(),

            'updated_at' => now(),
        ]);

        // =====================
        // PUSTAKAWAN
        // =====================

        DB::table('members')->insert([

            'member_code' => 'PST001',

            'name' => 'Pustakawan',

            'email' => 'pustakawan@smpd.com',

            'password' =>
            Hash::make('pustakawan123'),

            'role' => 'pustakawan',

            'phone' => '082222222222',

            'address' => 'Perpustakaan SMPD',

            'status' => 'Aktif',

            'created_at' => now(),

            'updated_at' => now(),
        ]);

        // =====================
        // ANGGOTA
        // =====================

        for ($i = 1; $i <= 50; $i++) {

            DB::table('members')->insert([

                'member_code' =>
                'MBR' .
                    str_pad(
                        $i,
                        4,
                        '0',
                        STR_PAD_LEFT
                    ),

                'name' =>
                'Anggota ' . $i,

                'email' =>
                'anggota' .
                    $i .
                    '@email.com',

                'password' =>
                Hash::make('password123'),

                'role' =>
                'anggota',

                'phone' =>
                '08' .
                    rand(
                        1000000000,
                        9999999999
                    ),

                'address' =>
                'Alamat anggota ' . $i,

                'status' =>
                'Aktif',

                'created_at' => now(),

                'updated_at' => now(),
            ]);
        }

        // =====================
        // DIGITAL BOOKS
        // =====================

        for ($i = 1; $i <= 10; $i++) {

            DB::table('digital_books')->insert([

                'category_id' =>
                rand(1, 5),

                'title' =>
                'Digital Book ' . $i,

                'author' =>
                'Author Digital ' . $i,

                'file' =>
                'digital-book-' . $i . '.pdf',

                'access' =>
                'Anggota',

                'created_at' => now(),

                'updated_at' => now(),
            ]);
        }
    }
}
