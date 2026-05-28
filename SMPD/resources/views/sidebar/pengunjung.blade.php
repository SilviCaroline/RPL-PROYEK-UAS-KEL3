<aside class="w-72 bg-blue-950 text-white p-6 hidden md:flex flex-col min-h-screen">

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

    <nav class="space-y-2">

        <a href="{{ route('pengunjung.dashboard') }}"
            class="block px-4 py-3 hover:bg-blue-900 rounded-lg {{ request()->routeIs('pengunjung.dashboard') ? 'bg-blue-900' : '' }}">
            Dashboard
        </a>

        <a href="{{ route('opac.index') }}"
            class="block px-4 py-3 hover:bg-blue-900 rounded-lg {{ request()->routeIs('opac.*') ? 'bg-blue-900' : '' }}">
            Katalog Buku
        </a>

        <a href="{{ route('loan-history.index') }}"
            class="block px-4 py-3 hover:bg-blue-900 rounded-lg {{ request()->is('loan-history*') ? 'bg-blue-900' : '' }}">
            Riwayat Peminjaman
        </a>

        <a href="{{ route('reservations.pengunjung') }}"
            class="block px-4 py-3 hover:bg-blue-900 rounded-lg {{ request()->is('/reservations/pengunjung') ? 'bg-blue-900' : '' }}">
            Reservasi Buku
        </a>

        <a href="{{ route('elibrary.index') }}"
            class="block px-4 py-3 hover:bg-blue-900 rounded-lg {{ request()->is('elibrary*') ? 'bg-blue-900' : '' }}">
            E-Library
        </a>

        <a href="{{ route('members.card', 1) }}" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">
            Kartu Member
        </a>

    </nav>

    <a href="{{ route('logout') }}" class="block px-4 py-3 bg-red-600 hover:bg-red-700 rounded-lg mt-4">
        Logout
    </a>

</aside>
