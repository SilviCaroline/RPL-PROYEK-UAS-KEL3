<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Halaman Kelola Denda - DiarySumsel</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-secondary": "#ffffff",
                        "on-error-container": "#93000a",
                        "error": "#ba1a1a",
                        "surface-container": "#e5eeff",
                        "outline": "#737780",
                        "surface-tint": "#3a5f94",
                        "on-error": "#ffffff",
                        "surface-dim": "#cbdbf5",
                        "on-secondary-container": "#704800",
                        "outline-variant": "#c3c6d1",
                        "primary-fixed-dim": "#a7c8ff",
                        "on-surface-variant": "#43474f",
                        "surface-container-low": "#eff4ff",
                        "on-primary-container": "#799dd6",
                        "on-primary-fixed-variant": "#1f477b",
                        "on-primary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "primary": "#001e40",
                        "background": "#f8f9ff",
                        "inverse-primary": "#a7c8ff",
                        "on-background": "#0b1c30",
                        "secondary-fixed-dim": "#ffb951",
                        "tertiary-fixed": "#dde3eb",
                        "on-tertiary-fixed": "#161c22",
                        "inverse-on-surface": "#eaf1ff",
                        "on-tertiary-fixed-variant": "#41474e",
                        "surface-variant": "#d3e4fe",
                        "primary-container": "#003366",
                        "tertiary-container": "#2e343a",
                        "surface-container-highest": "#d3e4fe",
                        "secondary-container": "#fdb64b",
                        "surface": "#f8f9ff",
                        "secondary": "#825500",
                        "surface-bright": "#f8f9ff",
                        "on-secondary-fixed-variant": "#633f00",
                        "on-tertiary-container": "#969ca4",
                        "primary-fixed": "#d5e3ff",
                        "surface-container-high": "#dce9ff",
                        "on-secondary-fixed": "#291800",
                        "error-container": "#ffdad6",
                        "secondary-fixed": "#ffddb3",
                        "on-surface": "#0b1c30",
                        "tertiary": "#191f25",
                        "inverse-surface": "#213145",
                        "tertiary-fixed-dim": "#c1c7cf",
                        "on-tertiary": "#ffffff",
                        "on-primary-fixed": "#001b3c"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "base": "8px",
                        "margin-mobile": "16px",
                        "margin-tablet": "24px",
                        "container-max": "1440px",
                        "gutter": "24px",
                        "margin-desktop": "40px"
                    },
                    "fontFamily": {
                        "headline-lg-mobile": ["Inter"],
                        "title-md": ["Inter"],
                        "label-sm": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-lg": ["Inter"],
                        "display-lg": ["Inter"],
                        "caption": ["Inter"],
                        "body-md": ["Inter"]
                    },
                    "fontSize": {
                        "headline-lg-mobile": ["28px", {
                            "lineHeight": "36px",
                            "fontWeight": "600"
                        }],
                        "title-md": ["20px", {
                            "lineHeight": "28px",
                            "fontWeight": "600"
                        }],
                        "label-sm": ["14px", {
                            "lineHeight": "20px",
                            "letterSpacing": "0.01em",
                            "fontWeight": "500"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "28px",
                            "fontWeight": "400"
                        }],
                        "headline-lg": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "display-lg": ["48px", {
                            "lineHeight": "60px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "caption": ["12px", {
                            "lineHeight": "16px",
                            "fontWeight": "400"
                        }],
                        "body-md": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
                        }]
                    }
                }
            }
        }
    </script>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-background text-on-background antialiased min-h-screen flex flex-col md:flex-row">
    <!-- NavigationDrawer -->
    <nav
        class="hidden md:flex flex-col p-base gap-2 bg-white/90 dark:bg-primary/90 backdrop-blur-xl shadow-xl dark:shadow-none fixed left-0 top-0 h-full w-[280px] rounded-r-xl z-40">
        <div class="px-4 py-6 mb-4 border-b border-outline-variant/20">
            <h1 class="font-headline-lg text-headline-lg text-primary dark:text-primary-fixed tracking-tight">
                DiarySumsel</h1>
        </div>
        <div class="px-4 mb-6 flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-surface-variant flex items-center justify-center overflow-hidden">
                <span class="material-symbols-outlined text-primary" data-icon="person">person</span>
            </div>
            <div>
                <p class="font-label-sm text-label-sm text-primary dark:text-primary-fixed-dim font-bold">Sumsel Member
                </p>
                <p class="font-caption text-caption text-on-surface-variant">Platinum Member</p>
            </div>
        </div>
        <div class="flex-1 overflow-y-auto space-y-1">
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors translate-x-0 duration-300"
                href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span class="font-label-sm text-label-sm">Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-surface-container-highest dark:bg-primary-container text-primary dark:text-primary-fixed border-l-4 border-secondary-container translate-x-0 duration-300"
                href="#">
                <span class="material-symbols-outlined" data-icon="library_books">library_books</span>
                <span class="font-label-sm text-label-sm">Catalog</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors translate-x-0 duration-300"
                href="#">
                <span class="material-symbols-outlined" data-icon="auto_stories">auto_stories</span>
                <span class="font-label-sm text-label-sm">My Books</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors translate-x-0 duration-300"
                href="#">
                <span class="material-symbols-outlined" data-icon="qr_code_2">qr_code_2</span>
                <span class="font-label-sm text-label-sm">Member Card</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors translate-x-0 duration-300"
                href="#">
                <span class="material-symbols-outlined" data-icon="monitoring">monitoring</span>
                <span class="font-label-sm text-label-sm">Stats</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors translate-x-0 duration-300"
                href="#">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
                <span class="font-label-sm text-label-sm">Settings</span>
            </a>
        </div>
    </nav>
    <!-- Main Content Area -->
    <main class="flex-1 md:ml-[280px] min-h-screen flex flex-col">
        <!-- TopAppBar (Mobile & Tablet) -->
        <header
            class="md:hidden sticky top-0 w-full flex items-center justify-between px-margin-mobile h-16 bg-white/90 dark:bg-primary/90 backdrop-blur-md border-b border-outline-variant/30 dark:border-outline/20 shadow-sm z-50">
            <div class="flex items-center gap-3">
                <button class="text-primary dark:text-primary-fixed scale-95 active:scale-90 p-2">
                    <span class="material-symbols-outlined" data-icon="menu_book">menu_book</span>
                </button>
                <h1 class="text-headline-lg font-headline-lg text-primary dark:text-primary-fixed tracking-tight">
                    DiarySumsel</h1>
            </div>
            <div
                class="w-8 h-8 rounded-full bg-surface-variant flex items-center justify-center overflow-hidden border border-outline-variant/20">
                <span class="material-symbols-outlined text-sm text-primary" data-icon="person">person</span>
            </div>
        </header>
        <!-- Page Content -->
        <div
            class="flex-1 p-margin-mobile md:p-margin-desktop max-w-container-max mx-auto w-full pb-24 md:pb-margin-desktop">
            <!-- Page Header -->
            <div class="mb-8">
                <h2 class="font-headline-lg text-headline-lg text-on-background mb-2">Kelola Denda</h2>
                <p class="font-body-md text-body-md text-on-surface-variant">Manage active and past fines for library
                    members.</p>
            </div>
            <!-- Summary Dashboard Card -->
            <div
                class="bg-white rounded-xl p-6 mb-8 shadow-[0_4px_12px_rgba(0,30,64,0.1)] border border-surface-variant relative overflow-hidden group">
                <div
                    class="absolute top-0 right-0 w-32 h-32 bg-surface-container-highest rounded-bl-full -mr-16 -mt-16 opacity-50 transition-transform group-hover:scale-110">
                </div>
                <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div>
                        <p class="font-label-sm text-label-sm text-on-surface-variant mb-1">Total Denda Berjalan</p>
                        <h3 class="font-display-lg text-display-lg text-primary">Rp 145.000</h3>
                    </div>
                    <div class="flex gap-4">
                        <div class="bg-surface-container px-4 py-3 rounded-lg flex flex-col">
                            <span class="font-caption text-caption text-on-surface-variant">Active Fines</span>
                            <span class="font-title-md text-title-md text-primary">12</span>
                        </div>
                        <div class="bg-surface-container px-4 py-3 rounded-lg flex flex-col">
                            <span class="font-caption text-caption text-on-surface-variant">Overdue Members</span>
                            <span class="font-title-md text-title-md text-primary">8</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Filters & Search -->
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
                <div class="relative w-full sm:w-96">
                    <span
                        class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant"
                        data-icon="search">search</span>
                    <input
                        class="w-full pl-10 pr-4 py-2 bg-white border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary shadow-sm transition-all"
                        placeholder="Search by member or book..." type="text" />
                </div>
                <div class="flex gap-2">
                    <button
                        class="px-4 py-2 bg-surface-container rounded-lg font-label-sm text-label-sm text-on-surface-variant hover:bg-surface-variant transition-colors flex items-center gap-2 border border-outline-variant/30">
                        <span class="material-symbols-outlined text-[18px]" data-icon="filter_list">filter_list</span>
                        Filter
                    </button>
                    <button
                        class="px-4 py-2 bg-surface-container rounded-lg font-label-sm text-label-sm text-on-surface-variant hover:bg-surface-variant transition-colors flex items-center gap-2 border border-outline-variant/30">
                        <span class="material-symbols-outlined text-[18px]" data-icon="sort">sort</span> Sort
                    </button>
                </div>
            </div>
            <!-- Fines List (Bento-style Grid) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
                <!-- Card 1: Unpaid -->
                <div
                    class="bg-white rounded-xl p-5 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-surface-variant hover:shadow-[0_8px_24px_rgba(0,30,64,0.1)] transition-all duration-200 flex flex-col h-full group">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-title-md text-title-md">
                                AD
                            </div>
                            <div>
                                <h4 class="font-title-md text-title-md text-on-background">Andi Darmawan</h4>
                                <p class="font-caption text-caption text-on-surface-variant">ID: MB-2023-001</p>
                            </div>
                        </div>
                        <span
                            class="px-2.5 py-1 rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm flex items-center gap-1 border border-error/20">
                            <span class="material-symbols-outlined text-[14px]" data-icon="error">error</span> Belum
                            Bayar
                        </span>
                    </div>
                    <div class="mb-4 flex-1">
                        <p class="font-caption text-caption text-on-surface-variant mb-1">Book Title</p>
                        <p class="font-body-md text-body-md text-on-background font-medium mb-3 line-clamp-2">The
                            Design of Everyday Things</p>
                        <div class="flex items-center gap-4 text-on-surface-variant bg-surface px-3 py-2 rounded-md">
                            <div class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-[16px]"
                                    data-icon="schedule">schedule</span>
                                <span class="font-label-sm text-label-sm text-error font-semibold">12 Days
                                    Overdue</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4 border-t border-outline-variant/30 flex items-center justify-between mt-auto">
                        <div>
                            <p class="font-caption text-caption text-on-surface-variant">Fine Amount</p>
                            <p class="font-title-md text-title-md text-on-background">Rp 24.000</p>
                        </div>
                        <button
                            class="bg-primary text-on-primary hover:bg-primary-container px-4 py-2 rounded-lg font-label-sm text-label-sm transition-colors shadow-sm flex items-center gap-2">
                            Bayar Sekarang <span class="material-symbols-outlined text-[16px]"
                                data-icon="payments">payments</span>
                        </button>
                    </div>
                </div>
                <!-- Card 2: Unpaid -->
                <div
                    class="bg-white rounded-xl p-5 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-surface-variant hover:shadow-[0_8px_24px_rgba(0,30,64,0.1)] transition-all duration-200 flex flex-col h-full group">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-title-md text-title-md">
                                SP
                            </div>
                            <div>
                                <h4 class="font-title-md text-title-md text-on-background">Siti Putri</h4>
                                <p class="font-caption text-caption text-on-surface-variant">ID: MB-2023-042</p>
                            </div>
                        </div>
                        <span
                            class="px-2.5 py-1 rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm flex items-center gap-1 border border-error/20">
                            <span class="material-symbols-outlined text-[14px]" data-icon="error">error</span> Belum
                            Bayar
                        </span>
                    </div>
                    <div class="mb-4 flex-1">
                        <p class="font-caption text-caption text-on-surface-variant mb-1">Book Title</p>
                        <p class="font-body-md text-body-md text-on-background font-medium mb-3 line-clamp-2">Laskar
                            Pelangi</p>
                        <div class="flex items-center gap-4 text-on-surface-variant bg-surface px-3 py-2 rounded-md">
                            <div class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-[16px]"
                                    data-icon="schedule">schedule</span>
                                <span class="font-label-sm text-label-sm text-error font-semibold">5 Days
                                    Overdue</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4 border-t border-outline-variant/30 flex items-center justify-between mt-auto">
                        <div>
                            <p class="font-caption text-caption text-on-surface-variant">Fine Amount</p>
                            <p class="font-title-md text-title-md text-on-background">Rp 10.000</p>
                        </div>
                        <button
                            class="bg-primary text-on-primary hover:bg-primary-container px-4 py-2 rounded-lg font-label-sm text-label-sm transition-colors shadow-sm flex items-center gap-2">
                            Bayar Sekarang <span class="material-symbols-outlined text-[16px]"
                                data-icon="payments">payments</span>
                        </button>
                    </div>
                </div>
                <!-- Card 3: Paid (Lunas) -->
                <div
                    class="bg-white rounded-xl p-5 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-surface-variant hover:shadow-[0_8px_24px_rgba(0,30,64,0.1)] transition-all duration-200 flex flex-col h-full group opacity-80">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-full bg-surface-variant text-on-surface-variant flex items-center justify-center font-title-md text-title-md">
                                BW
                            </div>
                            <div>
                                <h4 class="font-title-md text-title-md text-on-background">Budi Wibowo</h4>
                                <p class="font-caption text-caption text-on-surface-variant">ID: MB-2022-115</p>
                            </div>
                        </div>
                        <span
                            class="px-2.5 py-1 rounded-full bg-[#dcfce7] text-[#166534] font-label-sm text-label-sm flex items-center gap-1 border border-[#166534]/20">
                            <span class="material-symbols-outlined text-[14px]"
                                data-icon="check_circle">check_circle</span> Lunas
                        </span>
                    </div>
                    <div class="mb-4 flex-1">
                        <p class="font-caption text-caption text-on-surface-variant mb-1">Book Title</p>
                        <p class="font-body-md text-body-md text-on-background font-medium mb-3 line-clamp-2">Sapiens:
                            A Brief History of Humankind</p>
                        <div class="flex items-center gap-4 text-on-surface-variant bg-surface px-3 py-2 rounded-md">
                            <div class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-[16px]" data-icon="history">history</span>
                                <span class="font-label-sm text-label-sm">Was 8 Days Overdue</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4 border-t border-outline-variant/30 flex items-center justify-between mt-auto">
                        <div>
                            <p class="font-caption text-caption text-on-surface-variant">Paid Amount</p>
                            <p class="font-title-md text-title-md text-on-surface-variant line-through">Rp 16.000</p>
                        </div>
                        <button
                            class="bg-surface-variant text-on-surface-variant px-4 py-2 rounded-lg font-label-sm text-label-sm cursor-not-allowed flex items-center gap-2"
                            disabled="">
                            Settled <span class="material-symbols-outlined text-[16px]"
                                data-icon="done_all">done_all</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer
            class="w-full flex flex-col md:flex-row justify-between items-center px-margin-mobile md:px-margin-desktop py-8 bg-primary dark:bg-on-background border-t border-primary-container mt-auto">
            <div class="mb-4 md:mb-0 text-center md:text-left">
                <p class="font-title-md text-on-primary mb-1">DiarySumsel</p>
                <p class="font-caption text-caption text-primary-fixed/70">© 2024 Dinas Perpustakaan Provinsi Sumatera
                    Selatan</p>
            </div>
            <div class="flex flex-wrap justify-center gap-6">
                <a class="font-caption text-caption text-primary-fixed/70 hover:text-white hover:underline transition-all"
                    href="#">About</a>
                <a class="font-caption text-caption text-primary-fixed/70 hover:text-white hover:underline transition-all"
                    href="#">Privacy Policy</a>
                <a class="font-caption text-caption text-primary-fixed/70 hover:text-white hover:underline transition-all"
                    href="#">Contact Support</a>
                <a class="font-caption text-caption text-primary-fixed/70 hover:text-white hover:underline transition-all"
                    href="#">Digital Collections</a>
            </div>
        </footer>
    </main>
    <!-- BottomNavBar (Mobile Only) -->
    <nav
        class="md:hidden flex justify-around items-center h-16 px-4 pb-safe bg-white/95 dark:bg-primary/95 backdrop-blur-lg border-t border-outline-variant/20 shadow-[0_-4px_12px_rgba(0,0,0,0.05)] fixed bottom-0 w-full rounded-t-xl z-50">
        <a class="text-on-surface-variant dark:text-on-tertiary-container flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity active:scale-90 transition-transform p-2"
            href="#">
            <span class="material-symbols-outlined mb-1" data-icon="home">home</span>
            <span class="font-caption text-caption">Home</span>
        </a>
        <a class="text-on-surface-variant dark:text-on-tertiary-container flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity active:scale-90 transition-transform p-2"
            href="#">
            <span class="material-symbols-outlined mb-1" data-icon="search">search</span>
            <span class="font-caption text-caption">Search</span>
        </a>
        <a class="bg-secondary-container dark:bg-secondary text-on-secondary-container dark:text-on-secondary rounded-full px-4 py-1 flex flex-col items-center active:scale-90 transition-transform"
            href="#">
            <span class="material-symbols-outlined mb-1" data-icon="local_library">local_library</span>
            <span class="font-caption text-caption font-medium">Library</span>
        </a>
        <a class="text-on-surface-variant dark:text-on-tertiary-container flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity active:scale-90 transition-transform p-2"
            href="#">
            <span class="material-symbols-outlined mb-1" data-icon="person">person</span>
            <span class="font-caption text-caption">Profile</span>
        </a>
    </nav>
</body>

</html>
