<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>E-Library</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

    <div class="flex min-h-screen">

        @include('sidebar.anggota')

        <div class="flex-1">

            <nav class="bg-white border-b shadow-sm px-8 py-4">

                <div class="flex justify-between items-center">

                    <div>
                        <h1 class="text-2xl font-bold text-blue-950">
                            SMPD
                        </h1>
                        <p class="text-sm text-slate-500">
                            Sistem Manajemen Perpustakaan Daerah
                        </p>
                    </div>

                    <div class="flex items-center gap-4">

                        <div class="text-right">

                            <p class="text-xs text-slate-500">
                                Login sebagai
                            </p>

                            <p class="font-semibold text-blue-950 capitalize">
                                {{ session('role') }}
                            </p>

                        </div>

                        <div
                            class="w-11 h-11 rounded-full bg-blue-950 text-white flex items-center justify-center font-bold">

                            {{ strtoupper(substr(session('username', 'A'), 0, 1)) }}

                        </div>

                    </div>

                </div>

            </nav>
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
