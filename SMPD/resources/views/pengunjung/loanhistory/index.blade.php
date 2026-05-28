<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Riwayat Peminjaman</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

    <div class="flex min-h-screen">

        @include('sidebar.pengunjung')
        <main class="flex-1 p-6 md:p-10">
            <h1 class="text-3xl font-bold text-blue-950 mb-2">Riwayat Peminjaman</h1>
            <p class="text-slate-500 mb-8">Daftar riwayat peminjaman buku pengguna.</p>

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
