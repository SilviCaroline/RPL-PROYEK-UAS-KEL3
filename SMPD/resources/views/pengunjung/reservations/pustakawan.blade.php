<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Reservasi Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

    <div class="flex min-h-screen">
        <aside class="w-72 bg-blue-950 text-white p-6 hidden md:block">
            <h1 class="text-2xl font-bold mb-8">LibrarySystem</h1>

            <nav class="space-y-3">
                <a href="{{ route('dashboard', ['role' => request('role', 'pustakawan')]) }}"
                    class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Dashboard</a>
                <a href="{{ route('books.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Manajemen
                    Buku</a>
                <a href="{{ route('members.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Manajemen
                    Anggota</a>
                <a href="{{ route('loans.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Peminjaman</a>
                <a href="{{ route('returns.index') }}"
                    class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Pengembalian</a>
                <a href="{{ route('reservations.index') }}" class="block px-4 py-3 bg-blue-900 rounded-lg">Reservasi</a>
                <a href="{{ route('logout') }}"
                    class="block px-4 py-3 bg-red-600 hover:bg-red-700 rounded-lg mt-8">Logout</a>
            </nav>
        </aside>

        <main class="flex-1 p-6 md:p-10">
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-blue-950">Reservasi Buku</h1>
                <p class="text-slate-500">Kelola reservasi buku yang sedang dipinjam anggota lain.</p>
            </div>

            @if (session('success'))
                <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-6">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="bg-red-100 text-red-700 p-4 rounded-lg mb-6">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-4 rounded-lg mb-6">
                    <ul class="list-disc ml-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="grid lg:grid-cols-3 gap-8 mb-8">
                <div class="bg-white rounded-2xl shadow p-6">
                    <h2 class="text-xl font-bold text-blue-950 mb-4">Tambah Reservasi</h2>

                    <form action="{{ route('reservations.store') }}" method="POST" class="space-y-5">
                        @csrf

                        <div>
                            <label class="block mb-2 font-medium">Kode Anggota</label>
                            <input type="text" name="member_code" placeholder="MBR001"
                                class="w-full border rounded-lg px-4 py-3">
                        </div>

                        <div>
                            <label class="block mb-2 font-medium">Barcode Buku</label>
                            <input type="text" name="book_barcode" placeholder="BK002"
                                class="w-full border rounded-lg px-4 py-3">
                        </div>

                        <div>
                            <label class="block mb-2 font-medium">Tanggal Reservasi</label>
                            <input type="date" name="reservation_date" value="{{ date('Y-m-d') }}"
                                class="w-full border rounded-lg px-4 py-3">
                        </div>

                        <button class="w-full bg-blue-950 text-white py-3 rounded-lg hover:bg-blue-900">
                            Simpan Reservasi
                        </button>
                    </form>
                </div>

                <div class="lg:col-span-2 grid md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-2xl shadow p-6">
                        <p class="text-slate-500">Total Reservasi</p>
                        <h2 class="text-3xl font-bold text-blue-950">18</h2>
                    </div>

                    <div class="bg-white rounded-2xl shadow p-6">
                        <p class="text-slate-500">Menunggu</p>
                        <h2 class="text-3xl font-bold text-orange-500">10</h2>
                    </div>

                    <div class="bg-white rounded-2xl shadow p-6">
                        <p class="text-slate-500">Disetujui</p>
                        <h2 class="text-3xl font-bold text-green-600">8</h2>
                    </div>

                    <div class="md:col-span-3 bg-white rounded-2xl shadow p-6">
                        <h2 class="text-xl font-bold text-blue-950 mb-3">Alur Reservasi</h2>
                        <p class="text-slate-600">
                            Jika stok buku habis atau sedang dipinjam, anggota dapat melakukan reservasi.
                            Setelah buku dikembalikan, pustakawan dapat menghubungi anggota sesuai antrean reservasi.
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow overflow-hidden">
                <table class="w-full text-left">
                    <thead class="bg-blue-950 text-white">
                        <tr>
                            <th class="p-4">Kode</th>
                            <th class="p-4">Anggota</th>
                            <th class="p-4">Buku</th>
                            <th class="p-4">Tanggal</th>
                            <th class="p-4">Status</th>
                            <th class="p-4">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($reservations as $reservation)
                            <tr class="border-b">
                                <td class="p-4 font-semibold">{{ $reservation['code'] }}</td>
                                <td class="p-4">{{ $reservation['member_name'] }}</td>
                                <td class="p-4">{{ $reservation['book_title'] }}</td>
                                <td class="p-4">{{ $reservation['reservation_date'] }}</td>
                                <td class="p-4">
                                    @if ($reservation['status'] == 'Menunggu')
                                        <span
                                            class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs">Menunggu</span>
                                    @else
                                        <span
                                            class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">Disetujui</span>
                                    @endif
                                </td>
                                <td class="p-4 flex gap-2">
                                    <button
                                        class="bg-green-600 text-white px-3 py-2 rounded-lg text-sm">Setujui</button>
                                    <button class="bg-red-600 text-white px-3 py-2 rounded-lg text-sm">Batalkan</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-6">
                    {{ $reservations->links() }}
                </div>
            </div>

        </main>
    </div>

</body>

</html>
