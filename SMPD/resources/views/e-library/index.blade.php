<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>E-Library</title>
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
                    Pengguna
                </h2>
            </div>

            <nav class="space-y-3">
                <a href="{{ route('dashboard', ['role' => 'pengguna']) }}"
                    class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
                    Dashboard
                </a>
                <a href="{{ route('opac.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
                    Katalog Buku
                </a>
                <a href="{{ route('loanhistory.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
                    Riwayat Peminjaman
                </a>
                <a href="{{ route('reservations.pengguna') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
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


        <main class="flex-1 p-6 md:p-10">
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-blue-950">E-Library</h1>
                <p class="text-slate-500">Koleksi buku digital PDF khusus anggota perpustakaan.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                @forelse($digitalBooks as $book)
                    <div class="bg-white rounded-2xl shadow overflow-hidden">
                        <div class="h-48 bg-red-100 flex items-center justify-center">
                            <span class="text-6xl">📄</span>
                        </div>

                        <div class="p-6">
                            <span class="text-xs bg-blue-100 text-blue-900 px-3 py-1 rounded-full">
                                {{ $book->category->name ?? '-' }}
                            </span>

                            <h2 class="text-xl font-bold text-blue-950 mt-4">
                                {{ $book->title }}
                            </h2>

                            <p class="text-slate-500 mt-1">
                                {{ $book->author }}
                            </p>

                            <p class="text-sm text-slate-500 mt-3">
                                Akses: {{ $book->access }}
                            </p>

                            <a href="{{ route('elibrary.read', $book->id) }}"
                                class="block mt-5 text-center bg-blue-950 text-white py-3 rounded-lg hover:bg-blue-900">
                                Baca PDF
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full bg-white rounded-2xl shadow p-8 text-center">
                        <h2 class="text-xl font-bold text-blue-950">Belum ada buku digital</h2>
                        <p class="text-slate-500 mt-2">Data e-library belum tersedia.</p>
                    </div>
                @endforelse
            </div>
        </main>
    </div>

</body>

</html>
