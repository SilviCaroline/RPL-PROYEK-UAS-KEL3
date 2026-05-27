<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library System</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-50 text-slate-800">

    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-900">LibrarySystem</h1>

            <div class="space-x-4">
                <a href="{{ route('landing') }}" class="text-slate-700 hover:text-blue-900">Home</a>
                <a href="{{ route('opac.index') }}" class="text-slate-700 hover:text-blue-900">OPAC</a>
                <a href="{{ route('login') }}" class="bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-800">
                    Login
                </a>
            </div>
        </div>
    </nav>

    <section class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h2 class="text-4xl md:text-5xl font-bold text-blue-950 leading-tight">
                Sistem Informasi Perpustakaan Digital
            </h2>

            <p class="mt-6 text-lg text-slate-600">
                Kelola katalog buku, anggota, peminjaman, pengembalian, reservasi,
                e-library, denda, barcode, dan laporan perpustakaan dalam satu sistem.
            </p>

            <div class="mt-8 flex gap-4">
                <a href="{{ route('opac.index') }}"
                    class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800">
                    Lihat Katalog
                </a>

                <a href="{{ route('login') }}"
                    class="border border-blue-900 text-blue-900 px-6 py-3 rounded-lg hover:bg-blue-50">
                    Login Pustakawan
                </a>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-8">
            <h3 class="text-2xl font-bold text-blue-900 mb-6">Fitur Utama</h3>

            <div class="space-y-4">
                <div class="p-4 bg-slate-50 rounded-xl">
                    <h4 class="font-semibold">Public OPAC</h4>
                    <p class="text-sm text-slate-600">Cari buku berdasarkan judul, penulis, dan kategori.</p>
                </div>

                <div class="p-4 bg-slate-50 rounded-xl">
                    <h4 class="font-semibold">Scan Barcode</h4>
                    <p class="text-sm text-slate-600">Peminjaman dan pengembalian buku lebih cepat.</p>
                </div>

                <div class="p-4 bg-slate-50 rounded-xl">
                    <h4 class="font-semibold">E-Library</h4>
                    <p class="text-sm text-slate-600">Akses koleksi buku digital PDF untuk anggota.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-blue-950 text-white py-14">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-6 text-center">
            <div>
                <h3 class="text-3xl font-bold">200+</h3>
                <p class="text-blue-100">Koleksi Buku</p>
            </div>

            <div>
                <h3 class="text-3xl font-bold">50+</h3>
                <p class="text-blue-100">Anggota</p>
            </div>

            <div>
                <h3 class="text-3xl font-bold">24/7</h3>
                <p class="text-blue-100">Akses OPAC</p>
            </div>

            <div>
                <h3 class="text-3xl font-bold">PDF</h3>
                <p class="text-blue-100">E-Library</p>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-16">
        <h3 class="text-3xl font-bold text-center text-blue-950 mb-10">
            Modul Sistem
        </h3>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-2xl shadow">
                <h4 class="font-bold text-lg mb-2">Manajemen Buku</h4>
                <p class="text-slate-600">Tambah, edit, hapus, dan kelola stok buku.</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow">
                <h4 class="font-bold text-lg mb-2">Manajemen Anggota</h4>
                <p class="text-slate-600">Kelola data anggota dan kartu QR member.</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow">
                <h4 class="font-bold text-lg mb-2">Peminjaman</h4>
                <p class="text-slate-600">Proses peminjaman buku menggunakan barcode.</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow">
                <h4 class="font-bold text-lg mb-2">Pengembalian</h4>
                <p class="text-slate-600">Hitung keterlambatan dan denda otomatis.</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow">
                <h4 class="font-bold text-lg mb-2">Reservasi</h4>
                <p class="text-slate-600">Reservasi buku yang sedang dipinjam.</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow">
                <h4 class="font-bold text-lg mb-2">Laporan</h4>
                <p class="text-slate-600">Export laporan bulanan ke PDF dan Excel.</p>
            </div>
        </div>
    </section>

    <footer class="bg-white border-t py-6 text-center text-slate-500">
        © {{ date('Y') }} LibrarySystem. All rights reserved.
    </footer>

</body>

</html>
