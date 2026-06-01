<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - SMPD</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100 min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-5xl bg-white rounded-3xl shadow-2xl overflow-hidden">

        <div class="grid md:grid-cols-2">

            {{-- KIRI --}}
            <div class="bg-blue-950 text-white p-12 flex flex-col justify-center">

                <h1 class="text-5xl font-bold mb-4">
                    SMPD
                </h1>

                <h2 class="text-2xl font-semibold mb-4">
                    Sistem Manajemen Perpustakaan Daerah
                </h2>

                <p class="text-blue-100 leading-relaxed">
                    Daftarkan akun anggota perpustakaan untuk mengakses katalog buku,
                    melakukan reservasi, melihat riwayat peminjaman,
                    dan mengakses E-Library.
                </p>

                <div class="mt-8">
                    <div class="bg-white/10 rounded-2xl p-4">
                        📚 Akses ribuan koleksi buku
                    </div>

                    <div class="bg-white/10 rounded-2xl p-4 mt-3">
                        📖 E-Library Digital
                    </div>

                    <div class="bg-white/10 rounded-2xl p-4 mt-3">
                        🔔 Notifikasi Reservasi
                    </div>
                </div>

            </div>

            {{-- KANAN --}}
            <div class="p-10">

                <div class="mb-8">

                    <h2 class="text-3xl font-bold text-blue-950">
                        Daftar Anggota
                    </h2>

                    <p class="text-slate-500 mt-2">
                        Lengkapi data berikut untuk membuat akun baru.
                    </p>

                </div>

                @if ($errors->any())
                    <div class="bg-red-100 border border-red-300 text-red-700 rounded-xl p-4 mb-6">
                        <ul class="list-disc ml-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('register.store') }}" method="POST" class="space-y-5">

                    @csrf

                    <div>
                        <label class="block mb-2 font-medium text-slate-700">
                            Nama Lengkap
                        </label>

                        <input
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Masukkan nama lengkap"
                            class="w-full border rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-900 outline-none">
                    </div>

                    <div>
                        <label class="block mb-2 font-medium text-slate-700">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Masukkan email"
                            class="w-full border rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-900 outline-none">
                    </div>

                    <div>
                        <label class="block mb-2 font-medium text-slate-700">
                            Password
                        </label>

                        <input
                            type="password"
                            name="password"
                            placeholder="Minimal 6 karakter"
                            class="w-full border rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-900 outline-none">
                    </div>

                    <div>
                        <label class="block mb-2 font-medium text-slate-700">
                            Konfirmasi Password
                        </label>

                        <input
                            type="password"
                            name="password_confirmation"
                            placeholder="Ulangi password"
                            class="w-full border rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-900 outline-none">
                    </div>

                    <button
                        type="submit"
                        class="w-full bg-blue-950 hover:bg-blue-900 text-white py-3 rounded-xl font-semibold transition">

                        Daftar Sekarang

                    </button>

                </form>

                <div class="mt-6 text-center">

                    <span class="text-slate-500">
                        Sudah punya akun?
                    </span>

                    <a
                        href="{{ route('login') }}"
                        class="text-blue-950 font-semibold hover:underline">

                        Login

                    </a>

                </div>

            </div>

        </div>

    </div>

</body>

</html>