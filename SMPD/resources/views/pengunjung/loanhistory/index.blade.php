<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Riwayat Peminjaman</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

    <div class="flex min-h-screen">
        <aside class="w-72 bg-blue-950 text-white p-6 hidden md:block">
            <h1 class="text-2xl font-bold mb-8">LibrarySystem</h1>

            <div class="mb-6 p-4 bg-blue-900 rounded-xl">
                <p class="text-sm text-blue-200">Login sebagai</p>
                <h2 class="font-bold">Pengguna</h2>
            </div>

            <nav class="space-y-3">
                <a href="{{ route('dashboard', ['role' => 'pengguna']) }}"
                    class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Dashboard</a>
                <a href="{{ route('opac.index', ['role' => 'pengguna']) }}"
                    class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Katalog Buku</a>
                <a href="{{ route('loan-history.index', ['role' => 'pengguna']) }}"
                    class="block px-4 py-3 bg-blue-900 rounded-lg">Riwayat Peminjaman</a>
                <a href="{{ route('reservations.index', ['role' => 'pengguna']) }}"
                    class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Reservasi Buku</a>
                <a href="{{ route('elibrary.index', ['role' => 'pengguna']) }}"
                    class="block px-4 py-3 hover:bg-blue-900 rounded-lg">E-Library</a>
                <a href="{{ route('members.index', ['role' => 'pengguna']) }}"
                    class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Kartu Member</a>
                <a href="{{ route('logout') }}"
                    class="block px-4 py-3 bg-red-600 hover:bg-red-700 rounded-lg mt-8">Logout</a>
            </nav>
        </aside>

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
            </div>

            <div class="mt-6">
                {{ $loans->links() }}
            </div>
        </main>
    </div>

</body>

</html>
