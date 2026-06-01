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
