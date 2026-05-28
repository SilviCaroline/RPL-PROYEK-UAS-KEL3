<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Manajemen Anggota</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

    @include('sidebar.pustakawan')

    <main class="flex-1 p-6 md:p-10">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-blue-950">Manajemen Anggota</h1>
                <p class="text-slate-500">Kelola data anggota dan QR member card.</p>
            </div>

            <a href="{{ route('members.create') }}" class="bg-blue-950 text-white px-5 py-3 rounded-lg hover:bg-blue-900">
                + Tambah Anggota
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
                        <th class="p-4">Kode</th>
                        <th class="p-4">Nama</th>
                        <th class="p-4">Email</th>
                        <th class="p-4">No HP</th>
                        <th class="p-4">Status</th>
                        <th class="p-4">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($members as $member)
                        <tr class="border-b">
                            <td class="p-4 font-semibold">{{ $member->member_code }}</td>
                            <td class="p-4">{{ $member->name }}</td>
                            <td class="p-4">{{ $member->email }}</td>
                            <td class="p-4">{{ $member->phone ?? '-' }}</td>
                            <td class="p-4">
                                @if ($member->status == 'Aktif')
                                    <span
                                        class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">Aktif</span>
                                @else
                                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs">Nonaktif</span>
                                @endif
                            </td>
                            <td class="p-4 flex gap-2">
                                <a href="{{ route('members.card', $member->id) }}"
                                    class="bg-blue-600 text-white px-3 py-2 rounded-lg text-sm">Kartu</a>
                                <a href="{{ route('members.edit', $member->id) }}"
                                    class="bg-yellow-500 text-white px-3 py-2 rounded-lg text-sm">Edit</a>

                                <form action="{{ route('members.destroy', $member->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-600 text-white px-3 py-2 rounded-lg text-sm"
                                        onclick="return confirm('Hapus anggota ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="p-6 text-center text-slate-500">
                                Data anggota belum tersedia.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $members->links() }}
        </div>
    </main>
    </div>

</body>

</html>
