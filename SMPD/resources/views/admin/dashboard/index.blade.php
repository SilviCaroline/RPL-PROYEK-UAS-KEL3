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
                    <h2 class="text-3xl font-bold text-blue-950">200</h2>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow">
                    <p class="text-slate-500">Total Anggota</p>
                    <h2 class="text-3xl font-bold text-blue-950">50</h2>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow">
                    <p class="text-slate-500">Total Pustakawan</p>
                    <h2 class="text-3xl font-bold text-orange-500">5</h2>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow">
                    <p class="text-slate-500">Peminjaman Hari Ini</p>
                    <h2 class="text-3xl font-bold text-green-600">18</h2>
                </div>

            </section>

            <section class="grid lg:grid-cols-2 gap-8">

                <div class="bg-white p-6 rounded-2xl shadow">

                    <h2 class="text-xl font-bold text-blue-950 mb-5">
                        Statistik Sistem
                    </h2>

                    <div class="space-y-5">

                        <div>
                            <div class="flex justify-between mb-2">
                                <span>Buku Dipinjam</span>
                                <span>75%</span>
                            </div>

                            <div class="w-full bg-slate-200 h-4 rounded-full">
                                <div class="bg-blue-950 h-4 rounded-full" style="width:75%">
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between mb-2">
                                <span>Reservasi</span>
                                <span>45%</span>
                            </div>

                            <div class="w-full bg-slate-200 h-4 rounded-full">
                                <div class="bg-orange-500 h-4 rounded-full" style="width:45%">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="bg-white p-6 rounded-2xl shadow">

                    <h2 class="text-xl font-bold text-blue-950 mb-5">
                        Aktivitas Sistem
                    </h2>

                    <div class="space-y-4">

                        <div class="border-b pb-3">
                            12 buku baru ditambahkan.
                        </div>

                        <div class="border-b pb-3">
                            5 anggota baru mendaftar.
                        </div>

                        <div class="border-b pb-3">
                            Export laporan bulanan berhasil.
                        </div>

                    </div>

                </div>

            </section>

        </main>

    </div>

</body>

</html>
