<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Reservasi Buku</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

    <div class="flex min-h-screen">

        @include('sidebar.pengunjung')

        <main class="flex-1 p-6 md:p-10">

            {{-- Header --}}
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-blue-950">
                    Reservasi Buku
                </h1>

                <p class="text-slate-500">
                    Lakukan reservasi buku yang sedang dipinjam anggota lain.
                </p>
            </div>

            {{-- Alert --}}
            @if (session('success'))
                <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-6">
                    {{ session('success') }}
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

            {{-- Statistik --}}
            <section class="grid md:grid-cols-3 gap-6 mb-8">

                <div class="bg-white rounded-2xl shadow p-6">
                    <p class="text-slate-500">
                        Total Reservasi Saya
                    </p>

                    <h2 class="text-3xl font-bold text-blue-950">
                        {{ $reservations->count() }}
                    </h2>
                </div>

                <div class="bg-white rounded-2xl shadow p-6">
                    <p class="text-slate-500">
                        Menunggu
                    </p>

                    <h2 class="text-3xl font-bold text-orange-500">
                        {{ $reservations->where('status', 'Menunggu')->count() }}
                    </h2>
                </div>

                <div class="bg-white rounded-2xl shadow p-6">
                    <p class="text-slate-500">
                        Disetujui
                    </p>

                    <h2 class="text-3xl font-bold text-green-600">
                        {{ $reservations->where('status', 'Disetujui')->count() }}
                    </h2>
                </div>

            </section>

            {{-- Form Reservasi --}}
            <div class="bg-white rounded-2xl shadow p-6 mb-8">

                <h2 class="text-xl font-bold text-blue-950 mb-5">
                    Form Reservasi
                </h2>

                <form action="{{ route('reservations.store') }}" method="POST" class="grid md:grid-cols-3 gap-5">

                    @csrf

                    <div>
                        <label class="block mb-2 font-medium">
                            Kode Member
                        </label>

                        <input type="text" name="member_code" placeholder="MBR001"
                            class="w-full border rounded-lg px-4 py-3">
                    </div>

                    <div>
                        <label class="block mb-2 font-medium">
                            Barcode Buku
                        </label>

                        <input type="text" name="kode_buku" placeholder="BK001"
                            class="w-full border rounded-lg px-4 py-3">
                    </div>

                    <div>
                        <label class="block mb-2 font-medium">
                            Tanggal Reservasi
                        </label>

                        <input type="date" name="reservation_date" value="{{ date('Y-m-d') }}"
                            class="w-full border rounded-lg px-4 py-3">
                    </div>

                    <div class="md:col-span-3">
                        <button class="bg-blue-950 text-white px-6 py-3 rounded-lg hover:bg-blue-900">
                            Ajukan Reservasi
                        </button>
                    </div>

                </form>

            </div>

            {{-- Tabel Reservasi --}}
            <div class="bg-white rounded-2xl shadow overflow-hidden">

                <div class="p-6 border-b">
                    <h2 class="text-xl font-bold text-blue-950">
                        Riwayat Reservasi
                    </h2>
                </div>

                <table class="w-full text-left">

                    <thead class="bg-blue-950 text-white">
                        <tr>
                            <th class="p-4">Kode</th>
                            <th class="p-4">Buku</th>
                            <th class="p-4">Tanggal</th>
                            <th class="p-4">Status</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($reservations as $reservation)
                            <tr class="border-b">

                                <td class="p-4 font-semibold">
                                    {{ $reservation->reservation_code }}
                                </td>

                                <td class="p-4">
                                    {{ $reservation->book->title ?? '-' }}
                                </td>

                                <td class="p-4">
                                    {{ $reservation->reservation_date }}
                                </td>

                                <td class="p-4">

                                    @if ($reservation->status == 'Menunggu')
                                        <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs">
                                            Menunggu
                                        </span>
                                    @elseif($reservation->status == 'Disetujui')
                                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">
                                            Disetujui
                                        </span>
                                    @else
                                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs">
                                            Dibatalkan
                                        </span>
                                    @endif

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="4" class="p-6 text-center text-slate-500">
                                    Belum ada reservasi buku.
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

            {{-- Pagination --}}
            <div class="mt-6">
                {{ $reservations->links() }}
            </div>

        </main>

    </div>

</body>

</html>
