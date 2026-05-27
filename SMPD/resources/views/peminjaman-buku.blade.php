<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Form Peminjaman Buku - DiarySumsel</title>
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
            font-family: 'Inter', sans-serif;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-background text-on-background min-h-screen flex flex-col md:flex-row">
    <!-- NavigationDrawer (Hidden on Mobile, Visible on Desktop) -->
    <nav
        class="bg-white/90 dark:bg-primary/90 backdrop-blur-xl shadow-2xl dark:shadow-none fixed left-0 top-0 h-full w-[280px] rounded-r-xl translate-x-0 transition-transform duration-300 hidden md:flex flex-col p-base gap-2 z-40">
        <div class="flex items-center gap-4 p-4 mb-4">
            <div class="w-10 h-10 rounded-full bg-surface-variant flex items-center justify-center overflow-hidden">
                <span class="material-symbols-outlined text-primary">person</span>
            </div>
            <div class="flex flex-col">
                <span class="font-label-sm text-label-sm text-primary dark:text-primary-fixed-dim">Sumsel Member</span>
                <span class="font-caption text-caption text-on-surface-variant">Platinum Member</span>
            </div>
        </div>
        <a class="text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors flex items-center gap-3 p-3 rounded-lg"
            href="#">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="font-label-sm text-label-sm">Dashboard</span>
        </a>
        <a class="bg-surface-container-highest dark:bg-primary-container text-primary dark:text-primary-fixed border-l-4 border-secondary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors flex items-center gap-3 p-3 rounded-lg"
            href="#">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">library_books</span>
            <span class="font-label-sm text-label-sm">Catalog</span>
        </a>
        <a class="text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors flex items-center gap-3 p-3 rounded-lg"
            href="#">
            <span class="material-symbols-outlined">auto_stories</span>
            <span class="font-label-sm text-label-sm">My Books</span>
        </a>
        <a class="text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors flex items-center gap-3 p-3 rounded-lg"
            href="#">
            <span class="material-symbols-outlined">qr_code_2</span>
            <span class="font-label-sm text-label-sm">Member Card</span>
        </a>
        <a class="text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors flex items-center gap-3 p-3 rounded-lg"
            href="#">
            <span class="material-symbols-outlined">monitoring</span>
            <span class="font-label-sm text-label-sm">Stats</span>
        </a>
        <a class="text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors flex items-center gap-3 p-3 rounded-lg mt-auto"
            href="#">
            <span class="material-symbols-outlined">settings</span>
            <span class="font-label-sm text-label-sm">Settings</span>
        </a>
    </nav>
    <!-- Main Content Canvas -->
    <div class="flex-1 flex flex-col md:ml-[280px] w-full min-h-screen pb-20 md:pb-0">
        <!-- TopAppBar -->
        <header
            class="bg-white/90 dark:bg-primary/90 backdrop-blur-md border-b border-outline-variant/30 dark:border-outline/20 shadow-sm sticky top-0 w-full flex items-center justify-between px-margin-mobile md:px-margin-desktop h-16 z-30">
            <div class="flex items-center gap-4">
                <button
                    class="md:hidden p-2 text-primary hover:bg-surface-container-low transition-all duration-200 rounded-full scale-95 active:scale-90">
                    <span class="material-symbols-outlined">arrow_back</span>
                </button>
                <h1 class="text-headline-lg font-headline-lg text-primary dark:text-primary-fixed tracking-tight">Form
                    Peminjaman</h1>
            </div>
            <div
                class="w-8 h-8 rounded-full bg-surface-variant flex items-center justify-center overflow-hidden border border-outline-variant/50">
                <span class="material-symbols-outlined text-sm text-primary">person</span>
            </div>
        </header>
        <!-- Peminjaman Content -->
        <main
            class="flex-1 p-margin-mobile md:p-margin-desktop max-w-container-max mx-auto w-full flex flex-col gap-gutter">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
                <!-- Left Column: Scanner & Form -->
                <div class="lg:col-span-7 flex flex-col gap-6">
                    <!-- Scanner UI -->
                    <div
                        class="bg-white rounded-xl shadow-[0_4px_12px_rgba(0,30,64,0.1)] border border-white/40 overflow-hidden relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-white/60 to-white/10 backdrop-blur-sm pointer-events-none z-10">
                        </div>
                        <div
                            class="relative z-20 p-6 flex flex-col items-center justify-center min-h-[300px] border-2 border-dashed border-primary/30 rounded-lg m-4 bg-surface-bright/50">
                            <div
                                class="absolute top-1/2 left-0 w-full h-0.5 bg-secondary-container shadow-[0_0_15px_rgba(253,182,75,0.8)] animate-pulse">
                            </div>
                            <div class="relative z-30 flex flex-col items-center gap-4 text-center">
                                <div
                                    class="w-16 h-16 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center shadow-lg">
                                    <span class="material-symbols-outlined text-3xl">barcode_scanner</span>
                                </div>
                                <div>
                                    <h2 class="font-title-md text-title-md text-primary">Scan Barcode Buku</h2>
                                    <p class="font-body-md text-body-md text-on-surface-variant mt-1">Arahkan barcode
                                        buku ke area scanner atau masukkan kode secara manual di bawah.</p>
                                </div>
                            </div>
                            <!-- Scanning frame corners -->
                            <div
                                class="absolute top-8 left-8 w-8 h-8 border-t-4 border-l-4 border-primary rounded-tl-lg">
                            </div>
                            <div
                                class="absolute top-8 right-8 w-8 h-8 border-t-4 border-r-4 border-primary rounded-tr-lg">
                            </div>
                            <div
                                class="absolute bottom-8 left-8 w-8 h-8 border-b-4 border-l-4 border-primary rounded-bl-lg">
                            </div>
                            <div
                                class="absolute bottom-8 right-8 w-8 h-8 border-b-4 border-r-4 border-primary rounded-br-lg">
                            </div>
                        </div>
                    </div>
                    <!-- Input Form -->
                    <div class="bg-white rounded-xl shadow-[0_4px_12px_rgba(0,30,64,0.1)] p-6 flex flex-col gap-6">
                        <h3 class="font-title-md text-title-md text-primary border-b border-surface-variant pb-2">Data
                            Peminjaman</h3>
                        <div class="flex flex-col gap-4">
                            <div class="flex flex-col gap-1">
                                <label class="font-label-sm text-label-sm text-on-surface" for="book-id">Kode Buku /
                                    Barcode</label>
                                <div class="relative">
                                    <span
                                        class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">menu_book</span>
                                    <input
                                        class="w-full pl-10 pr-4 py-3 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors"
                                        id="book-id" placeholder="Contoh: BKU-2023-0891" type="text"
                                        value="BKU-2023-0891" />
                                </div>
                            </div>
                            <div class="flex flex-col gap-1">
                                <label class="font-label-sm text-label-sm text-on-surface" for="member-id">ID
                                    Anggota</label>
                                <div class="relative flex gap-2">
                                    <div class="relative flex-1">
                                        <span
                                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">badge</span>
                                        <input
                                            class="w-full pl-10 pr-4 py-3 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors"
                                            id="member-id" placeholder="Scan Kartu atau Ketik ID" type="text" />
                                    </div>
                                    <button
                                        class="bg-surface-variant text-on-surface hover:bg-surface-container-highest px-4 rounded-lg transition-colors flex items-center justify-center border border-outline-variant">
                                        <span class="material-symbols-outlined">qr_code_scanner</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Column: Scanned Item Details -->
                <div class="lg:col-span-5">
                    <div
                        class="bg-white rounded-xl shadow-[0_4px_12px_rgba(0,30,64,0.1)] flex flex-col h-full overflow-hidden border border-surface-variant">
                        <div class="bg-primary p-4 text-on-primary flex items-center gap-3">
                            <span class="material-symbols-outlined">info</span>
                            <h3 class="font-title-md text-title-md">Detail Buku</h3>
                        </div>
                        <div class="p-6 flex flex-col gap-6 flex-1">
                            <!-- Status -->
                            <div
                                class="flex items-center justify-between bg-surface-container-low p-3 rounded-lg border border-surface-variant">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Status
                                    Ketersediaan</span>
                                <span
                                    class="bg-[#e8f5e9] text-[#2e7d32] px-3 py-1 rounded-full font-label-sm text-label-sm border border-[#c8e6c9] flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[16px]">check_circle</span>
                                    Tersedia
                                </span>
                            </div>
                            <!-- Book Info -->
                            <div class="flex gap-4 items-start">
                                <div
                                    class="w-24 h-32 bg-surface-variant rounded-md border border-outline-variant overflow-hidden shrink-0 shadow-sm relative">
                                    <img alt="Book Cover" class="w-full h-full object-cover"
                                        data-alt="A close-up shot of a pristine, modern hardcover book lying on a clean white surface. The book features a minimalist geometric cover design in deep blue and gold. Soft, diffused lighting creates gentle shadows, emphasizing the texture of the paper and the high-end, professional aesthetic typical of a corporate library environment."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCMGeRvCEmsdXmpIyXKOjMZIefm6hDhkFlw_hNDb5kEW3t6adZds4cZkFBLeptujo5FFTtoB5bKNDTNwJ32gMu2j2GKn7Rjx77AkiiLCfWHftnyck5mK8IQaiX--ElnkrM4VwDTmfNfq9S5Azb97PJglLgxBTgwDDRlbyMr5Uik5kiIx4ZEce6BDt4UmU-97uWt6j_bibzkWc4aw6UHaS-aQOYV1SRo_Q9Z_PFFmCrDbBW9QaU0NQFYtttXarvFofn3L03UcfUioig" />
                                </div>
                                <div class="flex flex-col gap-2">
                                    <h4 class="font-title-md text-title-md text-primary leading-tight">Sejarah
                                        Perkembangan Sriwijaya di Nusantara</h4>
                                    <p class="font-body-md text-body-md text-on-surface-variant">Oleh: Dr. Ahmad
                                        Dahlan, M.Hum.</p>
                                    <div class="mt-2 flex flex-col gap-1">
                                        <div class="flex items-center gap-2 font-caption text-caption text-outline">
                                            <span class="material-symbols-outlined text-[16px]">category</span>
                                            Sejarah / Lokal
                                        </div>
                                        <div class="flex items-center gap-2 font-caption text-caption text-outline">
                                            <span class="material-symbols-outlined text-[16px]">tag</span>
                                            ISBN: 978-602-1234-56-7
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="border-surface-variant" />
                            <!-- Loan Terms -->
                            <div class="flex flex-col gap-3">
                                <h5 class="font-label-sm text-label-sm text-primary uppercase tracking-wider">Ketentuan
                                    Peminjaman</h5>
                                <div class="grid grid-cols-2 gap-4">
                                    <div
                                        class="bg-surface p-3 rounded-lg border border-surface-variant flex flex-col gap-1">
                                        <span class="font-caption text-caption text-on-surface-variant">Tanggal
                                            Pinjam</span>
                                        <span class="font-body-md text-body-md text-on-surface font-medium">24 Okt
                                            2024</span>
                                    </div>
                                    <div
                                        class="bg-surface-container p-3 rounded-lg border border-primary-fixed-dim flex flex-col gap-1">
                                        <span class="font-caption text-caption text-on-primary-container">Tenggat
                                            Kembali</span>
                                        <span class="font-body-md text-body-md text-primary font-bold">07 Nov
                                            2024</span>
                                    </div>
                                </div>
                                <p class="font-caption text-caption text-outline mt-1 flex items-start gap-1">
                                    <span class="material-symbols-outlined text-[14px]">info</span>
                                    Durasi peminjaman maksimal 14 hari. Denda berlaku untuk keterlambatan.
                                </p>
                            </div>
                        </div>
                        <!-- Action Button -->
                        <div class="p-6 bg-surface-bright border-t border-surface-variant mt-auto">
                            <button
                                class="w-full bg-primary hover:bg-primary-container text-on-primary font-label-sm text-label-sm py-4 px-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-200 flex items-center justify-center gap-2 transform active:scale-[0.98]">
                                <span class="material-symbols-outlined">how_to_reg</span>
                                Pinjam Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer (Desktop Only for simpler view) -->
        <footer
            class="w-full flex flex-col md:flex-row justify-between items-center px-margin-mobile md:px-margin-desktop py-8 bg-primary dark:bg-on-background text-on-primary dark:text-on-primary-fixed border-t border-primary-container hidden md:flex mt-12">
            <div class="font-title-md text-on-primary mb-4 md:mb-0">DiarySumsel</div>
            <div class="font-caption text-caption text-primary-fixed/70">© 2024 Dinas Perpustakaan Provinsi Sumatera
                Selatan</div>
        </footer>
    </div>
</body>

</html>
