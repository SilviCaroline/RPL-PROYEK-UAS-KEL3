<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Transaksi Peminjaman</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100">

<main class="max-w-5xl mx-auto p-8">
    <a href="{{ route('loans.index') }}" class="text-blue-900 font-semibold">← Kembali</a>

    <div class="bg-white rounded-2xl shadow p-8 mt-6">
        <h1 class="text-3xl font-bold text-blue-950 mb-2">Transaksi Peminjaman</h1>
        <p class="text-slate-500 mb-8">
            Masukkan kode anggota dan barcode buku untuk memproses peminjaman.
        </p>

        <form action="{{ route('loans.store') }}" method="POST" class="grid md:grid-cols-2 gap-6">
            @csrf

            <div class="md:col-span-2 bg-blue-50 border border-blue-100 rounded-2xl p-5">
                <h2 class="font-bold text-blue-950 mb-2">Simulasi Scan</h2>
                <p class="text-sm text-slate-600">
                    Pada sistem asli, field ini bisa diisi otomatis dari scanner barcode.
                    Untuk sementara, input manual kode anggota dan barcode buku.
                </p>
            </div>

            <div>
                <label class="block mb-2 font-medium">Kode Anggota / QR Member</label>
                <input type="text" name="member_code" placeholder="Contoh: MBR001"
                    class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-900 outline-none">
            </div>

            <div>
                <label class="block mb-2 font-medium">Barcode Buku</label>
                <input type="text" name="book_barcode" placeholder="Contoh: BK001"
                    class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-900 outline-none">
            </div>

            <div>
                <label class="block mb-2 font-medium">Tanggal Pinjam</label>
                <input type="date" name="loan_date" value="{{ date('Y-m-d') }}"
                    class="w-full border rounded-lg px-4 py-3">
            </div>

            <div>
                <label class="block mb-2 font-medium">Tanggal Jatuh Tempo</label>
                <input type="date" name="due_date"
                    class="w-full border rounded-lg px-4 py-3">
            </div>

            <div class="md:col-span-2">
                <label class="block mb-2 font-medium">Catatan</label>
                <textarea name="notes" rows="3" placeholder="Opsional"
                    class="w-full border rounded-lg px-4 py-3"></textarea>
            </div>

            <div class="md:col-span-2 flex gap-4">
                <button class="bg-blue-950 text-white px-6 py-3 rounded-lg hover:bg-blue-900">
                    Simpan Peminjaman
                </button>

                <a href="{{ route('loans.index') }}" class="border px-6 py-3 rounded-lg hover:bg-slate-50">
                    Batal
                </a>
            </div>
        </form>
    </div>

    <div class="grid md:grid-cols-2 gap-6 mt-8">
        <div class="bg-white rounded-2xl shadow p-6">
            <h2 class="text-xl font-bold text-blue-950 mb-4">Contoh Data Anggota</h2>
            <ul class="space-y-2 text-slate-600">
                <li><b>MBR001</b> — Diana Putri</li>
                <li><b>MBR002</b> — Andi Saputra</li>
                <li><b>MBR003</b> — Siti Aminah</li>
            </ul>
        </div>

        <div class="bg-white rounded-2xl shadow p-6">
            <h2 class="text-xl font-bold text-blue-950 mb-4">Contoh Barcode Buku</h2>
            <ul class="space-y-2 text-slate-600">
                <li><b>BK001</b> — Laskar Pelangi</li>
                <li><b>BK002</b> — Bumi Manusia</li>
                <li><b>BK003</b> — Atomic Habits</li>
            </ul>
        </div>
    </div>
</main>

</body>
</html>