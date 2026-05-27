@php
    $role = request('role', 'pengguna');
@endphp

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard - LibrarySystem</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

    <div class="flex min-h-screen">

        <aside class="w-72 bg-blue-950 text-white p-6 hidden md:block">
            <h1 class="text-2xl font-bold mb-8">
                LibrarySystem
            </h1>

            <div class="mb-6 p-4 bg-blue-900 rounded-xl">
                <p class="text-sm text-blue-200">Login sebagai</p>
                <h2 class="font-bold capitalize">{{ $role }}</h2>
            </div>

            <nav class="space-y-3">
                <a href="{{ route('dashboard', ['role' => $role]) }}" class="block px-4 py-3 bg-blue-900 rounded-lg">
                    Dashboard
                </a>

                @if ($role == 'admin')
                    <a href="#" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Manajemen User</a>
                    <a href="{{ route('books.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Manajemen
                        Buku</a>
                    <a href="{{ route('members.index') }}"
                        class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Manajemen Anggota</a>
                    <a href="#" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Laporan Sistem</a>
                    <a href="#" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Pengaturan</a>
                    <a href="{{ route('statistics.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Statistik</a>z
                @endif

                @if ($role == 'pustakawan')
                    <a href="{{ route('books.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Data
                        Buku</a>
                    <a href="{{ route('members.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Data
                        Anggota</a>
                    <a href="{{ route('loans.index') }}"
                        class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Peminjaman</a>
                    <a href="{{ route('returns.index') }}"
                        class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Pengembalian</a>
                    <a href="#" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Denda</a>
                    <a href="{{ route('reports.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Laporan</a>
                    <a href="{{ route('statistics.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Statistik Peminjaman</a>
                @endif

                @if ($role == 'pengguna')
                    <a href="#" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Katalog Buku</a>
                    <a href="#" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Riwayat Pinjaman</a>
                    <a href="{{ route('reservations.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Reservasi Buku</a>
                    <a href="{{ route('elibrary.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">E-Library</a>
                    <a href="#" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Kartu Member</a>
                @endif

                <a href="{{ route('logout') }}" class="block px-4 py-3 bg-red-600 hover:bg-red-700 rounded-lg mt-8">
                    Logout
                </a>
            </nav>
        </aside>

        <main class="flex-1 p-6 md:p-10">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-blue-950">
                        Dashboard {{ ucfirst($role) }}
                    </h1>
                    <p class="text-slate-500">
                        Selamat datang di sistem informasi perpustakaan.
                    </p>
                </div>

                <a href="{{ route('landing') }}" class="bg-white px-4 py-2 rounded-lg shadow">
                    Home
                </a>
            </div>

            @if ($role == 'admin')
                <section class="grid md:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-2xl shadow">
                        <p class="text-slate-500">Total User</p>
                        <h2 class="text-3xl font-bold text-blue-950">58</h2>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow">
                        <p class="text-slate-500">Total Buku</p>
                        <h2 class="text-3xl font-bold text-blue-950">200</h2>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow">
                        <p class="text-slate-500">Pustakawan</p>
                        <h2 class="text-3xl font-bold text-blue-950">5</h2>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow">
                        <p class="text-slate-500">Laporan Bulan Ini</p>
                        <h2 class="text-3xl font-bold text-blue-950">12</h2>
                    </div>
                </section>

                <div class="bg-white p-6 rounded-2xl shadow">
                    <h2 class="text-xl font-bold mb-4">Fokus Admin</h2>
                    <p class="text-slate-600">
                        Admin bertugas mengelola user, role, data master, laporan sistem,
                        pengaturan aplikasi, dan hak akses pustakawan maupun pengguna.
                    </p>
                </div>
            @endif

            @if ($role == 'pustakawan')
                <section class="grid md:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-2xl shadow">
                        <p class="text-slate-500">Peminjaman Aktif</p>
                        <h2 class="text-3xl font-bold text-blue-950">34</h2>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow">
                        <p class="text-slate-500">Terlambat</p>
                        <h2 class="text-3xl font-bold text-red-600">7</h2>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow">
                        <p class="text-slate-500">Reservasi</p>
                        <h2 class="text-3xl font-bold text-blue-950">10</h2>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow">
                        <p class="text-slate-500">Total Denda</p>
                        <h2 class="text-3xl font-bold text-blue-950">Rp85.000</h2>
                    </div>
                </section>

                <div class="bg-white p-6 rounded-2xl shadow">
                    <h2 class="text-xl font-bold mb-4">Operasional Pustakawan</h2>
                    <p class="text-slate-600">
                        Pustakawan mengelola buku, anggota, peminjaman, pengembalian,
                        scan barcode, perhitungan denda, dan laporan operasional harian.
                    </p>
                </div>
            @endif

            @if ($role == 'pengguna')
                <section class="grid md:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-2xl shadow">
                        <p class="text-slate-500">Pinjaman Aktif</p>
                        <h2 class="text-3xl font-bold text-blue-950">2</h2>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow">
                        <p class="text-slate-500">Riwayat Pinjam</p>
                        <h2 class="text-3xl font-bold text-blue-950">14</h2>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow">
                        <p class="text-slate-500">Reservasi Saya</p>
                        <h2 class="text-3xl font-bold text-blue-950">1</h2>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow">
                        <p class="text-slate-500">Denda</p>
                        <h2 class="text-3xl font-bold text-red-600">Rp0</h2>
                    </div>
                </section>

                <div class="bg-white p-6 rounded-2xl shadow">
                    <h2 class="text-xl font-bold mb-4">Area Pengguna / Anggota</h2>
                    <p class="text-slate-600">
                        Pengguna dapat mencari buku melalui OPAC, melakukan reservasi,
                        melihat riwayat peminjaman, membaca e-library, dan melihat kartu member.
                    </p>
                </div>
            @endif

        </main>
    </div>

</body>

</html>
