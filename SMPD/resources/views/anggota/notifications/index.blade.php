<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Notifikasi</title>

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

                    <h1 class="text-3xl font-bold text-blue-950">
                        Riwayat Notifikasi
                    </h1>

                    <p class="text-slate-500">
                        Seluruh aktivitas dan informasi sistem.
                    </p>

                </div>

                @forelse($notifications as $notification)
                    <div class="bg-white rounded-2xl shadow p-5 mb-4">

                        <div class="flex justify-between items-start">

                            <div>

                                <h2 class="font-bold text-lg">

                                    {{ $notification->title }}

                                </h2>

                                <p class="text-slate-600 mt-2">

                                    {{ $notification->message }}

                                </p>

                            </div>

                            <span class="text-xs text-slate-400">

                                {{ $notification->created_at }}

                            </span>

                        </div>

                    </div>

                @empty

                    <div class="bg-white rounded-2xl shadow p-6">

                        <p class="text-slate-500">

                            Belum ada notifikasi.

                        </p>

                    </div>
                @endforelse

            </main>

        </div>

</body>

</html>
