<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SMPD</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100 min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-5xl bg-white rounded-3xl shadow-2xl overflow-hidden">

        <div class="grid md:grid-cols-2">

            {{-- SISI KIRI --}}
            <div class="bg-blue-950 text-white p-12 flex flex-col justify-center">

                <h1 class="text-5xl font-bold mb-4">
                    SMPD
                </h1>

                <h2 class="text-2xl font-semibold mb-4">
                    Sistem Manajemen Perpustakaan Daerah
                </h2>

                <p class="text-blue-100 leading-relaxed">
                    Kelola peminjaman, pengembalian, reservasi buku,
                    dan akses E-Library dalam satu platform.
                </p>

                <div class="mt-8 space-y-3">

                    <div class="bg-white/10 rounded-xl p-4">
                        📚 Ribuan Koleksi Buku
                    </div>

                    <div class="bg-white/10 rounded-xl p-4">
                        🔔 Notifikasi Reservasi
                    </div>

                    <div class="bg-white/10 rounded-xl p-4">
                        📖 E-Library Digital
                    </div>

                </div>

            </div>

            {{-- SISI KANAN --}}
            <div class="p-10">

                <h2 class="text-3xl font-bold text-blue-950 mb-2">
                    Login
                </h2>

                <p class="text-slate-500 mb-8">
                    Masuk ke akun SMPD Anda.
                </p>

                {{-- SUCCESS --}}
                @if (session('success'))
                    <div class="bg-green-100 border border-green-300 text-green-700 p-4 rounded-xl mb-5">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- ERROR --}}
                @if (session('error'))
                    <div class="bg-red-100 border border-red-300 text-red-700 p-4 rounded-xl mb-5">
                        {{ session('error') }}
                    </div>
                @endif

                {{-- VALIDATION --}}
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-300 text-red-700 p-4 rounded-xl mb-5">

                        <ul class="list-disc ml-5">

                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach

                        </ul>

                    </div>
                @endif

                <form action="{{ route('login.post') }}" method="POST" class="space-y-5">

                    @csrf

                    <div>

                        <label class="block mb-2 font-medium text-slate-700">
                            Email
                        </label>

                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email"
                            class="w-full border rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-900 outline-none">

                    </div>

                    <div>

                        <label class="block mb-2 font-medium text-slate-700">
                            Password
                        </label>

                        <input type="password" name="password" placeholder="Masukkan password"
                            class="w-full border rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-900 outline-none">

                    </div>

                    <button type="submit"
                        class="w-full bg-blue-950 hover:bg-blue-900 text-white py-3 rounded-xl font-semibold transition">

                        Login

                    </button>

                </form>

                <div class="mt-6 text-center">

                    <span class="text-slate-500">
                        Belum punya akun?
                    </span>

                    <a href="{{ route('register') }}" class="text-blue-950 font-semibold hover:underline">

                        Daftar Sekarang

                    </a>

                </div>

                <div class="mt-4 text-center">

                    <a href="{{ route('landing') }}" class="text-sm text-slate-500 hover:text-blue-950">

                        ← Kembali ke Landing Page

                    </a>

                </div>

            </div>

        </div>

    </div>

</body>

</html>
