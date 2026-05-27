<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>DiarySumsel E-Library</title>
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind Setup -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
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
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    spacing: {
                        "base": "8px",
                        "margin-mobile": "16px",
                        "margin-tablet": "24px",
                        "container-max": "1440px",
                        "gutter": "24px",
                        "margin-desktop": "40px"
                    },
                    fontFamily: {
                        "headline-lg-mobile": ["Inter"],
                        "title-md": ["Inter"],
                        "label-sm": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-lg": ["Inter"],
                        "display-lg": ["Inter"],
                        "caption": ["Inter"],
                        "body-md": ["Inter"]
                    },
                    fontSize: {
                        "headline-lg-mobile": ["28px", {
                            lineHeight: "36px",
                            fontWeight: "600"
                        }],
                        "title-md": ["20px", {
                            lineHeight: "28px",
                            fontWeight: "600"
                        }],
                        "label-sm": ["14px", {
                            lineHeight: "20px",
                            letterSpacing: "0.01em",
                            fontWeight: "500"
                        }],
                        "body-lg": ["18px", {
                            lineHeight: "28px",
                            fontWeight: "400"
                        }],
                        "headline-lg": ["32px", {
                            lineHeight: "40px",
                            letterSpacing: "-0.01em",
                            fontWeight: "600"
                        }],
                        "display-lg": ["48px", {
                            lineHeight: "60px",
                            letterSpacing: "-0.02em",
                            fontWeight: "700"
                        }],
                        "caption": ["12px", {
                            lineHeight: "16px",
                            fontWeight: "400"
                        }],
                        "body-md": ["16px", {
                            lineHeight: "24px",
                            fontWeight: "400"
                        }]
                    }
                }
            }
        }
    </script>
    <style>
        .glass-panel {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
        }

        .text-gradient {
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Hide scrollbar for horizontal scrolling areas but keep functionality */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-background text-on-surface font-body-md text-body-md antialiased pb-20 md:pb-0">
    <!-- TopAppBar -->
    <header
        class="bg-white/90 dark:bg-primary/90 backdrop-blur-md docked full-width top-0 z-50 border-b border-outline-variant/30 dark:border-outline/20 shadow-sm sticky w-full flex items-center justify-between px-margin-mobile md:px-margin-desktop h-16">
        <div class="flex items-center gap-base">
            <span class="material-symbols-outlined text-primary dark:text-primary-fixed"
                style="font-variation-settings: 'FILL' 0;">menu_book</span>
            <span
                class="text-headline-lg font-headline-lg text-primary dark:text-primary-fixed tracking-tight">DiarySumsel</span>
        </div>
        <!-- Desktop Navigation Actions (Simulated from Shell Context) -->
        <nav class="hidden md:flex items-center gap-margin-tablet">
            <a class="font-label-sm text-label-sm text-secondary dark:text-secondary-fixed font-bold border-b-2 border-secondary px-2 py-4"
                href="/landing-page">Home</a>
            <a class="font-label-sm text-label-sm text-on-surface-variant dark:text-on-tertiary-container hover:text-primary hover:bg-surface-container-low dark:hover:bg-tertiary-container transition-all duration-200 px-3 py-2 rounded-lg"
                href="/public-opac">Catalog</a>
            <a class="font-label-sm text-label-sm text-on-surface-variant dark:text-on-tertiary-container hover:text-primary hover:bg-surface-container-low dark:hover:bg-tertiary-container transition-all duration-200 px-3 py-2 rounded-lg"
                href="/dashboard-pengguna">My Books</a>
        </nav>
        <div class="flex items-center">
            <img alt="South Sumatra Library Logo"
                class="w-8 h-8 rounded-full shadow-sm scale-95 active:scale-90 transition-transform cursor-pointer"
                data-alt="A small, professional circular avatar representing a corporate or government library logo. The background is a deep navy blue, with a crisp white monogram in a modern sans-serif font. The overall aesthetic is clean, minimal, and authoritative, suitable for a digital SaaS platform header."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuApu5xdj41uOuErjYJRT08mup4IxrF9ygewEzQX0Jf_r4D10-1s2Q-tCOpWLaXifvr9TVu6qR6U1qFIzmWvzalGHi6SAxemF-6gBEaUUC5rsHP74uCCG22QTAkO4e0F9kWMQvaLktDn6ps3_6t0Y3ZhJ_WX2GsmQzEURJsoxo73N6CRNk1WP5R1qGB75GcSi8BnShxVouCmvmxdB2UzqAYJHwuynjMVYMbySsgSNnRkL806HwjihnHXLDOY_z7fPIiqOy-Yi5VaEvw" />
        </div>
    </header>
    <main class="w-full max-w-container-max mx-auto">
        <!-- Hero Section with Search -->
        <section
            class="relative px-margin-mobile md:px-margin-desktop pt-16 pb-24 md:pt-24 md:pb-32 flex flex-col items-center justify-center text-center overflow-hidden">
            <!-- Decorative background element -->
            <div class="absolute inset-0 z-0 opacity-40 pointer-events-none flex justify-center items-center">
                <div
                    class="w-[800px] h-[800px] bg-gradient-to-br from-surface-tint/20 to-transparent rounded-full blur-3xl">
                </div>
            </div>
            <div class="relative z-10 max-w-3xl flex flex-col items-center gap-6">
                <span
                    class="font-label-sm text-label-sm px-4 py-1.5 rounded-full bg-surface-container border border-outline-variant/50 text-primary-container">
                    Perpustakaan Provinsi Sumatera Selatan
                </span>
                <h1 class="font-display-lg text-display-lg text-primary tracking-tight">
                    Gerbang Literasi Digital <br />
                    <span
                        class="text-secondary-container bg-gradient-to-r from-secondary-container to-secondary text-gradient">Sumatera
                        Selatan</span>
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    Akses ribuan koleksi buku digital, jurnal, dan literatur budaya lokal kapan saja, di mana saja.
                    Jelajahi pengetahuan tanpa batas dalam satu genggaman.
                </p>
                <!-- Search Bar Container (Glassmorphism Level 2) -->
                <div
                    class="w-full max-w-2xl mt-8 glass-panel p-2 rounded-full shadow-[0_8px_32px_rgba(0,30,64,0.08)] border border-white/50 flex items-center relative focus-within:ring-2 ring-primary/20 transition-all">
                    <div class="pl-4 pr-2 text-outline flex items-center justify-center">
                        <span class="material-symbols-outlined">search</span>
                    </div>
                    <input
                        class="flex-1 bg-transparent border-none focus:ring-0 font-body-md text-body-md text-on-surface placeholder:text-outline-variant outline-none px-2 h-12"
                        placeholder="Cari judul buku, penulis, atau ISBN..." type="text" />
                    <button
                        class="bg-primary text-on-primary font-label-sm text-label-sm px-6 py-3 rounded-full hover:bg-primary-container transition-colors shadow-sm whitespace-nowrap">
                        Cari Buku
                    </button>
                </div>
                <!-- Quick Tags -->
                <div class="flex flex-wrap items-center justify-center gap-2 mt-4">
                    <span class="font-caption text-caption text-outline">Populer:</span>
                    <a class="font-caption text-caption px-3 py-1 bg-surface-container-low rounded-full text-on-surface-variant hover:bg-surface-variant transition-colors"
                        href="#">Sejarah Palembang</a>
                    <a class="font-caption text-caption px-3 py-1 bg-surface-container-low rounded-full text-on-surface-variant hover:bg-surface-variant transition-colors"
                        href="#">Teknologi Terapan</a>
                    <a class="font-caption text-caption px-3 py-1 bg-surface-container-low rounded-full text-on-surface-variant hover:bg-surface-variant transition-colors"
                        href="#">Fiksi Anak</a>
                </div>
            </div>
        </section>
        <section class="px-6 md:px-10 py-16">

            <div class="flex justify-between items-center mb-8">

                <div>

                    <h2 class="text-3xl font-bold text-primary">
                        Koleksi Terbaru
                    </h2>

                    <p class="text-gray-500">
                        Literatur pilihan yang baru saja ditambahkan
                    </p>

                </div>

                <a href="/public-opac" class="text-blue-600 hover:underline">

                    Lihat Semua →

                </a>

            </div>


            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">

                <a href="/detail-buku" class="group">

                    <div class="overflow-hidden rounded-xl shadow-lg">

                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBNUrV4pn3GsAkoO0D6Yzoc5ttveLC3DZtrJlxcwUy0cttbczweDtQ2IS_z5danRUli62kFmAR1DKIHryCJcdVqcX33TOg9n5KuMrAjvOqlm4mdYywvfha_tSEooYA9inTEoNpGGDeIvDEAsog1fekje7r-YmRxQtcJer2_9L27fzdXgl2uhwYTPzD-IwZZ28BTBt1pPF4-FSvD7pclCJ9ADqH13D-cureMJQAp0fis0sg_ZKbtgcXG7DqdR2esWqjXIFld17sxgKg"
                            class="w-full h-72 object-cover group-hover:scale-105 duration-300">

                    </div>

                    <h3 class="mt-3 font-semibold">
                        Budaya Maritim Sriwijaya
                    </h3>

                    <p class="text-gray-500">
                        Dr Ahmad Wijaya
                    </p>

                </a>


                <a href="/detail-buku" class="group">

                    <div class="overflow-hidden rounded-xl shadow-lg">

                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBNUrV4pn3GsAkoO0D6Yzoc5ttveLC3DZtrJlxcwUy0cttbczweDtQ2IS_z5danRUli62kFmAR1DKIHryCJcdVqcX33TOg9n5KuMrAjvOqlm4mdYywvfha_tSEooYA9inTEoNpGGDeIvDEAsog1fekje7r-YmRxQtcJer2_9L27fzdXgl2uhwYTPzD-IwZZ28BTBt1pPF4-FSvD7pclCJ9ADqH13D-cureMJQAp0fis0sg_ZKbtgcXG7DqdR2esWqjXIFld17sxgKg"
                            class="w-full h-72 object-cover group-hover:scale-105 duration-300">

                    </div>

                    <h3 class="mt-3 font-semibold">
                        Pengantar Sains Data
                    </h3>

                    <p class="text-gray-500">
                        Tim Peneliti Unsri
                    </p>

                </a>


                <a href="/detail-buku" class="group">

                    <div class="overflow-hidden rounded-xl shadow-lg">

                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBNUrV4pn3GsAkoO0D6Yzoc5ttveLC3DZtrJlxcwUy0cttbczweDtQ2IS_z5danRUli62kFmAR1DKIHryCJcdVqcX33TOg9n5KuMrAjvOqlm4mdYywvfha_tSEooYA9inTEoNpGGDeIvDEAsog1fekje7r-YmRxQtcJer2_9L27fzdXgl2uhwYTPzD-IwZZ28BTBt1pPF4-FSvD7pclCJ9ADqH13D-cureMJQAp0fis0sg_ZKbtgcXG7DqdR2esWqjXIFld17sxgKg"
                            class="w-full h-72 object-cover group-hover:scale-105 duration-300">

                    </div>

                    <h3 class="mt-3 font-semibold">
                        Senja di Sungai Musi
                    </h3>

                    <p class="text-gray-500">
                        Lestari P.
                    </p>

                </a>


                <a href="/detail-buku" class="group">

                    <div class="overflow-hidden rounded-xl shadow-lg">

                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBNUrV4pn3GsAkoO0D6Yzoc5ttveLC3DZtrJlxcwUy0cttbczweDtQ2IS_z5danRUli62kFmAR1DKIHryCJcdVqcX33TOg9n5KuMrAjvOqlm4mdYywvfha_tSEooYA9inTEoNpGGDeIvDEAsog1fekje7r-YmRxQtcJer2_9L27fzdXgl2uhwYTPzD-IwZZ28BTBt1pPF4-FSvD7pclCJ9ADqH13D-cureMJQAp0fis0sg_ZKbtgcXG7DqdR2esWqjXIFld17sxgKg"
                            class="w-full h-72 object-cover group-hover:scale-105 duration-300">

                    </div>

                    <h3 class="mt-3 font-semibold">
                        Ekonomi Digital 2024
                    </h3>

                    <p class="text-gray-500">
                        Budi Santoso
                    </p>

                </a>

            </div>

        </section>
    </main>
        <!-- Footer -->
        <footer class="bg-primary text-white mt-20">

            <div
                class="max-w-container-max mx-auto
px-6 md:px-10
py-8
flex flex-col md:flex-row
justify-between
items-center
gap-6">

                <div>

                    <h3 class="font-bold text-lg">

                        DiarySumsel

                    </h3>

                    <p class="text-sm text-gray-300">

                        © 2024 Dinas Perpustakaan
                        Provinsi Sumatera Selatan

                    </p>

                </div>


                <nav class="flex flex-wrap
justify-center
gap-6
text-sm">

                    <a href="/about" class="hover:text-blue-300">

                        About

                    </a>

                    <a href="/privacy" class="hover:text-blue-300">

                        Privacy Policy

                    </a>

                    <a href="/support" class="hover:text-blue-300">

                        Contact Support

                    </a>

                    <a href="/public-opac" class="hover:text-blue-300">

                        Digital Collections

                    </a>

                </nav>

            </div>

        </footer>
        <!-- BottomNavBar (Mobile Only) -->
        <nav
            class="bg-white/95 dark:bg-primary/95 backdrop-blur-lg fixed bottom-0 w-full rounded-t-xl z-50 border-t border-outline-variant/20 shadow-[0_-4px_12px_rgba(0,0,0,0.05)] md:hidden flex justify-around items-center h-16 px-4 pb-safe">
            <!-- Active Item: Home -->
            <a class="bg-secondary-container dark:bg-secondary text-on-secondary-container dark:text-on-secondary rounded-full px-4 py-1 flex flex-col items-center active:scale-90 transition-transform"
                href="#">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">home</span>
                <span class="font-caption text-caption mt-0.5">Home</span>
            </a>
            <!-- Inactive Items -->
            <a class="text-on-surface-variant dark:text-on-tertiary-container flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity active:scale-90 transition-transform"
                href="#">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">search</span>
                <span class="font-caption text-caption mt-0.5">Search</span>
            </a>
            <a class="text-on-surface-variant dark:text-on-tertiary-container flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity active:scale-90 transition-transform"
                href="#">
                <span class="material-symbols-outlined"
                    style="font-variation-settings: 'FILL' 0;">local_library</span>
                <span class="font-caption text-caption mt-0.5">Library</span>
            </a>
            <a class="text-on-surface-variant dark:text-on-tertiary-container flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity active:scale-90 transition-transform"
                href="#">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">person</span>
                <span class="font-caption text-caption mt-0.5">Profile</span>
            </a>
        </nav>
</body>

</html>
