<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Anggota - SMPD</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-slate-100">

    <div class="flex min-h-screen">

        {{-- SIDEBAR --}}
        @include('sidebar.anggota')

        <div class="flex-1">

            {{-- HEADER --}}
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

            <main class="p-6 md:p-10">

                {{-- JUDUL --}}
                <div class="mb-8">

                    <h1 class="text-3xl font-bold text-blue-950">
                        Dashboard Anggota
                    </h1>

                    <p class="text-slate-500">
                        Pantau aktivitas peminjaman, reservasi, dan statistik perpustakaan.
                    </p>

                </div>

                {{-- FILTER --}}
                <div class="bg-white p-4 rounded-2xl shadow mb-8">

                    <form method="GET" class="flex flex-wrap gap-3">

                        <input type="month" name="periode" class="border rounded-lg px-4 py-2">

                        <button class="bg-blue-950 text-white px-5 py-2 rounded-lg hover:bg-blue-900">

                            Filter

                        </button>

                    </form>

                </div>

                {{-- STATISTIK --}}
                <div class="grid md:grid-cols-5 gap-6 mb-8">

                    <div class="bg-white p-6 rounded-2xl shadow">

                        <p class="text-slate-500">
                            📚 Pinjaman Aktif
                        </p>

                        <h2 class="text-3xl font-bold text-blue-950">
                            {{ $stats['active_loans'] }}
                        </h2>

                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow">

                        <p class="text-slate-500">
                            📖 Riwayat Pinjaman
                        </p>

                        <h2 class="text-3xl font-bold text-blue-950">
                            {{ $stats['loan_history'] }}
                        </h2>

                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow">

                        <p class="text-slate-500">
                            🔖 Reservasi
                        </p>

                        <h2 class="text-3xl font-bold text-orange-500">
                            {{ $stats['reservations'] }}
                        </h2>

                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow">

                        <p class="text-slate-500">
                            💰 Denda
                        </p>

                        <h2 class="text-3xl font-bold text-red-600">
                            Rp{{ number_format($stats['fine'], 0, ',', '.') }}
                        </h2>

                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow">

                        <p class="text-slate-500">
                            🟢 Online
                        </p>

                        <h2 class="text-3xl font-bold text-green-600">
                            {{ $onlineUsers }}
                        </h2>

                    </div>

                </div>

                {{-- GRAFIK --}}
                <div class="bg-white rounded-2xl shadow p-6 mb-8">

                    <h2 class="text-xl font-bold text-blue-950 mb-6">

                        📈 Tren Peminjaman Saya

                    </h2>

                    <canvas id="loanChart"></canvas>

                </div>

                {{-- BUKU POPULER + ANGGOTA TERAKTIF --}}
                <div class="grid lg:grid-cols-2 gap-8 mb-8">

                    {{-- BUKU POPULER --}}
                    <div class="bg-white rounded-2xl shadow p-6">

                        <h2 class="text-xl font-bold text-blue-950 mb-6">

                            🔥 Buku Terpopuler

                        </h2>

                        @forelse($popularBooks as $book)
                            <div class="flex justify-between border-b py-3">

                                <span>
                                    {{ $book->book->title ?? '-' }}
                                </span>

                                <span class="font-semibold text-blue-950">
                                    {{ $book->total }}x
                                </span>

                            </div>

                        @empty

                            <p class="text-slate-500">
                                Belum ada data.
                            </p>
                        @endforelse

                    </div>

                    {{-- ANGGOTA TERAKTIF --}}
                    <div class="bg-white rounded-2xl shadow p-6">

                        <h2 class="text-xl font-bold text-blue-950 mb-6">

                            👑 Anggota Teraktif

                        </h2>

                        @forelse($activeMembers as $member)
                            <div class="flex justify-between border-b py-3">

                                <span>
                                    {{ $member->member->name ?? '-' }}
                                </span>

                                <span class="font-semibold text-green-600">
                                    {{ $member->total }} buku
                                </span>

                            </div>

                        @empty

                            <p class="text-slate-500">
                                Belum ada data.
                            </p>
                        @endforelse

                    </div>

                </div>

            </main>

        </div>

    </div>

    {{-- CHART --}}
    <script>
        const ctx = document.getElementById('loanChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: [
                    @foreach ($loanChart as $item)
                        '{{ $item['bulan'] }}',
                    @endforeach
                ],
                datasets: [{
                    label: 'Jumlah Peminjaman',
                    data: [
                        @foreach ($loanChart as $item)
                            {{ $item['jumlah'] }},
                        @endforeach
                    ],
                    borderWidth: 3,
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        min: 0,
                        ticks: {
                            precision: 0
                        }
                    }
                }
            }
        });
    </script>

</body>

</html>
