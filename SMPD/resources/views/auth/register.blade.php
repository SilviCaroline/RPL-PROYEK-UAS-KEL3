<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Register - SMPD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100 min-h-screen flex items-center justify-center">

    <div class="bg-white w-full max-w-lg rounded-2xl shadow-lg p-8">
        <h1 class="text-3xl font-bold text-blue-950 text-center mb-2">
            Daftar Anggota
        </h1>

        <p class="text-center text-slate-500 mb-8">
            Registrasi akun pengguna perpustakaan
        </p>

        <form action="{{ route('login') }}" method="GET" class="space-y-5">
            <div>
                <label class="block mb-2 font-medium">Nama Lengkap</label>
                <input type="text" name="name" placeholder="Masukkan nama lengkap"
                    class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-900 outline-none">
            </div>

            <div>
                <label class="block mb-2 font-medium">Email</label>
                <input type="email" name="email" placeholder="Masukkan email"
                    class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-900 outline-none">
            </div>

            <div>
                <label class="block mb-2 font-medium">Nomor HP</label>
                <input type="text" name="phone" placeholder="Contoh: 08123456789"
                    class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-900 outline-none">
            </div>

            <div>
                <label class="block mb-2 font-medium">Password</label>
                <input type="password" name="password" placeholder="Masukkan password"
                    class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-900 outline-none">
            </div>

            <input type="hidden" name="role" value="pengguna">

            <button type="submit" class="w-full bg-blue-950 text-white py-3 rounded-lg hover:bg-blue-900">
                Daftar
            </button>
        </form>

        <p class="text-center text-sm text-slate-500 mt-6">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="text-blue-900 font-semibold">
                Login
            </a>
        </p>
    </div>

</body>

</html>
