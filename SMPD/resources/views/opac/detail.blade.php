<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>{{ $book->title }} - LibrarySystem</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100 text-slate-800">


    <aside class="w-72 bg-blue-950 text-white p-6 hidden md:block">
        <h1 class="text-2xl font-bold mb-8">
            LibrarySystem
        </h1>

        <div class="mb-6 p-4 bg-blue-900 rounded-xl">
            <p class="text-sm text-blue-200">
                Login sebagai
            </p>

            <h2 class="font-bold capitalize">
                Pengguna
            </h2>
        </div>

        <nav class="space-y-3">
            <a href="{{ route('pengunjung.dashboard') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
                Dashboard
            </a>
            <a href="{{ route('opac.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
                Katalog Buku
            </a>
            <a href="{{ route('loan-history.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
                Riwayat Peminjaman
            </a>
            <a href="{{ route('reservations.pengunjung') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
                Reservasi Buku
            </a>
            <a href="{{ route('elibrary.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
                E-Library
            </a>
            <a href="{{ route('members.card', 1) }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
                Kartu Member
            </a>
            <a href="{{ route('logout') }}" class="block px-4 py-3 bg-red-600 hover:bg-red-700 rounded-lg mt-8">
                Logout
            </a>

        </nav>

    </aside>

    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-950">LibrarySystem</h1>

            <div class="space-x-4">
                <a href="{{ route('landing') }}" class="text-slate-700 hover:text-blue-900">Home</a>
                <a href="{{ route('opac.index') }}" class="text-blue-900 font-semibold">OPAC</a>
                <a href="{{ route('login') }}" class="bg-blue-950 text-white px-4 py-2 rounded-lg hover:bg-blue-900">
                    Login
                </a>
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-6 py-12">
        <a href="{{ route('opac.index') }}" class="text-blue-900 font-semibold">
            ← Kembali ke OPAC
        </a>

        <div class="bg-white rounded-2xl shadow mt-6 p-8 grid md:grid-cols-3 gap-8">
            <div class="bg-blue-100 rounded-2xl h-80 flex items-center justify-center">
                <span class="text-8xl">📘</span>
            </div>

            <div class="md:col-span-2">
                <span class="bg-blue-100 text-blue-900 px-3 py-1 rounded-full text-sm">
                    {{ $book->category->name ?? '-' }}
                </span>

                <h1 class="text-4xl font-bold text-blue-950 mt-4">
                    {{ $book->title }}
                </h1>

                <p class="text-slate-500 mt-2 text-lg">
                    Oleh {{ $book->author }}
                </p>

                <div class="grid md:grid-cols-2 gap-4 mt-8">
                    <div class="border rounded-xl p-4">
                        <p class="text-sm text-slate-500">Penerbit</p>
                        <h3 class="font-semibold">{{ $book->publisher ?? '-' }}</h3>
                    </div>

                    <div class="border rounded-xl p-4">
                        <p class="text-sm text-slate-500">Tahun Terbit</p>
                        <h3 class="font-semibold">{{ $book->year ?? '-' }}</h3>
                    </div>

                    <div class="border rounded-xl p-4">
                        <p class="text-sm text-slate-500">ISBN</p>
                        <h3 class="font-semibold">{{ $book->isbn ?? '-' }}</h3>
                    </div>

                    <div class="border rounded-xl p-4">
                        <p class="text-sm text-slate-500">Stok</p>
                        <h3 class="font-semibold">{{ $book->stock }} Buku</h3>
                    </div>
                </div>

                <div class="mt-8">
                    <h2 class="text-xl font-bold mb-2">Deskripsi</h2>
                    <p class="text-slate-600">
                        {{ $book->description ?? 'Tidak ada deskripsi.' }}
                    </p>
                </div>

                <div class="mt-8 flex gap-4">
                    @if ($book->stock > 0)
                        <a href="{{ route('login') }}"
                            class="bg-blue-950 text-white px-6 py-3 rounded-lg hover:bg-blue-900">
                            Login untuk Pinjam
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                            Reservasi Buku
                        </a>
                    @endif

                    <a href="{{ route('opac.index') }}"
                        class="border border-slate-300 px-6 py-3 rounded-lg hover:bg-slate-50">
                        Lihat Buku Lain
                    </a>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
