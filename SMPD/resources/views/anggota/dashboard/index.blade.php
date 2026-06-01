<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Anggota</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

    <div class="flex min-h-screen">

        @include('sidebar.anggota')

        <main class="flex-1 p-6 md:p-10">

            <div class="mb-8">
                <h1 class="text-3xl font-bold text-blue-950">
                    Dashboard anggota
                </h1>

                <p class="text-slate-500">
                    Selamat datang di sistem perpustakaan digital.
                </p>
            </div>

            {{-- STATISTIK --}}
            <section class="grid md:grid-cols-4 gap-6 mb-8">

                <div class="bg-white p-6 rounded-2xl shadow">
                    <p class="text-slate-500">📚 Pinjaman Aktif</p>
                    <h2 class="text-3xl font-bold text-blue-950">
                        {{ $stats['active_loans'] }}
                    </h2>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow">
                    <p class="text-slate-500">📖 Riwayat Pinjaman</p>
                    <h2 class="text-3xl font-bold text-blue-950">
                        {{ $stats['loan_history'] }}
                    </h2>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow">
                    <p class="text-slate-500">🔖 Reservasi</p>
                    <h2 class="text-3xl font-bold text-orange-500">
                        {{ $stats['reservations'] }}
                    </h2>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow">
                    <p class="text-slate-500">💰 Denda</p>
                    <h2 class="text-3xl font-bold text-red-600">
                        Rp{{ number_format($stats['fine']) }}
                    </h2>
                </div>

            </section>

            {{-- STATISTIK TAMBAHAN --}}
            <section class="grid lg:grid-cols-2 gap-8">

                {{-- BUKU POPULER --}}
                <div class="bg-white rounded-2xl shadow p-6">

                    <h2 class="text-xl font-bold text-blue-950 mb-6">
                        Buku Paling Populer
                    </h2>

                    <div class="space-y-5">

                        @foreach ($popularBooks as $book)
                            <div>

                                <div class="flex justify-between mb-2">
                                    <span>{{ $book['title'] }}</span>
                                    <span>{{ $book['borrowed'] }} kali</span>
                                </div>

                                <div class="w-full bg-slate-200 rounded-full h-3">
                                    <div class="bg-blue-950 h-3 rounded-full"
                                        style="width: {{ $book['borrowed'] * 2 }}%">
                                    </div>
                                </div>

                            </div>
                        @endforeach

                    </div>

                </div>

                {{-- PROFIL MEMBER --}}
                <div class="bg-white rounded-2xl shadow p-6">

                    <h2 class="text-xl font-bold text-blue-950 mb-6">
                        Statistik Saya
                    </h2>

                    <div class="space-y-4">

                        <div class="flex justify-between border-b pb-3">
                            <span>Total Buku Dibaca</span>
                            <span class="font-bold">
                                {{ $stats['books_read'] }}
                            </span>
                        </div>

                        <div class="flex justify-between border-b pb-3">
                            <span>Anggota Sejak</span>
                            <span class="font-bold">
                                {{ $stats['member_since'] }}
                            </span>
                        </div>

                        <div class="flex justify-between border-b pb-3">
                            <span>Status Member</span>
                            <span class="text-green-600 font-bold">
                                Aktif
                            </span>
                        </div>

                        <div class="flex justify-between">
                            <span>Ranking Aktivitas</span>
                            <span class="font-bold">
                                Top 10
                            </span>
                        </div>

                    </div>

                </div>

            </section>

        </main>

    </div>

</body>

</html>
