<aside class="w-72 bg-blue-950 text-white p-6 hidden md:flex flex-col min-h-screen">
    <h1 class="text-2xl font-bold mb-8">LibrarySystem</h1>

    <div class="mb-6 p-4 bg-blue-900 rounded-xl">
        <p class="text-sm text-blue-200">
            Login sebagai
        </p>

        <h2 class="font-bold capitalize">
            Admin
        </h2>
    </div>


    <nav class="space-y-2">
        <a href="{{ route('pustakawan.dashboard') }}"
            class="block px-4 py-3 hover:bg-blue-900 rounded-lg {{ request()->routeIs('admin.dashboard') ? 'bg-blue-900' : '' }}">
            Dashboard
        </a>
        <a href="#" class="block px-4 py-3 hover:bg-blue-900 rounded-lg">Manajemen User</a>
        <a href="{{ route('books.index') }}"
            class="block px-4 py-3 hover:bg-blue-900 rounded-lg {{ request()->routeIs('books.*') ? 'bg-blue-900' : '' }}">
            Manajemen Buku
        </a>
        <a href="{{ route('members.index') }}"
            class="block px-4 py-3 hover:bg-blue-900 rounded-lg {{ request()->routeIs('members.*') ? 'bg-blue-900' : '' }}">
            Manajemen Anggota
        </a>
        <a href="{{ route('loans.index') }}"
            class="block px-4 py-3 hover:bg-blue-900 rounded-lg {{ request()->routeIs('loans.*') ? 'bg-blue-900' : '' }}">
            Peminjaman
        </a>
        <a href="{{ route('returns.index') }}"
            class="block px-4 py-3 hover:bg-blue-900 rounded-lg {{ request()->is('returns*') ? 'bg-blue-900' : '' }}">
            Pengembalian
        </a>
        <a href="{{ route('reservations.index') }}"
            class="block px-4 py-3 hover:bg-blue-900 rounded-lg {{ request()->is('reservations*') ? 'bg-blue-900' : '' }}">
            Reservasi Buku
        </a>
        <a href="{{ route('statistics.index') }}"
            class="block px-4 py-3 hover:bg-blue-900 rounded-lg {{ request()->routeIs('statistics.*') ? 'bg-blue-900' : '' }}">
            Statistik
        </a>
        <a href="{{ route('reports.index') }}"
            class="block px-4 py-3 hover:bg-blue-900 rounded-lg {{ request()->routeIs('reports.*') ? 'bg-blue-900' : '' }}">
            Laporan Sistem
        </a>
    </nav>

    <a href="{{ route('logout') }}" class="block px-4 py-3 bg-red-600 hover:bg-red-700 rounded-lg mt-4">
        Logout
    </a>
</aside>
