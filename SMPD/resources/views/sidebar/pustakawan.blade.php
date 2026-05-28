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
                <p class="text-sm text-blue-200">
                    Login sebagai
                </p>

                <h2 class="font-bold capitalize">
                    Pustakawan
                </h2>
            </div>

            <nav class="space-y-3">

                {{-- Dashboard --}}
                <a href="{{ route('dashboard', ['role' => 'pustakawan']) }}"
                    class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
                    Dashboard
                </a>

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

                {{-- Logout --}}
                <a href="{{ route('logout') }}" class="block px-4 py-3 bg-red-600 hover:bg-red-700 rounded-lg mt-8">
                    Logout
                </a>

            </nav>

        </aside>
</body>

</html>
