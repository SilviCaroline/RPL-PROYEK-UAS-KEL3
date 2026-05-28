<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Kartu Anggota</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

    <main class="max-w-3xl mx-auto p-8">
        <a href="{{ route('members.index') }}" class="text-blue-900 font-semibold">← Kembali</a>

        <div class="bg-white rounded-2xl shadow p-8 mt-6">
            <h1 class="text-3xl font-bold text-blue-950 mb-6">QR Member Card</h1>

            <div class="border-2 border-blue-950 rounded-2xl overflow-hidden max-w-xl mx-auto">
                <div class="bg-blue-950 text-white p-5">
                    <h2 class="text-2xl font-bold">LibrarySystem</h2>
                    <p>Kartu Anggota Perpustakaan</p>
                </div>

                <div class="p-6 grid md:grid-cols-2 gap-6 items-center">
                    <div>
                        <p class="text-slate-500">Kode Anggota</p>
                        <h3 class="text-2xl font-bold text-blue-950">
                            {{ $member->member_code ?? 'MBR' . str_pad($member->id, 4, '0', STR_PAD_LEFT) }}</h3>

                        <p class="text-slate-500 mt-4">Nama</p>
                        <h3 class="font-bold">{{ $member->name }}</h3>

                        <p class="text-slate-500 mt-4">Email</p>
                        <h3 class="font-semibold">{{ $member->email }}</h3>

                        <p class="text-slate-500 mt-4">Status</p>
                        @if ($member->status == 'Aktif')
                            <span class="inline-block bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                                Aktif
                            </span>
                        @else
                            <span class="inline-block bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">
                                Nonaktif
                            </span>
                        @endif
                    </div>

                    <div class="bg-slate-100 h-56 rounded-xl flex items-center justify-center text-center">
                        <div>
                            <div class="bg-white p-3 rounded-lg inline-block">
                                {!! QrCode::size(150)->generate($member->member_code ?? 'MBR' . str_pad($member->id, 4, '0', STR_PAD_LEFT)) !!}
                            </div>
                            <p class="font-bold mt-3">
                                {{ $member->member_code ?? 'MBR' . str_pad($member->id, 4, '0', STR_PAD_LEFT) }}</p>
                            <p class="text-xs text-slate-500">QR Member</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-6">
                <button onclick="window.print()" class="bg-blue-950 text-white px-6 py-3 rounded-lg">
                    Cetak Kartu
                </button>
            </div>
        </div>
    </main>

</body>

</html>
