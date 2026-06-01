<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Riwayat Peminjaman</title>
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
                <h1 class="text-3xl font-bold text-blue-950 mb-2">Riwayat Peminjaman</h1>
                <p class="text-slate-500 mb-8">Daftar riwayat peminjaman buku anggota.</p>

                <div class="bg-white rounded-2xl shadow overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-blue-950 text-white">
                            <tr>
                                <th class="p-4">Kode Pinjam</th>
                                <th class="p-4">Buku</th>
                                <th class="p-4">Tanggal Pinjam</th>
                                <th class="p-4">Jatuh Tempo</th>
                                <th class="p-4">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($loans as $loan)
                                <tr class="border-b">
                                    <td class="p-4 font-semibold">{{ $loan->loan_code }}</td>
                                    <td class="p-4">{{ $loan->book->title ?? '-' }}</td>
                                    <td class="p-4">{{ $loan->loan_date }}</td>
                                    <td class="p-4">{{ $loan->due_date }}</td>
                                    <td class="p-4">{{ $loan->status }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="p-6 text-center text-slate-500">
                                        Belum ada riwayat peminjaman.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="mt-6">
                        {{ $loans->links() }}
                    </div>
            </main>
        </div>

</body>

</html>
