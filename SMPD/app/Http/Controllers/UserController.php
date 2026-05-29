<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function index()
    {
        $roles = [
            [
                'nama_role' => 'Admin',
                'deskripsi' => 'Akses penuh ke semua fitur sistem'
            ],
            [
                'nama_role' => 'Pustakawan',
                'deskripsi' => 'Mengelola buku, anggota dan transaksi'
            ],
            [
                'nama_role' => 'Pengunjung',
                'deskripsi' => 'Melihat laporan dan monitoring'
            ]
        ];

        return view('admin.users.index', compact('roles'));
    }
}