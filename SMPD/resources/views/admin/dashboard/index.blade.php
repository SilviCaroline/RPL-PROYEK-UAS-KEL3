<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-slate-100">

    <div class="flex min-h-screen">

        @include('sidebar.admin')

        <main class="flex-1 p-6 md:p-10">

            <div class="mb-8">
                <h1 class="text-3xl font-bold text-blue-950">
                    Dashboard Admin
                </h1>

                <p class="text-slate-500">
                    Kelola sistem perpustakaan secara keseluruhan.
                </p>
            </div>

            <section class="grid md:grid-cols-4 gap-6 mb-8">

                <div class="bg-white p-6 rounded-2xl shadow">
                    <p class="text-slate-500">Total Buku</p>
                    <h2 class="text-3xl font-bold text-blue-950">{{ $totalBooks }}</h2>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow">
                    <p class="text-slate-500">Total Anggota</p>
                    <h2 class="text-3xl font-bold text-blue-950">{{ $totalMembers }}</h2>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow">
                    <p class="text-slate-500">Total Pustakawan</p>
                    <h2 class="text-3xl font-bold text-orange-500">{{ $totalLibrarians }}</h2>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow">
                    <p class="text-slate-500">Peminjaman Hari Ini</p>
                    <div class="bg-white p-6 rounded-2xl shadow">
                        <h2 class="text-3xl font-bold text-green-600">{{ $todayLoans }}</h2>
                    </div>
                </div>



            </section>

            <section class="grid lg:grid-cols-2 gap-8">

                {{-- Statistik Sistem --}}
                <div class="bg-white p-6 rounded-2xl shadow">

                    <h2 class="text-xl font-bold text-blue-950 mb-5">
                        Statistik Sistem
                    </h2>

                    <div class="space-y-5">

                        <div>
                            <div class="flex justify-between mb-2">
                                <span>Buku Dipinjam</span>
                                <span>{{ $borrowPercent }}%</span>
                            </div>

                            <div class="w-full bg-slate-200 h-4 rounded-full">

                                <div class="bg-blue-950 h-4 rounded-full" style="width: {{ $borrowPercent }}%"></div>

                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between mb-2">
                                <span>Reservasi</span>
                                <span>{{ $reservationPercent }}%</span>
                            </div>

                            <div class="w-full bg-slate-200 h-4 rounded-full">

                                <div class="bg-orange-500 h-4 rounded-full" style="width: {{ $reservationPercent }}%">
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <section class="mt-8">

                    <div class="bg-white p-6 rounded-2xl shadow">

                        <h2 class="text-xl font-bold text-blue-950 mb-5">
                            Grafik Aktivitas Sistem
                        </h2>

                        <div class="relative h-[320px]">

                            <canvas id="activityChart"></canvas>

                        </div>

                    </div>

                </section>

                {{-- Aktivitas Sistem --}}
                <div class="bg-white p-6 rounded-2xl shadow">

                    <h2 class="text-xl font-bold text-blue-950 mb-5">
                        Aktivitas Sistem
                    </h2>

                    @forelse($activities as $activity)
                        <div class="border-b pb-3">

                            <p class="font-medium text-slate-700">
                                {{ $activity->title ?? 'Aktivitas Sistem' }}
                            </p>

                            <p class="text-sm text-slate-500">
                                {{ $activity->created_at->diffForHumans() }}
                            </p>

                        </div>

                    @empty

                        <div class="text-slate-500">

                            Belum ada aktivitas sistem.

                        </div>
                    @endforelse

                </div>

    </div>

    </section>

    </main>

    </div>

    <script>
        const ctx =
            document.getElementById('activityChart');

        new Chart(ctx, {

            type: 'line',

            data: {

                labels: @json($chartLabels),

                datasets: [{

                    label: 'Jumlah Peminjaman',

                    data: @json($chartData),

                    borderColor: '#172554',

                    backgroundColor: 'rgba(23,37,84,0.15)',

                    fill: true,

                    tension: 0.4

                }]
            },

            options: {

                responsive: true,

                maintainAspectRatio: false,

                scales: {

                    y: {

                        beginAtZero: true,

                        min: 0,

                        ticks: {

                            precision: 0,

                            stepSize: 1

                        }

                    }

                }

            }

        });
    </script>

</body>

</html>
