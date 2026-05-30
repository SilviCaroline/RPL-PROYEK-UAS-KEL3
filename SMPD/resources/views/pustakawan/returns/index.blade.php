{{-- HAPUS JIKA CUMA AKSES PUSTAKAWAN --}}
@php
    $role = session('role');
@endphp

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Pengembalian Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

    <div class="flex min-h-screen">

        {{-- @include('sidebar.admin') --}}
        {{-- HAPUS JIKA CUMA AKSES PUSTAKAWAN --}}
        @if ($role == 'admin')
            @include('sidebar.admin')
        @else
            @include('sidebar.pustakawan')
        @endif

        <main class="flex-1 p-6 md:p-10">
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-blue-950">Pengembalian Buku</h1>
                <p class="text-slate-500">Proses pengembalian buku dan hitung denda keterlambatan otomatis.</p>
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

            <div class="grid lg:grid-cols-3 gap-8 mb-8">
                <div class="lg:col-span-1 bg-white rounded-2xl shadow p-6">
                    <h2 class="text-xl font-bold text-blue-950 mb-4">Form Pengembalian</h2>

                    <form action="{{ route('returns.process') }}" method="POST" class="space-y-5">
                        @csrf

                        <div>
                            <label class="block mb-2 font-medium">Kode Peminjaman</label>
                            <input type="text" name="loan_code" placeholder="Contoh: LN001"
                                class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-900 outline-none">
                        </div>

                        <div>
                            <label class="block mb-2 font-medium">Barcode Buku</label>
                            <input type="text" name="book_barcode" placeholder="Contoh: BK001"
                                class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-900 outline-none">
                        </div>

                        <div>
                            <label class="block mb-2 font-medium">Tanggal Kembali</label>
                            <input type="date" name="return_date" value="{{ date('Y-m-d') }}"
                                class="w-full border rounded-lg px-4 py-3">
                        </div>

                        <div class="bg-orange-50 border border-orange-100 rounded-xl p-4">
                            <p class="text-sm text-orange-700">
                                Denda otomatis: <b>Rp5.000 / hari</b> jika melewati tanggal jatuh tempo.
                            </p>
                        </div>

                        <button class="w-full bg-blue-950 text-white py-3 rounded-lg hover:bg-blue-900">
                            Konfirmasi Pengembalian
                        </button>
                    </form>
                </div>

                <div class="lg:col-span-2 grid md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-2xl shadow p-6">
                        <p class="text-slate-500">Dikembalikan Hari Ini</p>
                        <h2 class="text-3xl font-bold text-blue-950">12</h2>
                    </div>

                    <div class="bg-white rounded-2xl shadow p-6">
                        <p class="text-slate-500">Terlambat</p>
                        <h2 class="text-3xl font-bold text-red-600">7</h2>
                    </div>

                    <div class="bg-white rounded-2xl shadow p-6">
                        <p class="text-slate-500">Denda Terkumpul</p>
                        <h2 class="text-3xl font-bold text-blue-950">Rp85.000</h2>
                    </div>

                    <div class="md:col-span-3 bg-white rounded-2xl shadow p-6">
                        <h2 class="text-xl font-bold text-blue-950 mb-4">Simulasi Perhitungan Denda</h2>

                        <div class="bg-slate-50 rounded-xl p-5">
                            <p class="text-slate-600">
                                Jika tanggal jatuh tempo <b>2026-05-25</b> dan buku dikembalikan pada
                                <b>2026-05-27</b>, maka terlambat <b>2 hari</b>.
                            </p>

                            <p class="mt-3 text-slate-600">
                                Denda = 2 × Rp5.000 = <b>Rp10.000</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow overflow-hidden">
                <table class="w-full text-left">
                    <div class="mt-6">
                        {{ $returns->links() }}
                    </div>
                    <thead class="bg-blue-950 text-white">
                        <tr>
                            <th class="p-4">Kode Return</th>
                            <th class="p-4">Kode Pinjam</th>
                            <th class="p-4">Anggota</th>
                            <th class="p-4">Buku</th>
                            <th class="p-4">Jatuh Tempo</th>
                            <th class="p-4">Tanggal Kembali</th>
                            <th class="p-4">Telat</th>
                            <th class="p-4">Denda</th>
                            <th class="p-4">Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($returns as $return)
                            <tr class="border-b">
                                <td class="p-4 font-semibold">{{ $return->return_code }}</td>
                                <td class="p-4">{{ $return->loan->loan_code ?? '-' }}</td>
                                <td class="p-4">{{ $return->loan->member->name ?? '-' }}</td>
                                <td class="p-4">{{ $return->loan->book->title ?? '-' }}</td>
                                <td class="p-4">{{ $return->loan->due_date ?? '-' }}</td>
                                <td class="p-4">{{ $return->return_date }}</td>
                                <td class="p-4">{{ $return->late_days }} hari</td>
                                <td class="p-4">Rp{{ number_format($return->fine_amount, 0, ',', '.') }}</td>
                                <td class="p-4">
                                    @if ($return->late_days == 0)
                                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">Tepat
                                            Waktu</span>
                                    @else
                                        <span
                                            class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs">Terlambat</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="p-6 text-center text-slate-500">
                                    Belum ada data pengembalian.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </main>
    </div>

</body>

</html>
