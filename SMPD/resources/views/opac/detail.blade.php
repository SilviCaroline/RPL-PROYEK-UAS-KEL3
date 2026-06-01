<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>{{ $book->title }} - SMPD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100 text-slate-800">
    <div class="flex min-h-screen">

        <!-- SIDEBAR BERDASARKAN ROLE -->
        @if (session('role') == 'admin')
            @include('sidebar.opac')
        @elseif(session('role') == 'pustakawan')
            @include('sidebar.opac')
        @elseif(session('role') == 'anggota')
            @include('sidebar.opac')
        @endif

        <!-- MAIN CONTENT -->
        <div class="flex-1">
            <!-- Detail Buku -->
            <main class="p-8">
                <a href="{{ route('opac.index') }}" class="text-blue-900 font-semibold">
                    ← Kembali ke OPAC
                </a>

                <div class="bg-white rounded-2xl shadow mt-6 p-8">
                    <div class="flex flex-col lg:flex-row gap-8">

                        <div class="lg:w-1/3">
                            <div class="bg-blue-100 rounded-2xl h-80 flex items-center justify-center">
                                <span class="text-8xl">📘</span>
                            </div>
                        </div>

                        <div class="lg:w-2/3">
                            <span class="bg-blue-100 text-blue-900 px-3 py-1 rounded-full text-sm">
                                {{ $book->category->name ?? '-' }}
                            </span>

                            <h1 class="text-4xl font-bold text-blue-950 mt-4">
                                {{ $book->title }}
                            </h1>

                            <p class="text-slate-500 mt-2 text-lg">
                                Oleh {{ $book->author }}
                            </p>

                            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">

                                <div class="border rounded-xl p-4 bg-white">
                                    <p class="text-sm text-slate-500">
                                        Penerbit
                                    </p>

                                    <h3 class="font-semibold text-slate-800">
                                        {{ $book->publisher ?? '-' }}
                                    </h3>
                                </div>

                                <div class="border rounded-xl p-4 bg-white">
                                    <p class="text-sm text-slate-500">
                                        Kode Buku
                                    </p>

                                    <h3 class="font-semibold text-slate-800">
                                        {{ $book->barcode ?? '-' }}
                                    </h3>
                                </div>

                                <div class="border rounded-xl p-4 bg-white">
                                    <p class="text-sm text-slate-500">
                                        Tahun Terbit
                                    </p>

                                    <h3 class="font-semibold text-slate-800">
                                        {{ $book->year ?? '-' }}
                                    </h3>
                                </div>

                                <div class="border rounded-xl p-4 bg-white">
                                    <p class="text-sm text-slate-500">
                                        ISBN
                                    </p>

                                    <h3 class="font-semibold text-slate-800">
                                        {{ $book->isbn ?? '-' }}
                                    </h3>
                                </div>

                                <div class="border rounded-xl p-4 bg-white">
                                    <p class="text-sm text-slate-500">
                                        Stok
                                    </p>

                                    <h3 class="font-semibold text-green-600">
                                        {{ $book->stock }} Buku
                                    </h3>
                                </div>

                                <div class="border rounded-xl p-4 bg-white">
                                    <p class="text-sm text-slate-500">
                                        Penulis
                                    </p>

                                    <h3 class="font-semibold text-slate-800">
                                        {{ $book->author ?? '-' }}
                                    </h3>
                                </div>

                            </div>

                            <div class="mt-8">
                                <h2 class="text-xl font-bold mb-2">Deskripsi</h2>
                                <p class="text-slate-600">
                                    {{ $book->description ?? 'Tidak ada deskripsi.' }}
                                </p>
                            </div>

                            <div class="mt-8 flex gap-4">
                                <div class="mt-8 flex gap-4">

                                    @if (session('role') == 'anggota')
                                        <a href="{{ route('reservations.anggota') }}"
                                            class="bg-blue-950 text-white px-6 py-3 rounded-lg hover:bg-blue-900">

                                            Ajukan Reservasi

                                        </a>
                                    @else
                                        <a href="{{ route('login') }}"
                                            class="bg-blue-950 text-white px-6 py-3 rounded-lg hover:bg-blue-900">

                                            Login untuk Reservasi

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

        </div>

    </div>
</body>
