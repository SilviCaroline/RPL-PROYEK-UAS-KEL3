<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Pengguna</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

    <div class="flex min-h-screen">

        @include('sidebar.pengunjung')

        <main class="flex-1 p-6 md:p-10">

            <div class="mb-8">
                <h1 class="text-3xl font-bold text-blue-950">
                    Dashboard Pengguna
                </h1>

                <p class="text-slate-500">
                    Selamat datang di sistem perpustakaan digital.
                </p>
            </div>

            <section class="grid md:grid-cols-4 gap-6">

                <div class="bg-white p-6 rounded-2xl shadow">
                    <p class="text-slate-500">Pinjaman Aktif</p>
                    <h2 class="text-3xl font-bold text-blue-950">2</h2>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow">
                    <p class="text-slate-500">Riwayat Pinjaman</p>
                    <h2 class="text-3xl font-bold text-blue-950">14</h2>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow">
                    <p class="text-slate-500">Reservasi</p>
                    <h2 class="text-3xl font-bold text-orange-500">1</h2>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow">
                    <p class="text-slate-500">Denda</p>
                    <h2 class="text-3xl font-bold text-red-600">Rp0</h2>
                </div>

            </section>

        </main>

    </div>

</body>

</html>
