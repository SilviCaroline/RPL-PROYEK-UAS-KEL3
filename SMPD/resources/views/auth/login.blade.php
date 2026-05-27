<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - LibrarySystem</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen flex items-center justify-center">

    <div class="bg-white w-full max-w-md rounded-2xl shadow-lg p-8">
        <h1 class="text-3xl font-bold text-blue-950 text-center mb-2">
            Login
        </h1>

        <p class="text-center text-slate-500 mb-8">
            Masuk sebagai pengguna, pustakawan, atau admin
        </p>

        <form action="{{ route('dashboard') }}" method="GET" class="space-y-5">
            <div>
                <label class="block mb-2 font-medium">Email</label>
                <input type="email" name="email" placeholder="Masukkan email"
                    class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-900 outline-none">
            </div>

            <div>
                <label class="block mb-2 font-medium">Password</label>
                <input type="password" name="password" placeholder="Masukkan password"
                    class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-900 outline-none">
            </div>

            <div>
                <label class="block mb-2 font-medium">Login Sebagai</label>
                <select name="role"
                    class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-900 outline-none">
                    <option value="pengguna">Pengguna / Anggota</option>
                    <option value="pustakawan">Pustakawan</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <button type="submit"
                class="w-full bg-blue-950 text-white py-3 rounded-lg hover:bg-blue-900">
                Login
            </button>
        </form>

        <p class="text-center text-sm text-slate-500 mt-6">
            Belum punya akun?
            <a href="{{ route('register') }}" class="text-blue-900 font-semibold">
                Daftar di sini
            </a>
        </p>

        <div class="mt-4 text-center">
            <a href="{{ route('landing') }}" class="text-sm text-slate-500 hover:text-blue-900">
                Kembali ke Landing Page
            </a>
        </div>
    </div>

</body>
</html>