<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/public-opac', function () {
    return view('public-opac');
});

Route::get('/dashboard-admin', function () {
    return view('dashboard-admin');
});

Route::get('/detail-buku', function () {
    return view('detail-buku');
});

Route::get('/dashboard-pengguna', function () {
    return view('dashboard-pengguna');
});

Route::get('/ebook-reader', function () {
    return view('ebook-reader');
});

Route::get('/kartu-anggota', function () {
    return view('kartu-anggota');
});

Route::get('/kelola-buku-pustakawan', function () {
    return view('kelola-buku-pustakawan');
});

Route::get('/kelola-denda-admin', function () {
    return view('kelola-denda-admin');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/notifikasi-pengguna', function () {
    return view('notifikasi-pengguna');
});

Route::get('/peminjaman-buku', function () {
    return view('peminjaman-buku');
});

Route::get('/pengembaliann-buku', function () {
    return view('pengembaliann-buku');
});

Route::get('/profil-pengguna', function () {
    return view('profil-pengguna');
});

Route::get('/reservasi-buku', function () {
    return view('reservasi-buku');
});

Route::get('/statistik-laporan-admin', function () {
    return view('statistik-laporan-admin');
});
