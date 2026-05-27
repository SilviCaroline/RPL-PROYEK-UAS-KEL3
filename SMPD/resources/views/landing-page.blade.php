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
                href="#">Home</a>
            <a class="font-label-sm text-label-sm text-on-surface-variant dark:text-on-tertiary-container hover:text-primary hover:bg-surface-container-low dark:hover:bg-tertiary-container transition-all duration-200 px-3 py-2 rounded-lg"
                href="#">Catalog</a>
            <a class="font-label-sm text-label-sm text-on-surface-variant dark:text-on-tertiary-container hover:text-primary hover:bg-surface-container-low dark:hover:bg-tertiary-container transition-all duration-200 px-3 py-2 rounded-lg"
                href="#">My Books</a>
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
        <!-- Featured Collections (Bento Grid Style) -->
        <section class="px-margin-mobile md:px-margin-desktop py-margin-desktop flex flex-col gap-margin-tablet">
            <div class="flex items-end justify-between">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-primary">Koleksi Terbaru</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant mt-1">Literatur pilihan yang baru saja
                        ditambahkan.</p>
                </div>
                <a class="hidden md:flex items-center gap-1 font-label-sm text-label-sm text-surface-tint hover:text-primary transition-colors"
                    href="#">
                    Lihat Semua <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                </a>
            </div>
            <!-- Horizontal scroll container for mobile, grid for desktop -->
            <div
                class="flex overflow-x-auto md:grid md:grid-cols-4 gap-gutter pb-4 no-scrollbar -mx-margin-mobile px-margin-mobile md:mx-0 md:px-0">
                <!-- Book Card 1 -->
                <div class="min-w-[160px] md:min-w-0 flex flex-col gap-3 group cursor-pointer">
                    <div
                        class="aspect-[2/3] w-full rounded-xl overflow-hidden shadow-[0_4px_12px_rgba(0,30,64,0.1)] relative border border-outline-variant/20">
                        <img alt="Book Cover"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="A highly professional digital rendering of a modern book cover featuring abstract geometric shapes in soft blue and orange hues. The design is clean, minimalist, and typical of a corporate or academic publication. The image is brightly lit, showcasing crisp edges and a subtle shadow suggesting it rests on a light grey surface in a modern library setting."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBNUrV4pn3GsAkoO0D6Yzoc5ttveLC3DZtrJlxcwUy0cttbczweDtQ2IS_z5danRUli62kFmAR1DKIHryCJcdVqcX33TOg9n5KuMrAjvOqlm4mdYywvfha_tSEooYA9inTEoNpGGDeIvDEAsog1fekje7r-YmRxQtcJer2_9L27fzdXgl2uhwYTPzD-IwZZ28BTBt1pPF4-FSvD7pclCJ9ADqH13D-cureMJQAp0fis0sg_ZKbtgcXG7DqdR2esWqjXIFld17sxgKg" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <button
                                class="w-full bg-white text-primary font-label-sm text-label-sm py-2 rounded-lg shadow-sm">Pinjam
                                Buku</button>
                        </div>
                    </div>
                    <div>
                        <h3
                            class="font-label-sm text-label-sm text-on-surface font-semibold line-clamp-1 group-hover:text-surface-tint transition-colors">
                            Budaya Maritim Sriwijaya</h3>
                        <p class="font-caption text-caption text-outline mt-0.5">Dr. Ahmad Wijaya</p>
                    </div>
                </div>
                <!-- Book Card 2 -->
                <div class="min-w-[160px] md:min-w-0 flex flex-col gap-3 group cursor-pointer">
                    <div
                        class="aspect-[2/3] w-full rounded-xl overflow-hidden shadow-[0_4px_12px_rgba(0,30,64,0.1)] relative border border-outline-variant/20">
                        <img alt="Book Cover"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="A clean, minimalist book cover design featuring a subtle orange gradient background. A simple line-art illustration of a microscope or atom implies a scientific theme. The lighting is bright and even, highlighting the pristine digital quality of the cover within a modern SaaS application interface."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAeJKzkiiR-D_5akkj8lj_zmD6tirqEBO0XHgScnzXfvrajaCG9RTHWolE6UTyu9LECijundbQ5UX_9xP30iUs_WXY4ocmpj5TbwWUTr9wiJJL58vXy7-C3UQAr0VdExUE5f7zIKPUcmWtCbzIVAmde_Ay6OaOO5tb2KnkqwWCg1PAVpGxYksQkRDySGfpZu20bNWM7-WP8Dz4JxqB1QJJu2Gjnw74uNJoFgcmkIOsiwORVItQlsuWquv-xWG8dMs1V9IQ0BHQ75Kw" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <button
                                class="w-full bg-white text-primary font-label-sm text-label-sm py-2 rounded-lg shadow-sm">Pinjam
                                Buku</button>
                        </div>
                    </div>
                    <div>
                        <h3
                            class="font-label-sm text-label-sm text-on-surface font-semibold line-clamp-1 group-hover:text-surface-tint transition-colors">
                            Pengantar Sains Data</h3>
                        <p class="font-caption text-caption text-outline mt-0.5">Tim Peneliti Unsri</p>
                    </div>
                </div>
                <!-- Book Card 3 -->
                <div class="min-w-[160px] md:min-w-0 flex flex-col gap-3 group cursor-pointer">
                    <div
                        class="aspect-[2/3] w-full rounded-xl overflow-hidden shadow-[0_4px_12px_rgba(0,30,64,0.1)] relative border border-outline-variant/20">
                        <img alt="Book Cover"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="A beautifully crafted digital book cover for a fictional novel. The cover features a serene landscape of the Musi River at twilight, rendered in a modern vector art style. The color palette utilizes deep indigos and soft amber highlights. The cover is displayed in a brightly lit, sterile digital environment, emphasizing its role as an e-book asset."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC2NpJzrmaqDyl_0WtXgBa9ojYVMsDKDFK5IvI8eVM_2-g2UAXlwVE1RSPBMh3Yh1UmlFkzBdO4l0Q4jkJP6JK2vFhEd_GPpKCqFIJHb18Ie__Kqvq0xiA-y7qYJUO6qxN2QpWo1e7E0Bzfo0z94m_d6ksJ_1KXAc-6U2dyWstgLBdsEotXhzUcKMNTC9dYj_t_iLONYqv_5BQTqdr_2FFjsjyaKtxOhnUY56Ud-XlkWwQcH-lYkYgDf9RIwgHz8rGd4EKV_sSZFCU" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <button
                                class="w-full bg-white text-primary font-label-sm text-label-sm py-2 rounded-lg shadow-sm">Pinjam
                                Buku</button>
                        </div>
                    </div>
                    <div>
                        <h3
                            class="font-label-sm text-label-sm text-on-surface font-semibold line-clamp-1 group-hover:text-surface-tint transition-colors">
                            Senja di Sungai Musi</h3>
                        <p class="font-caption text-caption text-outline mt-0.5">Lestari P.</p>
                    </div>
                </div>
                <!-- Book Card 4 -->
                <div class="min-w-[160px] md:min-w-0 flex flex-col gap-3 group cursor-pointer">
                    <div
                        class="aspect-[2/3] w-full rounded-xl overflow-hidden shadow-[0_4px_12px_rgba(0,30,64,0.1)] relative border border-outline-variant/20">
                        <img alt="Book Cover"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="A professional e-book cover displaying an abstract representation of rising charts and financial growth. The design utilizes sharp geometric lines in varying shades of corporate blue against a very light grey background. The lighting suggests a bright, modern office or a premium digital platform interface."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBpf3FTfrt1jSYgo8ssry7BdzTX3nrqyF-uz-fqv2B5BP4ZtSCurMbqzNlTuz2vlE6ac9w3BF_0VbrwJGToNoRuBYYONUmX0Q56_49kd9fN_qyptMY0behryeaWyxkVbtcbIK_efG2s3wNYde2XOSMr8prW5v7Z5mGLd8Tuoqc878hqnZFC_bel-f_kFDBkak9JpVdkGzrGio9V3GRrsRh-WSVHuYG_dBjo-K_OsAy2pbt5dmblIkaUsCymbjcObFX9DfIZ6O_etYk" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <button
                                class="w-full bg-white text-primary font-label-sm text-label-sm py-2 rounded-lg shadow-sm">Pinjam
                                Buku</button>
                        </div>
                    </div>
                    <div>
                        <h3
                            class="font-label-sm text-label-sm text-on-surface font-semibold line-clamp-1 group-hover:text-surface-tint transition-colors">
                            Ekonomi Digital 2024</h3>
                        <p class="font-caption text-caption text-outline mt-0.5">Budi Santoso</p>
                    </div>
                </div>
            </div>
            <a class="md:hidden self-center w-full text-center mt-4 border border-outline-variant rounded-lg py-2 font-label-sm text-label-sm text-primary"
                href="#">Lihat Semua Koleksi</a>
        </section>
        <!-- Bento Grid: Popular Categories & Stats -->
        <section class="px-margin-mobile md:px-margin-desktop py-margin-desktop">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                <!-- Main Featured Block -->
                <div
                    class="md:col-span-2 bg-surface-container-low rounded-2xl p-6 md:p-8 flex flex-col md:flex-row gap-6 items-center border border-outline-variant/20 relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-64 h-64 bg-primary-fixed-dim/20 rounded-full blur-3xl -mr-20 -mt-20 pointer-events-none">
                    </div>
                    <div class="flex-1 z-10">
                        <span
                            class="inline-flex items-center gap-1 font-caption text-caption text-secondary-container bg-secondary-container/10 px-2 py-1 rounded-md mb-3">
                            <span class="material-symbols-outlined text-[14px]">local_fire_department</span> Sedang
                            Hangat
                        </span>
                        <h3 class="font-headline-lg-mobile md:font-headline-lg text-primary mb-2">Koleksi Sastra Lokal
                            Sumatera Selatan</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-6">Pelajari sejarah, pantun, dan
                            cerita rakyat asli daerah yang telah didigitalisasi untuk generasi masa depan.</p>
                        <button
                            class="bg-primary text-on-primary font-label-sm text-label-sm px-5 py-2.5 rounded-lg hover:bg-primary-container transition-colors">
                            Jelajahi Kategori
                        </button>
                    </div>
                    <div class="w-full md:w-1/3 flex justify-center z-10 relative">
                        <!-- Stack of books visual -->
                        <div class="relative w-32 h-40">
                            <div
                                class="absolute top-0 right-0 w-full h-full bg-surface-variant rounded-lg shadow-md border border-white transform rotate-6 origin-bottom-right">
                            </div>
                            <div
                                class="absolute top-0 right-2 w-full h-full bg-primary-fixed rounded-lg shadow-md border border-white transform rotate-3 origin-bottom-right">
                            </div>
                            <div
                                class="absolute top-0 right-4 w-full h-full bg-white rounded-lg shadow-lg border border-outline-variant/30 flex items-center justify-center">
                                <span class="material-symbols-outlined text-4xl text-primary/30">auto_stories</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Stats / Quick Info Block -->
                <div
                    class="bg-surface-container-lowest border border-outline-variant/30 rounded-2xl p-6 shadow-sm flex flex-col justify-center gap-6">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-surface-container flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined">library_books</span>
                        </div>
                        <div>
                            <div class="font-title-md text-title-md text-on-surface">15,000+</div>
                            <div class="font-caption text-caption text-outline">Koleksi Digital</div>
                        </div>
                    </div>
                    <div class="h-px w-full bg-outline-variant/20"></div>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-secondary-fixed/30 flex items-center justify-center text-secondary">
                            <span class="material-symbols-outlined">group</span>
                        </div>
                        <div>
                            <div class="font-title-md text-title-md text-on-surface">50,000+</div>
                            <div class="font-caption text-caption text-outline">Anggota Aktif</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- How It Works Section -->
        <section class="px-margin-mobile md:px-margin-desktop py-margin-desktop mb-12">
            <div class="text-center mb-12">
                <h2 class="font-headline-lg text-headline-lg text-primary">Cara Mudah Membaca</h2>
                <p class="font-body-md text-body-md text-on-surface-variant mt-2 max-w-xl mx-auto">Hanya dengan tiga
                    langkah sederhana, Anda sudah bisa menikmati ribuan koleksi buku digital kami.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
                <!-- Connecting line for desktop -->
                <div class="hidden md:block absolute top-8 left-[16%] right-[16%] h-0.5 bg-outline-variant/30 z-0">
                </div>
                <!-- Step 1 -->
                <div class="relative z-10 flex flex-col items-center text-center gap-4 bg-background p-4">
                    <div
                        class="w-16 h-16 rounded-2xl bg-surface-container-lowest shadow-sm border border-outline-variant/20 flex items-center justify-center text-surface-tint">
                        <span class="material-symbols-outlined text-3xl">person_add</span>
                    </div>
                    <h3 class="font-title-md text-title-md text-on-surface">1. Daftar Anggota</h3>
                    <p class="font-caption text-caption text-on-surface-variant">Buat akun secara gratis menggunakan
                        email atau nomor identitas kependudukan Anda.</p>
                </div>
                <!-- Step 2 -->
                <div class="relative z-10 flex flex-col items-center text-center gap-4 bg-background p-4">
                    <div
                        class="w-16 h-16 rounded-2xl bg-surface-container-lowest shadow-sm border border-outline-variant/20 flex items-center justify-center text-secondary">
                        <span class="material-symbols-outlined text-3xl">manage_search</span>
                    </div>
                    <h3 class="font-title-md text-title-md text-on-surface">2. Cari &amp; Pilih</h3>
                    <p class="font-caption text-caption text-on-surface-variant">Gunakan fitur pencarian untuk
                        menemukan buku, jurnal, atau karya sastra yang Anda butuhkan.</p>
                </div>
                <!-- Step 3 -->
                <div class="relative z-10 flex flex-col items-center text-center gap-4 bg-background p-4">
                    <div
                        class="w-16 h-16 rounded-2xl bg-surface-container-lowest shadow-sm border border-outline-variant/20 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-3xl">menu_book</span>
                    </div>
                    <h3 class="font-title-md text-title-md text-on-surface">3. Pinjam &amp; Baca</h3>
                    <p class="font-caption text-caption text-on-surface-variant">Pinjam buku secara digital dan baca
                        langsung melalui perangkat smartphone atau komputer Anda.</p>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer
        class="bg-primary dark:bg-on-background text-on-primary dark:text-on-primary-fixed w-full py-base border-t border-primary-container flat w-full flex flex-col md:flex-row justify-between items-center px-margin-mobile md:px-margin-desktop py-8 gap-6 md:gap-0 mt-auto">
        <div class="flex flex-col items-center md:items-start gap-2">
            <span class="font-title-md text-on-primary">DiarySumsel</span>
            <span class="font-caption text-caption text-primary-fixed-dim/80">© 2024 Dinas Perpustakaan Provinsi
                Sumatera Selatan</span>
        </div>
        <nav class="flex flex-wrap justify-center gap-6">
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
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">local_library</span>
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
