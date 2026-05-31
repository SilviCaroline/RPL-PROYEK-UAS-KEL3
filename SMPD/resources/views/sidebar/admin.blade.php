<aside class="w-72 bg-blue-950 text-white p-6 hidden md:flex flex-col min-h-screen">
    <h1 class="text-2xl font-bold mb-8">SMPD</h1>

    <div class="mb-6 p-4 bg-blue-900 rounded-xl">
        <p class="text-sm text-blue-200">
            Login sebagai
        </p>

        <h2 class="font-bold capitalize">
            Admin
        </h2>
    </div>


    <nav class="space-y-2">
        <a href="{{ route('admin.dashboard') }}"
            class="block px-4 py-3 hover:bg-blue-900 rounded-lg {{ request()->routeIs('admin.dashboard') ? 'bg-blue-900' : '' }}">
            Dashboard
        </a>
        <a href="{{ route('users.index') }}"
            class="block px-4 py-3 hover:bg-blue-900 rounded-lg {{ request()->routeIs('users.*') ? 'bg-blue-900' : '' }}">
            Manajemen User
        </a>
        <a href="{{ route('books.index') }}"
            class="block px-4 py-3 hover:bg-blue-900 rounded-lg {{ request()->routeIs('books.*') ? 'bg-blue-900' : '' }}">
            Manajemen Buku
        </a>
        <a href="{{ route('members.index') }}"
            class="block px-4 py-3 hover:bg-blue-900 rounded-lg {{ request()->routeIs('members.*') ? 'bg-blue-900' : '' }}">
            Manajemen Anggota
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
