<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Reservasi Buku - DiarySumsel</title>
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .icon-fill {
            font-variation-settings: 'FILL' 1;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-background text-on-background font-body-md antialiased flex h-screen overflow-hidden">
    <!-- NavigationDrawer (Desktop) -->
    <aside
        class="hidden md:flex flex-col p-base gap-2 bg-white/90 dark:bg-primary/90 backdrop-blur-xl shadow-2xl dark:shadow-none fixed left-0 top-0 h-full w-[280px] rounded-r-xl z-40 translate-x-0 transition-transform duration-300">
        <!-- Header -->
        <div class="flex items-center gap-4 p-4 mb-4">
            <div
                class="w-12 h-12 rounded-full bg-surface-container-high flex items-center justify-center overflow-hidden">
                <span class="material-symbols-outlined text-primary text-2xl icon-fill" data-icon="person">person</span>
            </div>
            <div>
                <h2 class="font-title-md text-title-md text-primary dark:text-primary-fixed-dim">Sumsel Member</h2>
                <p class="font-caption text-caption text-on-surface-variant">Platinum Member</p>
            </div>
        </div>
        <!-- Navigation Links -->
        <nav class="flex flex-col gap-1 flex-1">
            <!-- Dashboard -->
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors"
                href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span class="font-label-sm text-label-sm">Dashboard</span>
            </a>
            <!-- Catalog -->
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors"
                href="#">
                <span class="material-symbols-outlined" data-icon="library_books">library_books</span>
                <span class="font-label-sm text-label-sm">Catalog</span>
            </a>
            <!-- My Books (ACTIVE) -->
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-surface-container-highest dark:bg-primary-container text-primary dark:text-primary-fixed border-l-4 border-secondary-container"
                href="#">
                <span class="material-symbols-outlined icon-fill" data-icon="auto_stories">auto_stories</span>
                <span class="font-label-sm text-label-sm">My Books</span>
            </a>
            <!-- Member Card -->
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors"
                href="#">
                <span class="material-symbols-outlined" data-icon="qr_code_2">qr_code_2</span>
                <span class="font-label-sm text-label-sm">Member Card</span>
            </a>
            <!-- Stats -->
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors"
                href="#">
                <span class="material-symbols-outlined" data-icon="monitoring">monitoring</span>
                <span class="font-label-sm text-label-sm">Stats</span>
            </a>
        </nav>
        <!-- Settings (Bottom) -->
        <a class="flex items-center gap-3 px-4 py-3 mt-auto rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors"
            href="#">
            <span class="material-symbols-outlined" data-icon="settings">settings</span>
            <span class="font-label-sm text-label-sm">Settings</span>
        </a>
    </aside>
    <!-- Main Content Wrapper -->
    <div class="flex-1 flex flex-col md:ml-[280px] h-screen overflow-y-auto relative">
        <!-- TopAppBar -->
        <header
            class="sticky top-0 w-full flex items-center justify-between px-margin-mobile md:px-margin-desktop h-16 bg-white/90 dark:bg-primary/90 backdrop-blur-md shadow-sm docked full-width top-0 z-30">
            <div class="flex items-center gap-4">
                <button
                    class="md:hidden p-2 text-on-surface-variant hover:bg-surface-container-low transition-all duration-200 rounded-full scale-95 active:scale-90">
                    <span class="material-symbols-outlined" data-icon="menu_book">menu_book</span>
                </button>
                <h1 class="text-headline-lg font-headline-lg text-primary dark:text-primary-fixed tracking-tight">
                    DiarySumsel</h1>
            </div>
            <div class="flex items-center gap-4">
                <button
                    class="p-2 text-on-surface-variant hover:bg-surface-container-low transition-all duration-200 rounded-full scale-95 active:scale-90">
                    <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                </button>
                <div
                    class="w-8 h-8 rounded-full bg-surface-container-high overflow-hidden border border-outline-variant/30">
                    <img alt="South Sumatra Library Logo" class="w-full h-full object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBd6UCfhy_ua7mfvY2SPbcTkv83oueYh5VMCwxCb0QuxzyJW1QWI75VwJyn4-vI3ERgEkXJyE_h2aBwGf0hfVcGsIWZE9w6fXOi47_oXhgwS4eTf79I-hMqCMfGFYVgCzFD1OS_WaFddxIRYMT8Mt7pMrmZaKgykl_okjqy_GuciSlt5t1chwYj5plYVQomKl5DYo5CWyvVGyBE9uY_JEbdpqwRHhdOnOu5EKeYDRktAndAVEl77xp8ntVifLFOpHoLU7R-o8n7H4Y" />
                </div>
            </div>
        </header>
        <!-- Main Canvas -->
        <main
            class="flex-1 w-full max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-8 pb-32 md:pb-12">
            <!-- Page Header -->
            <div class="mb-8">
                <h2 class="font-display-lg text-display-lg text-on-surface mb-2">Reservasi Buku</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    Pantau status antrean buku yang Anda pesan, atau kelola pemberitahuan untuk koleksi dengan
                    permintaan tinggi.
                </p>
            </div>
            <!-- Reservasi Anda (Member View) -->
            <section class="mb-12">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="font-title-md text-title-md text-on-surface">Reservasi Aktif Anda</h3>
                    <span
                        class="font-label-sm text-label-sm bg-surface-container-high text-on-surface px-3 py-1 rounded-full">2
                        Antrean</span>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-gutter">
                    <!-- Card 1 (User Reservation) -->
                    <div
                        class="bg-surface-container-lowest rounded-xl p-6 shadow-[0_4px_24px_-4px_rgba(0,0,0,0.05)] border border-outline-variant/20 hover:scale-[1.01] transition-transform duration-200 flex flex-col sm:flex-row gap-6">
                        <div
                            class="w-24 h-36 bg-surface-container shrink-0 rounded-lg overflow-hidden relative shadow-sm">
                            <div class="absolute inset-0 bg-gradient-to-tr from-surface-tint/20 to-transparent z-10">
                            </div>
                            <div class="w-full h-full bg-surface-variant flex items-center justify-center"
                                data-alt="A clean, modern 3D rendering of a technical programming book lying flat on a minimalist white desk. The book cover features abstract geometric patterns in deep blue and soft orange, reflecting a corporate SaaS aesthetic. The lighting is bright and even, simulating a light-mode UI environment with soft, ambient drop shadows. The overall composition is sterile yet inviting, perfect for a professional library catalog.">
                                <span class="material-symbols-outlined text-4xl text-on-surface-variant opacity-50"
                                    data-icon="menu_book">menu_book</span>
                            </div>
                        </div>
                        <div class="flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex items-start justify-between gap-4 mb-2">
                                    <div>
                                        <p
                                            class="font-caption text-caption text-secondary font-semibold uppercase tracking-wider mb-1">
                                            Teknologi Informasi</p>
                                        <h4 class="font-title-md text-title-md text-on-surface leading-tight">Arsitektur
                                            Perangkat Lunak Modern</h4>
                                    </div>
                                    <div
                                        class="bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full flex flex-col items-center justify-center shrink-0 shadow-sm">
                                        <span
                                            class="font-caption text-caption opacity-80 uppercase text-[10px]">Antrean</span>
                                        <span class="font-title-md text-title-md leading-none">Ke-2</span>
                                    </div>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-4">Oleh: Robert C. Martin
                                </p>
                                <div
                                    class="bg-surface p-3 rounded-lg border border-outline-variant/30 flex items-center gap-3 mb-4">
                                    <span class="material-symbols-outlined text-outline"
                                        data-icon="person_search">person_search</span>
                                    <div>
                                        <p class="font-caption text-caption text-on-surface-variant">Peminjam Saat Ini
                                        </p>
                                        <p class="font-label-sm text-label-sm text-on-surface">Budi S. (Estimasi
                                            kembali: 12 Okt)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end mt-4 sm:mt-0">
                                <button
                                    class="px-6 py-2 rounded-xl border border-error text-error hover:bg-error-container/50 font-label-sm text-label-sm transition-colors shadow-sm hover:shadow-md">
                                    Batalkan Reservasi
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Kelola Antrean (Admin View Snippet) -->
            <section>
                <div class="flex items-center justify-between mb-6">
                    <h3 class="font-title-md text-title-md text-on-surface">Kelola Antrean Populer <span
                            class="text-on-surface-variant text-sm font-normal ml-2">(Tampilan Petugas)</span></h3>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-gutter">
                    <!-- Card 2 (Admin Management View) -->
                    <div
                        class="bg-surface-container-lowest rounded-xl p-6 shadow-[0_4px_24px_-4px_rgba(0,0,0,0.05)] border border-outline-variant/20 hover:scale-[1.01] transition-transform duration-200 flex flex-col sm:flex-row gap-6 relative overflow-hidden">
                        <!-- Glassmorphism decorative blob -->
                        <div
                            class="absolute -top-10 -right-10 w-32 h-32 bg-primary-fixed-dim/20 rounded-full blur-2xl">
                        </div>
                        <div
                            class="w-24 h-36 bg-surface-container shrink-0 rounded-lg overflow-hidden relative shadow-sm z-10">
                            <div class="absolute inset-0 bg-gradient-to-tr from-surface-tint/20 to-transparent z-10">
                            </div>
                            <div class="w-full h-full bg-surface-variant flex items-center justify-center"
                                data-alt="A high-quality studio photograph of a history book with a minimalist white cover, resting on a sleek glass surface. The background is a soft, blurred light grey, emphasizing the 'Corporate Modern with Glassmorphism' design language. Soft directional light highlights the texture of the paper, creating subtle depth without harsh contrast. The visual tone is authoritative, clean, and highly professional, suited for an institutional digital library.">
                                <span class="material-symbols-outlined text-4xl text-on-surface-variant opacity-50"
                                    data-icon="history_edu">history_edu</span>
                            </div>
                        </div>
                        <div class="flex-1 flex flex-col justify-between z-10">
                            <div>
                                <div class="flex items-start justify-between gap-4 mb-2">
                                    <div>
                                        <p
                                            class="font-caption text-caption text-secondary font-semibold uppercase tracking-wider mb-1">
                                            Sejarah &amp; Sosial</p>
                                        <h4 class="font-title-md text-title-md text-on-surface leading-tight">Sapiens:
                                            Riwayat Singkat Umat Manusia</h4>
                                    </div>
                                    <div
                                        class="bg-surface-container-high text-on-surface px-3 py-1 rounded-full flex items-center gap-1 shrink-0 border border-outline-variant/30">
                                        <span class="material-symbols-outlined text-[16px]"
                                            data-icon="group">group</span>
                                        <span class="font-label-sm text-label-sm font-bold">5 Antrean</span>
                                    </div>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-4">Oleh: Yuval Noah
                                    Harari</p>
                                <div
                                    class="bg-surface-bright p-3 rounded-lg border border-outline-variant/30 flex items-center justify-between mb-4">
                                    <div class="flex flex-col">
                                        <span class="font-caption text-caption text-on-surface-variant">Buku Telah
                                            Kembali. Antrean #1:</span>
                                        <span class="font-label-sm text-label-sm text-primary font-semibold">Siti
                                            Aminah (ID: MMBR-892)</span>
                                    </div>
                                    <span class="material-symbols-outlined text-success text-emerald-600"
                                        data-icon="check_circle">check_circle</span>
                                </div>
                            </div>
                            <div class="flex justify-end mt-4 sm:mt-0">
                                <button
                                    class="px-6 py-2 rounded-xl bg-primary text-on-primary hover:bg-primary-container font-label-sm text-label-sm transition-colors shadow-sm hover:shadow-md flex items-center gap-2">
                                    <span class="material-symbols-outlined text-[18px]" data-icon="send">send</span>
                                    Beritahu Anggota
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <footer
            class="w-full py-base border-t border-primary-container bg-primary dark:bg-on-background w-full flex flex-col md:flex-row justify-between items-center px-margin-mobile md:px-margin-desktop py-8 flat mt-auto">
            <div class="mb-4 md:mb-0 text-center md:text-left">
                <h4 class="font-title-md text-on-primary mb-1">DiarySumsel</h4>
                <p class="font-caption text-caption text-on-primary/70">© 2024 Dinas Perpustakaan Provinsi Sumatera
                    Selatan</p>
            </div>
            <nav class="flex flex-wrap justify-center md:justify-end gap-6">
                <a class="font-caption text-caption text-primary-fixed/70 hover:text-white hover:underline transition-all"
                    href="#">About</a>
                <a class="font-caption text-caption text-primary-fixed/70 hover:text-white hover:underline transition-all"
                    href="#">Privacy Policy</a>
                <a class="font-caption text-caption text-primary-fixed/70 hover:text-white hover:underline transition-all"
                    href="#">Contact Support</a>
                <a class="font-caption text-caption text-primary-fixed/70 hover:text-white hover:underline transition-all"
                    href="#">Digital Collections</a>
            </nav>
        </footer>
    </div>
    <!-- BottomNavBar (Mobile) -->
    <nav
        class="md:hidden flex justify-around items-center h-16 px-4 pb-safe bg-white/95 dark:bg-primary/95 backdrop-blur-lg fixed bottom-0 w-full rounded-t-xl z-50 shadow-[0_-4px_12px_rgba(0,0,0,0.05)] border-t border-outline-variant/20">
        <!-- Home -->
        <a class="text-on-surface-variant dark:text-on-tertiary-container flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity active:scale-90 transition-transform"
            href="#">
            <span class="material-symbols-outlined" data-icon="home">home</span>
            <span class="font-caption text-caption mt-1">Home</span>
        </a>
        <!-- Search -->
        <a class="text-on-surface-variant dark:text-on-tertiary-container flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity active:scale-90 transition-transform"
            href="#">
            <span class="material-symbols-outlined" data-icon="search">search</span>
            <span class="font-caption text-caption mt-1">Search</span>
        </a>
        <!-- Library (ACTIVE based on context) -->
        <a class="bg-secondary-container dark:bg-secondary text-on-secondary-container dark:text-on-secondary rounded-full px-4 py-1 flex flex-col items-center active:scale-90 transition-transform"
            href="#">
            <span class="material-symbols-outlined icon-fill" data-icon="local_library">local_library</span>
            <span class="font-caption text-caption mt-1 font-semibold">Library</span>
        </a>
        <!-- Profile -->
        <a class="text-on-surface-variant dark:text-on-tertiary-container flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity active:scale-90 transition-transform"
            href="#">
            <span class="material-symbols-outlined" data-icon="person">person</span>
            <span class="font-caption text-caption mt-1">Profile</span>
        </a>
    </nav>
</body>

</html>
