<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Katalog Publik - DiarySumsel</title>
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
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-background text-on-background min-h-screen pb-24 md:pb-0 flex flex-col md:flex-row">
    <!-- TopAppBar -->
    <header
        class="bg-white/90 dark:bg-primary/90 backdrop-blur-md docked full-width top-0 z-50 border-b border-outline-variant/30 dark:border-outline/20 shadow-sm sticky w-full flex items-center justify-between px-margin-mobile md:px-margin-desktop h-16 md:hidden">
        <div class="flex items-center gap-4">
            <span class="material-symbols-outlined text-primary dark:text-primary-fixed">menu_book</span>
            <h1 class="text-headline-lg font-headline-lg text-primary dark:text-primary-fixed tracking-tight">
                DiarySumsel</h1>
        </div>
        <div class="w-8 h-8 rounded-full bg-primary-container overflow-hidden">
            <img alt="South Sumatra Library Logo" class="w-full h-full object-cover"
                data-alt="A clean, professional portrait photo of a user avatar smiling slightly. The background is a soft, muted grey to emphasize the corporate modern aesthetic. Lighting is bright and even, typical of a professional SaaS platform. Colors are subtle and natural, aligning with the light mode theme."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmIWe09SA9LLmZui4JV9FSxiz0iTKntgAhnf-iteIynbxASQy6ROkHbQGZY3-7of16U4oASCyo5ZU_IlPALvF-ZWUgQCfAhInd7D2wJb_adyMbxAlBvG5eJxW09mTAUM8SNYUEszh6RIFqibOXEq_ZWxCHWi6UFLr0pJHVU9SimbTxu5ETBFAlotKP47_d4XB9rR3YlQGM2CyASRCdLSdG6fq6TPFw4vOji5Bxfh5vXA33xQ22143YOKbicjaYbPKk-_AIg63_1-M" />
        </div>
    </header>
    <!-- NavigationDrawer (Desktop) -->
    <nav
        class="hidden md:flex flex-col p-base gap-2 bg-white/90 dark:bg-primary/90 backdrop-blur-xl shadow-xl fixed left-0 top-0 h-full w-[280px] rounded-r-xl z-40 translate-x-0 transition-transform duration-300">
        <div class="flex items-center gap-4 p-4 mb-4">
            <div class="w-12 h-12 rounded-full bg-primary-container overflow-hidden">
                <img alt="User Profile" class="w-full h-full object-cover"
                    data-alt="A clean, professional portrait photo of a user avatar smiling slightly. The background is a soft, muted grey to emphasize the corporate modern aesthetic. Lighting is bright and even, typical of a professional SaaS platform. Colors are subtle and natural, aligning with the light mode theme."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmvT6qXknn3Slcibv3ObnYYkA8ykBiTW8cuJCtEzdpxik-YOTcbi1Y3DuN9erSENwEbs_0aR86h7L78nNYdZKRJl-NAV9qEwGkUPYJObw5UlqJbfdwF2Zfs8HB-7ImMRuzpTNqqZZdmbZ1bQsx9cZYAUsGVwx5xU-iGAuDfQftX5m3rW8a_F7ds1GKbsiuPwBlDVIPdQDHbNHyAJrKF2NKUCqKynDj31iVZu9bHBo9wX27PX7giMZETL8hLt7myv_b8d32AoxlOKQ" />
            </div>
            <div>
                <h2 class="font-headline-lg text-primary dark:text-primary-fixed text-lg">Sumsel Member</h2>
                <p class="font-label-sm text-label-sm text-on-surface-variant">Platinum Member</p>
            </div>
        </div>
        <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors"
            href="#">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="font-label-sm text-label-sm">Dashboard</span>
        </a>
        <a class="flex items-center gap-4 px-4 py-3 rounded-lg bg-surface-container-highest dark:bg-primary-container text-primary dark:text-primary-fixed border-l-4 border-secondary-container"
            href="#">
            <span class="material-symbols-outlined">library_books</span>
            <span class="font-label-sm text-label-sm">Catalog</span>
        </a>
        <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors"
            href="#">
            <span class="material-symbols-outlined">auto_stories</span>
            <span class="font-label-sm text-label-sm">My Books</span>
        </a>
        <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors"
            href="#">
            <span class="material-symbols-outlined">qr_code_2</span>
            <span class="font-label-sm text-label-sm">Member Card</span>
        </a>
        <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors"
            href="#">
            <span class="material-symbols-outlined">monitoring</span>
            <span class="font-label-sm text-label-sm">Stats</span>
        </a>
        <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors mt-auto"
            href="#">
            <span class="material-symbols-outlined">settings</span>
            <span class="font-label-sm text-label-sm">Settings</span>
        </a>
    </nav>
    <!-- Main Content Canvas -->
    <main
        class="flex-1 w-full max-w-container-max mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin-desktop py-8 md:pl-[304px]">
        <!-- Search Hero -->
        <section class="mb-12">
            <div
                class="bg-surface-container-low rounded-2xl p-8 relative overflow-hidden shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20">
                <div class="relative z-10 max-w-2xl">
                    <h2 class="font-display-lg text-display-lg text-primary mb-4">Eksplorasi Dunia Pengetahuan</h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant mb-8">Temukan jutaan koleksi buku,
                        jurnal, dan karya ilmiah di Perpustakaan Sumatera Selatan.</p>
                    <div
                        class="flex flex-col sm:flex-row gap-4 bg-white p-2 rounded-xl shadow-lg border border-outline-variant/30">
                        <div class="flex-1 flex items-center px-4">
                            <span class="material-symbols-outlined text-outline">search</span>
                            <input
                                class="w-full bg-transparent border-none focus:ring-0 font-body-md text-body-md text-on-surface placeholder:text-outline-variant py-3 px-3"
                                placeholder="Cari judul, penulis, atau ISBN..." type="text" />
                        </div>
                        <button
                            class="bg-primary text-on-primary px-6 py-3 rounded-lg font-label-sm text-label-sm hover:shadow-md transition-shadow flex items-center justify-center gap-2">
                            <span>Cari</span>
                        </button>
                    </div>
                    <div class="flex flex-wrap gap-2 mt-4">
                        <span class="font-caption text-caption text-on-surface-variant py-1">Pencarian Populer:</span>
                        <a class="bg-surface-variant text-on-surface px-3 py-1 rounded-full font-caption text-caption hover:bg-surface-dim transition-colors"
                            href="#">Sejarah Palembang</a>
                        <a class="bg-surface-variant text-on-surface px-3 py-1 rounded-full font-caption text-caption hover:bg-surface-dim transition-colors"
                            href="#">Teknologi Informasi</a>
                        <a class="bg-surface-variant text-on-surface px-3 py-1 rounded-full font-caption text-caption hover:bg-surface-dim transition-colors"
                            href="#">Sastra Anak</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main Layout Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-gutter">
            <!-- Sidebar Filters -->
            <aside class="lg:col-span-1 hidden lg:block">
                <div
                    class="bg-white rounded-xl p-6 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 sticky top-24">
                    <h3 class="font-title-md text-title-md text-primary mb-6 flex items-center gap-2">
                        <span class="material-symbols-outlined">filter_alt</span> Filter
                    </h3>
                    <div class="space-y-6">
                        <!-- Kategori -->
                        <div>
                            <h4 class="font-label-sm text-label-sm text-on-surface font-semibold mb-3">Kategori</h4>
                            <div class="space-y-2">
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input class="rounded border-outline text-primary focus:ring-primary h-4 w-4"
                                        type="checkbox" />
                                    <span
                                        class="font-body-md text-body-md text-on-surface-variant group-hover:text-primary transition-colors">Fiksi
                                        (120)</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input class="rounded border-outline text-primary focus:ring-primary h-4 w-4"
                                        type="checkbox" />
                                    <span
                                        class="font-body-md text-body-md text-on-surface-variant group-hover:text-primary transition-colors">Non-Fiksi
                                        (345)</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input class="rounded border-outline text-primary focus:ring-primary h-4 w-4"
                                        type="checkbox" />
                                    <span
                                        class="font-body-md text-body-md text-on-surface-variant group-hover:text-primary transition-colors">Sains
                                        &amp; Teknologi (89)</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input class="rounded border-outline text-primary focus:ring-primary h-4 w-4"
                                        type="checkbox" />
                                    <span
                                        class="font-body-md text-body-md text-on-surface-variant group-hover:text-primary transition-colors">Sejarah
                                        (56)</span>
                                </label>
                            </div>
                        </div>
                        <!-- Ketersediaan -->
                        <div>
                            <h4 class="font-label-sm text-label-sm text-on-surface font-semibold mb-3">Ketersediaan</h4>
                            <div class="space-y-2">
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input class="border-outline text-primary focus:ring-primary h-4 w-4"
                                        name="availability" type="radio" />
                                    <span
                                        class="font-body-md text-body-md text-on-surface-variant group-hover:text-primary transition-colors">Semua</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input checked=""
                                        class="border-outline text-primary focus:ring-primary h-4 w-4"
                                        name="availability" type="radio" />
                                    <span
                                        class="font-body-md text-body-md text-on-surface-variant group-hover:text-primary transition-colors">Tersedia</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- Book Grid -->
            <div class="lg:col-span-3 space-y-8">
                <!-- Section: Trending -->
                <section>
                    <div class="flex justify-between items-end mb-6">
                        <h3 class="font-headline-lg-mobile text-headline-lg-mobile text-primary">Trending Minggu Ini
                        </h3>
                        <a class="font-label-sm text-label-sm text-primary hover:underline flex items-center gap-1"
                            href="#">Lihat Semua <span
                                class="material-symbols-outlined text-[18px]">arrow_forward</span></a>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-6">
                        <!-- Book Card 1 -->
                        <div
                            class="bg-white rounded-xl overflow-hidden shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 hover:scale-[1.02] hover:shadow-lg transition-all duration-200 group">
                            <div class="relative aspect-[2/3] overflow-hidden bg-surface-container">
                                <img alt="Book Cover"
                                    class="w-full h-full object-cover group-hover:opacity-90 transition-opacity"
                                    data-alt="A high-quality, professional photograph of a modern hardcover book standing upright against a clean, light grey background. The lighting is soft and diffused, creating a premium studio aesthetic with subtle shadows. The overall mood is academic and sophisticated, aligning with the light mode corporate design system."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDm0lQI-D5cr1uwPxAjp1Frx6pnKGHKHzaE5kWiM7YAXN0UYM57Nn9dpOrgANCAEE4Wqs2PU-18Ui3pbPV1BJkOL90yJQm6MrEnRgvRihg5AKXQE_bsMAxtXwmAqZ9cbThy03b4mY57ZzcNiqGU2nvFtnpSujwN7WKF0Ciaae8WSX7LHBpliLem9U0JSe1GGdsfbEExS6Myr8UrZFvxI9cE0aLKXA22vmvdSTRrUM7ZZswXL1ioF9UEL-B6iQmTNKAU79zsltGgiu0" />
                                <div
                                    class="absolute top-2 right-2 bg-primary-container text-on-primary-container font-caption text-caption px-2 py-1 rounded-md font-medium">
                                    Tersedia</div>
                            </div>
                            <div class="p-4">
                                <p class="font-caption text-caption text-outline mb-1">Fiksi Sejarah</p>
                                <h4
                                    class="font-title-md text-title-md text-on-surface line-clamp-2 mb-1 group-hover:text-primary transition-colors">
                                    Laskar Pelangi</h4>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-4">Andrea Hirata</p>
                                <button
                                    class="w-full py-2 border border-primary text-primary rounded-lg font-label-sm text-label-sm hover:bg-primary hover:text-on-primary transition-colors">Detail</button>
                            </div>
                        </div>
                        <!-- Book Card 2 -->
                        <div
                            class="bg-white rounded-xl overflow-hidden shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 hover:scale-[1.02] hover:shadow-lg transition-all duration-200 group">
                            <div class="relative aspect-[2/3] overflow-hidden bg-surface-container">
                                <img alt="Book Cover"
                                    class="w-full h-full object-cover group-hover:opacity-90 transition-opacity"
                                    data-alt="A minimal, elegant photograph of a thick reference book lying flat on a bright white surface. Natural, soft window light casts long, gentle shadows across the minimalist scene. The colors are muted and professional, reflecting the reliable, SaaS-like aesthetic of the regional library's digital platform."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC609yo-LugNnvb8p9VmDnoMpK3US7coyIgoXXh_OwXRWLscmQ5dU5HyaOQzOptBmRkJ6l7kp3JavJDBuu5_nui_E82QvEauFQepE8Z0FxxDOUnCRdqlNvH_PmGNzhsSOtK_iKFmyVmvj7Ct9PfCXoNTD0u2EblbJxY-ANKiXJow_3SID2SrUKs_cnD89KtGMkKa7EkpBiv260RsqgXWjpJR4l4jQ6F48bSrKhpgabmEjcLX0z1Rkd9ATqpAN9SpTFe0iekVlSipO8" />
                                <div
                                    class="absolute top-2 right-2 bg-surface-variant text-on-surface font-caption text-caption px-2 py-1 rounded-md font-medium">
                                    Dipinjam</div>
                            </div>
                            <div class="p-4">
                                <p class="font-caption text-caption text-outline mb-1">Sains &amp; Teknologi</p>
                                <h4
                                    class="font-title-md text-title-md text-on-surface line-clamp-2 mb-1 group-hover:text-primary transition-colors">
                                    A Brief History of Time</h4>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-4">Stephen Hawking</p>
                                <button
                                    class="w-full py-2 border border-outline-variant text-outline-variant rounded-lg font-label-sm text-label-sm cursor-not-allowed">Antre</button>
                            </div>
                        </div>
                        <!-- Book Card 3 -->
                        <div
                            class="bg-white rounded-xl overflow-hidden shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 hover:scale-[1.02] hover:shadow-lg transition-all duration-200 group">
                            <div class="relative aspect-[2/3] overflow-hidden bg-surface-container">
                                <img alt="Book Cover"
                                    class="w-full h-full object-cover group-hover:opacity-90 transition-opacity"
                                    data-alt="A clean, straight-on photograph of a modern paperback novel with an abstract cover design. It is placed centrally on a pristine, soft blue background that matches the UI's primary container color. The lighting is even and bright, ensuring a crisp, high-contrast image suitable for a digital catalog."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxlXg9UkZipVDtW9U50y0mjc4HS8Q-agaE-HMLONC8w8Jh8G49BEBDKmLC0ouJXM1E_FYOKtiEsYk_SOgassIq3zHMJjGkVqMCivdin4clYC8Tzi2VVIHhhMzRPOb35R6HhEkrq3EzDio6qPER2jB64V3Vcmiivc3bvJv3SzMHBiPwA0iUlzTS4nqVTBnOCIojqPbZoo2XcshN6IROjJmyiw8MVrbejjhla4ZJibd89NjUo7mXlRkZXOyqu-DZMzFX7EKZ8H6hliM" />
                                <div
                                    class="absolute top-2 right-2 bg-primary-container text-on-primary-container font-caption text-caption px-2 py-1 rounded-md font-medium">
                                    Tersedia</div>
                            </div>
                            <div class="p-4">
                                <p class="font-caption text-caption text-outline mb-1">Sastra Klasik</p>
                                <h4
                                    class="font-title-md text-title-md text-on-surface line-clamp-2 mb-1 group-hover:text-primary transition-colors">
                                    Bumi Manusia</h4>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-4">Pramoedya Ananta Toer
                                </p>
                                <button
                                    class="w-full py-2 border border-primary text-primary rounded-lg font-label-sm text-label-sm hover:bg-primary hover:text-on-primary transition-colors">Detail</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <!-- BottomNavBar (Mobile) -->
    <nav
        class="bg-white/95 dark:bg-primary/95 backdrop-blur-lg fixed bottom-0 w-full rounded-t-xl z-50 border-t border-outline-variant/20 shadow-[0_-4px_12px_rgba(0,0,0,0.05)] md:hidden flex justify-around items-center h-16 px-4 pb-safe">
        <a class="text-on-surface-variant dark:text-on-tertiary-container flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity active:scale-90 transition-transform"
            href="#">
            <span class="material-symbols-outlined">home</span>
            <span class="font-caption text-caption">Home</span>
        </a>
        <a class="bg-secondary-container dark:bg-secondary text-on-secondary-container dark:text-on-secondary rounded-full px-4 py-1 flex flex-col items-center active:scale-90 transition-transform"
            href="#">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">search</span>
            <span class="font-caption text-caption">Search</span>
        </a>
        <a class="text-on-surface-variant dark:text-on-tertiary-container flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity active:scale-90 transition-transform"
            href="#">
            <span class="material-symbols-outlined">local_library</span>
            <span class="font-caption text-caption">Library</span>
        </a>
        <a class="text-on-surface-variant dark:text-on-tertiary-container flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity active:scale-90 transition-transform"
            href="#">
            <span class="material-symbols-outlined">person</span>
            <span class="font-caption text-caption">Profile</span>
        </a>
    </nav>
    <!-- Footer -->
    <footer
        class="w-full py-base bg-primary dark:bg-on-background border-t border-primary-container w-full flex flex-col md:flex-row justify-between items-center px-margin-mobile md:px-margin-desktop py-8 md:pl-[304px] mt-12 mb-16 md:mb-0">
        <div class="font-title-md text-on-primary mb-4 md:mb-0">
            DiarySumsel
        </div>
        <div class="flex gap-6 mb-4 md:mb-0">
            <a class="font-caption text-caption text-primary-fixed/70 hover:text-white hover:underline transition-all"
                href="#">About</a>
            <a class="font-caption text-caption text-primary-fixed/70 hover:text-white hover:underline transition-all"
                href="#">Privacy Policy</a>
            <a class="font-caption text-caption text-primary-fixed/70 hover:text-white hover:underline transition-all"
                href="#">Contact Support</a>
            <a class="font-caption text-caption text-primary-fixed/70 hover:text-white hover:underline transition-all"
                href="#">Digital Collections</a>
        </div>
        <div class="font-caption text-caption text-primary-fixed/70">
            © 2024 Dinas Perpustakaan Provinsi Sumatera Selatan
        </div>
    </footer>
</body>

</html>
