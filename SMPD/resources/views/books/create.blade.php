<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku - LibrarySystem</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100">

<main class="max-w-4xl mx-auto p-8">
    <a href="{{ route('books.index') }}" class="text-blue-900 font-semibold">← Kembali</a>

    <div class="bg-white rounded-2xl shadow p-8 mt-6">
        <h1 class="text-3xl font-bold text-blue-950 mb-6">Tambah Buku</h1>

        <form action="{{ route('books.store') }}" method="POST" class="grid md:grid-cols-2 gap-5">
            @csrf

            <div>
                <label class="block mb-2 font-medium">Judul Buku</label>
                <input type="text" name="title" class="w-full border rounded-lg px-4 py-3">
            </div>

            <div>
                <label class="block mb-2 font-medium">Penulis</label>
                <input type="text" name="author" class="w-full border rounded-lg px-4 py-3">
            </div>

            <div>
                <label class="block mb-2 font-medium">Kategori</label>
                <input type="text" name="category" class="w-full border rounded-lg px-4 py-3">
            </div>

            <div>
                <label class="block mb-2 font-medium">Tahun Terbit</label>
                <input type="number" name="year" class="w-full border rounded-lg px-4 py-3">
            </div>

            <div>
                <label class="block mb-2 font-medium">Stok</label>
                <input type="number" name="stock" class="w-full border rounded-lg px-4 py-3">
            </div>

            <div>
                <label class="block mb-2 font-medium">Barcode</label>
                <input type="text" name="barcode" placeholder="Contoh: BK004" class="w-full border rounded-lg px-4 py-3">
            </div>

            <div class="md:col-span-2">
                <button class="bg-blue-950 text-white px-6 py-3 rounded-lg hover:bg-blue-900">
                    Simpan Buku
                </button>
            </div>
        </form>
    </div>
</main>

</body>
</html>