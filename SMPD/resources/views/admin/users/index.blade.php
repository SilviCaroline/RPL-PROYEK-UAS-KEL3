<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hak Akses</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">
    <div class="flex min-h-screen">
        {{-- Sidebar --}}
        @include('sidebar.admin')

        {{-- Content --}}
        <main class="flex-1 p-6 md:p-10">

            {{-- Header --}}
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-blue-950">
                    Hak Akses
                </h1>
                <p class="text-slate-500 mt-2">
                    Kelola hak akses anggota sistem perpustakaan.
                </p>
            </div>

            {{-- Alert --}}
            <div class="bg-blue-100 border border-blue-200 text-blue-800 rounded-xl p-4 mb-6">
                Kelola hak akses untuk setiap peran. Centang izin yang diperbolehkan untuk peran tersebut.
            </div>

            <div class="grid grid-cols-12 gap-6">
                {{-- Daftar Peran --}}
                <div class="col-span-12 lg:col-span-4">
                    <div class="bg-white rounded-2xl shadow">
                        <div class="flex justify-between items-center p-5 border-b">
                            <h2 class="font-bold text-lg">
                                Daftar Peran
                            </h2>
                        </div>

                        <div class="p-5">
                            @foreach ($roles as $role)
                                <div onclick="selectRole('{{ $role['nama_role'] }}')"
                                    class="border rounded-xl p-4 mb-3 cursor-pointer hover:bg-slate-50">
                                    <h3 class="font-semibold">
                                        {{ $role['nama_role'] }}
                                    </h3>
                                    <p class="text-sm text-slate-500">
                                        {{ $role['deskripsi'] }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Hak Akses --}}
                <div class="col-span-12 lg:col-span-8">
                    <div class="bg-white rounded-2xl shadow">
                        <div class="flex justify-between items-center p-5 border-b">
                            <h2 id="roleTitle" class="font-bold text-lg">
                                Pengaturan Hak Akses
                            </h2>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead class="bg-slate-100">
                                    <tr>
                                        <th class="text-left p-4">
                                            Menu / Fitur
                                        </th>
                                        <th>Lihat</th>
                                        <th>Tambah</th>
                                        <th>Ubah</th>
                                        <th>Hapus</th>
                                        <th>Cetak</th>
                                        <th>Ekspor</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    {{-- Manajemen Sistem --}}
                                    <tr class="bg-slate-200">
                                        <td colspan="7" class="p-3 font-semibold">
                                            MANAJEMEN SISTEM
                                        </td>
                                    </tr>
                                    <tr class="border-b">
                                        <td class="p-3">anggota</td>
                                        <td><input type="checkbox"></td>
                                        <td><input type="checkbox"></td>
                                        <td><input type="checkbox"></td>
                                        <td><input type="checkbox"></td>
                                        <td><input type="checkbox"></td>
                                        <td><input type="checkbox"></td>
                                    </tr>
                                    <tr class="border-b">
                                        <td class="p-3">Peran</td>
                                        <td><input type="checkbox"></td>
                                        <td><input type="checkbox"></td>
                                        <td><input type="checkbox"></td>
                                        <td><input type="checkbox"></td>
                                        <td><input type="checkbox"></td>
                                        <td><input type="checkbox"></td>
                                    </tr>

                                    {{-- Data Master --}}
                                    <tr class="bg-slate-200">
                                        <td colspan="7" class="p-3 font-semibold">
                                            DATA MASTER
                                        </td>
                                    </tr>
                                    <tr class="border-b">
                                        <td class="p-3">Kategori Buku</td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                    </tr>
                                    <tr class="border-b">
                                        <td class="p-3">Buku</td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                    </tr>

                                    {{-- Sirkulasi --}}
                                    <tr class="bg-slate-200">
                                        <td colspan="7" class="p-3 font-semibold">
                                            SIRKULASI
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td class="p-3">Peminjaman</td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                    </tr>
                                    <tr>
                                        <td class="p-3">Pengembalian</td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                    </tr>
                                    <tr class="border-b">
                                        <td class="p-3">Reservasi</td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                        <td><input checked type="checkbox"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="flex justify-end gap-3 p-5 border-t">
                            <button class="border border-slate-300 px-5 py-2 rounded-lg hover:bg-slate-100">
                                Batal
                            </button>
                            <button class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700">
                                Simpan Perubahan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        function selectRole(nama) {
            document.getElementById('roleTitle').innerText =
                'Pengaturan Hak Akses - ' + nama;
        }
    </script>
</body>

</html>
