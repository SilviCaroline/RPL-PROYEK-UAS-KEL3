@php
    $role = session('role');
@endphp

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Manajemen Buku - LibrarySystem</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

    <div class="flex min-h-screen">

        @if ($role == 'admin')
            @include('sidebar.admin')
        @else
            @include('sidebar.pustakawan')
        @endif

        {{-- Content --}}
        <main class="flex-1 p-6 md:p-10">

            <div class="flex justify-between items-center mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-blue-950">
                        Manajemen Buku
                    </h1>

                    <p class="text-slate-500">
                        Kelola data buku dan QR book card.
                    </p>
                </div>

                <a href="{{ route('books.create') }}"
                    class="bg-blue-950 text-white px-5 py-3 rounded-lg hover:bg-blue-900">
                    + Tambah Buku
                </a>
            </div>

            @if (session('success'))
                <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white rounded-2xl shadow overflow-x-auto">

                <table class="w-full text-left">

                    <thead class="bg-blue-950 text-white">
                        <tr>
                            <th class="p-4">Kode Buku</th>
                            <th class="p-4">Judul Buku</th>
                            <th class="p-4">Nama Penulis</th>
                            <th class="p-4">Kategori</th>
                            <th class="p-4">Stok</th>
                            <th class="p-4">Status</th>
                            <th class="p-4">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($books as $book)
                            <tr class="border-b">

                                <td class="p-4 font-semibold">
                                    {{ $book->title }}
                                </td>

                                <td class="p-4">
                                    {{ $book->author }}
                                </td>

                                <td class="p-4">
                                    {{ $book->category->name }}
                                </td>

                                <td class="p-4">
                                    {{ $book->stock }}
                                </td>

                                <td class="p-4">
                                    @if ($book->status == 'Aktif')
                                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">
                                            Aktif
                                        </span>
                                    @else
                                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs">
                                            Nonaktif
                                        </span>
                                    @endif
                                </td>

                                <td class="p-4 flex gap-2">

                                    <a href="{{ route('books.show', $book->id) }}"
                                        class="bg-blue-600 text-white px-3 py-2 rounded-lg text-sm">
                                        Detail Buku
                                    </a>

                                    <a href="{{ route('books.edit', $book->id) }}"
                                        class="bg-yellow-500 text-white px-3 py-2 rounded-lg text-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="bg-red-600 text-white px-3 py-2 rounded-lg text-sm"
                                            onclick="return confirm('Hapus buku ini?')">
                                            Hapus
                                        </button>
                                    </form>

                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="p-6 text-center text-slate-500">
                                    Data buku belum tersedia.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>

            </div>

            <div class="mt-6">
                {{ $books->links() }}
            </div>

        </main>

    </div>

</body>

</html>
