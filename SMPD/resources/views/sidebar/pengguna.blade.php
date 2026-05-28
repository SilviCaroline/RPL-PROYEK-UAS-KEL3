<aside class="w-72 bg-blue-950 text-white p-6 hidden md:block">
    <h1 class="text-2xl font-bold mb-8">
        LibrarySystem
    </h1>

    <div class="mb-6 p-4 bg-blue-900 rounded-xl">
        <p class="text-sm text-blue-200">
            Login sebagai
        </p>

        <h2 class="font-bold capitalize">
            Pengguna
        </h2>
    </div>

    <nav class="space-y-3">
        <a href="{{ route('dashboard', ['role' => 'pengguna']) }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
            Dashboard
        </a>
        <a href="{{ route('opac.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
            Katalog Buku
        </a>
        <a href="{{ route('loanhistory.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
            Riwayat Peminjaman
        </a>
        <a href="{{ route('reservations.pengguna') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
            Reservasi Buku
        </a>
        <a href="{{ route('elibrary.index') }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
            E-Library
        </a>
        <a href="{{ route('members.card', 1) }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
            Kartu Member
        </a>
        <a href="{{ route('logout') }}" class="block px-4 py-3 bg-red-600 hover:bg-red-700 rounded-lg mt-8">
            Logout
        </a>

    </nav>

</aside>
