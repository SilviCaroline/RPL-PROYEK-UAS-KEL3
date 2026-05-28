@php
    $role = request('role', 'pengguna');
@endphp

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard - LibrarySystem</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

    <div class="flex min-h-screen">

        <aside class="w-72 bg-blue-950 text-white p-6 hidden md:block">
            <h1 class="text-2xl font-bold mb-8">LibrarySystem</h1>

            <div class="mb-6 p-4 bg-blue-900 rounded-xl">
                <p class="text-sm text-blue-200">Login sebagai</p>
                <h2 class="font-bold capitalize">{{ $role }}</h2>
            </div>

            <nav class="space-y-3">
                <a href="{{ route('dashboard', ['role' => $role]) }}"
                    class="block px-4 py-3 bg-blue-900 rounded-lg">Dashboard</a>

                @if ($role == 'pustakawan')
                    {{-- Data Buku --}}
                    <a href="{{ route('books.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
                        Data Buku
                    </a>

                    {{-- Data Anggota --}}
                    <a href="{{ route('members.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
                        Data Anggota
                    </a>

                    {{-- Peminjaman --}}
                    <a href="{{ route('loans.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
                        Peminjaman
                    </a>

                    {{-- Pengembalian --}}
                    <a href="{{ route('returns.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
                        Pengembalian
                    </a>

                    {{-- Reservasi --}}
                    <a href="{{ route('reservations.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
                        Reservasi Buku
                    </a>

                    {{-- Statistik --}}
                    <a href="{{ route('statistics.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
                        Statistik Peminjaman
                    </a>

                    {{-- Laporan --}}
                    <a href="{{ route('reports.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
                        Laporan
                    </a>
                @endif

                @if ($role == 'pengguna')
                    <a href="{{ route('opac.index', ['role' => $role]) }}"
                        class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Katalog Buku</a>
                    <a href="{{ route('loan-history.index', ['role' => $role]) }}"
                        class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Riwayat Peminjaman</a>
                    <a href="{{ route('reservations.index', ['role' => $role]) }}"
                        class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Reservasi Buku</a>
                    <a href="{{ route('elibrary.index', ['role' => $role]) }}"
                        class="block px-4 py-3 hover:bg-blue-900 rounded-lg">E-Library</a>
                    <a href="{{ route('members.index', ['role' => $role]) }}"
                        class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Kartu Member</a>
                @endif

                <a href="{{ route('logout') }}"
                    class="block px-4 py-3 bg-red-600 hover:bg-red-700 rounded-lg mt-8">Logout</a>
            </nav>
        </aside>

        <main class="flex-1 p-6 md:p-10">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-blue-950">Dashboard {{ ucfirst($role) }}</h1>
                    <p class="text-slate-500">Selamat datang di sistem informasi perpustakaan.</p>
                </div>

                <a href="{{ route('landing') }}" class="bg-white px-4 py-2 rounded-lg shadow">
                    Home
                </a>
            </div>

            @if ($role == 'pustakawan')
                <section class="grid md:grid-cols-3 xl:grid-cols-6 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-2xl shadow">
                        <p class="text-slate-500 text-sm">Total Peminjaman</p>
                        <h2 class="text-3xl font-bold text-blue-950">320</h2>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow">
                        <p class="text-slate-500 text-sm">Total Buku</p>
                        <h2 class="text-3xl font-bold text-blue-950">200</h2>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow">
                        <p class="text-slate-500 text-sm">Reservasi</p>
                        <h2 class="text-3xl font-bold text-orange-500">18</h2>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow">
                        <p class="text-slate-500 text-sm">Total Denda</p>
                        <h2 class="text-3xl font-bold text-red-600">Rp85.000</h2>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow">
                        <p class="text-slate-500 text-sm">Buku Terpopuler</p>
                        <h2 class="text-lg font-bold text-blue-950">Laskar Pelangi</h2>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow">
                        <p class="text-slate-500 text-sm">Anggota Teraktif</p>
                        <h2 class="text-lg font-bold text-blue-950">Diana Putri</h2>
                    </div>
                </section>

                <section class="grid lg:grid-cols-2 gap-8">
                    <div class="bg-white p-6 rounded-2xl shadow">
                        <h2 class="text-xl font-bold text-blue-950 mb-6">Grafik Buku Trending</h2>

                        <div class="space-y-5">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span>Laskar Pelangi</span>
                                    <span>45 kali</span>
                                </div>
                                <div class="w-full bg-slate-200 h-4 rounded-full">
                                    <div class="bg-blue-950 h-4 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between mb-2">
                                    <span>Atomic Habits</span>
                                    <span>38 kali</span>
                                </div>
                                <div class="w-full bg-slate-200 h-4 rounded-full">
                                    <div class="bg-blue-950 h-4 rounded-full" style="width: 76%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between mb-2">
                                    <span>Bumi Manusia</span>
                                    <span>31 kali</span>
                                </div>
                                <div class="w-full bg-slate-200 h-4 rounded-full">
                                    <div class="bg-blue-950 h-4 rounded-full" style="width: 62%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow">
                        <h2 class="text-xl font-bold text-blue-950 mb-6">Anggota Perpus Teraktif</h2>

                        <div class="space-y-4">
                            <div class="flex justify-between border-b pb-3">
                                <span>Diana Putri</span>
                                <span class="font-bold">18 pinjaman</span>
                            </div>

                            <div class="flex justify-between border-b pb-3">
                                <span>Andi Saputra</span>
                                <span class="font-bold">15 pinjaman</span>
                            </div>

                            <div class="flex justify-between border-b pb-3">
                                <span>Siti Aminah</span>
                                <span class="font-bold">12 pinjaman</span>
                            </div>
                        </div>
                    </div>
                </section>
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
            @endif
        </main>
    </div>

</body>

</html>
