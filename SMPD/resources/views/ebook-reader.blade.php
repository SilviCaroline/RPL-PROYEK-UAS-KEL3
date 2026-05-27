<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>E-Book Reader - DiarySumsel</title>
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
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Design System Configuration -->
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
        /* Custom scrollbar for minimalist reader feel */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #c3c6d1;
            /* outline-variant */
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #737780;
            /* outline */
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body
    class="bg-background text-on-background font-body-md text-body-md h-screen w-screen overflow-hidden flex flex-col selection:bg-secondary-container selection:text-on-secondary-container">
    <!--
        NOTE: Global Navigation Shells (TopAppBar, NavigationDrawer, BottomNavBar) are SUPPRESSED.
        Reason: E-Book Reader is a Task-Focused, temporary departure screen requiring full-screen focus,
        accessed via a "Close Reader" action.
    -->
    <!-- Reader Top Toolbar (Custom for specific task) -->
    <header
        class="flex-none flex items-center justify-between px-margin-mobile md:px-margin-tablet py-3 bg-white/95 backdrop-blur-md border-b border-outline-variant/30 z-40 relative">
        <div class="flex items-center gap-2 md:gap-4">
            <!-- Close Reader Action -->
            <button aria-label="Close Reader"
                class="p-2 rounded-full hover:bg-surface-variant text-on-surface-variant transition-colors flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-primary">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">close</span>
            </button>
            <div class="w-px h-6 bg-outline-variant/50 hidden md:block"></div>
            <!-- TOC Toggle -->
            <button aria-label="Table of Contents"
                class="p-2 rounded-full hover:bg-surface-variant text-on-surface-variant transition-colors flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-primary group">
                <span class="material-symbols-outlined group-hover:text-primary transition-colors"
                    style="font-variation-settings: 'FILL' 0;">format_list_bulleted</span>
            </button>
        </div>
        <div class="flex-1 flex justify-center px-4 overflow-hidden text-center">
            <h1 class="font-title-md text-title-md text-primary truncate max-w-full md:max-w-xl">
                Sejarah Kebudayaan Sumatera Selatan
            </h1>
        </div>
        <div class="flex items-center gap-2">
            <button aria-label="Search within book"
                class="p-2 rounded-full hover:bg-surface-variant text-on-surface-variant transition-colors flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-primary hidden md:flex">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">search</span>
            </button>
            <button aria-label="Bookmark this page"
                class="p-2 rounded-full hover:bg-surface-variant text-on-surface-variant transition-colors flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-primary">
                <span class="material-symbols-outlined"
                    style="font-variation-settings: 'FILL' 0;">bookmark_border</span>
            </button>
            <button aria-label="More options"
                class="p-2 rounded-full hover:bg-surface-variant text-on-surface-variant transition-colors flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-primary">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">more_vert</span>
            </button>
        </div>
    </header>
    <!-- Main Reader Canvas -->
    <main
        class="flex-1 relative bg-surface-container-low/50 overflow-auto flex justify-center items-start py-8 px-4 md:px-margin-desktop scroll-smooth">
        <!-- The "Document Page" -->
        <article
            class="w-full max-w-4xl bg-surface-container-lowest shadow-[0_4px_24px_rgba(0,30,64,0.08)] rounded-DEFAULT min-h-[1000px] p-8 md:p-16 relative overflow-hidden flex flex-col gap-6 ring-1 ring-outline-variant/20 mb-24">
            <!-- Security Watermark -->
            <div
                class="absolute inset-0 pointer-events-none select-none flex items-center justify-center overflow-hidden z-0 opacity-[0.03]">
                <div
                    class="transform -rotate-45 font-display-lg text-display-lg text-primary whitespace-nowrap tracking-widest uppercase">
                    DiarySumsel Member Copy - Do Not Distribute
                </div>
            </div>
            <!-- Page Content (Foreground) -->
            <div class="relative z-10 flex flex-col gap-6 text-on-surface">
                <header class="mb-8 border-b border-outline-variant/30 pb-6">
                    <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider mb-2">Bab 4
                    </p>
                    <h2 class="font-headline-lg text-headline-lg text-primary">Era Kolonial dan Pengaruhnya terhadap
                        Arsitektur Lokal</h2>
                </header>
                <p class="font-body-lg text-body-lg leading-relaxed text-on-surface-variant indent-8">
                    Kedatangan bangsa Eropa di Kepulauan Nusantara pada abad ke-16, yang awalnya didorong oleh pencarian
                    rempah-rempah, secara bertahap bertransformasi menjadi dominasi politik dan ekonomi. Di Sumatera
                    Selatan, khususnya Palembang, pengaruh kolonial Belanda mulai terasa kuat setelah jatuhnya
                    Kesultanan Palembang Darussalam pada awal abad ke-19. Perubahan struktur kekuasaan ini tidak hanya
                    berdampak pada sistem pemerintahan, tetapi juga meninggalkan jejak mendalam pada tata ruang dan
                    arsitektur kota.
                </p>
                <p class="font-body-lg text-body-lg leading-relaxed text-on-surface-variant indent-8">
                    Pemerintah kolonial Hindia Belanda menerapkan kebijakan segregasi ruang yang secara fisik memisahkan
                    permukiman penduduk Eropa dari kaum pribumi dan kelompok etnis lainnya. Kawasan permukiman Eropa,
                    yang sering disebut sebagai <i>Europeesche Wijk</i>, direncanakan dengan pendekatan tata kota modern
                    pada masanya: jalan-jalan yang lebar, sistem drainase yang terstruktur, dan bangunan-bangunan megah
                    yang dirancang untuk beradaptasi dengan iklim tropis.
                </p>
                <!-- Mockup of an illustration within the book -->
                <figure class="my-8 flex flex-col items-center">
                    <div
                        class="w-full h-[400px] bg-surface-variant rounded-DEFAULT overflow-hidden relative shadow-sm border border-outline-variant/20">
                        <!-- Placeholder for image -->
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-surface-tint/10 to-surface-tint/5 mix-blend-multiply">
                        </div>
                        <img alt="Historical architecture"
                            class="w-full h-full object-cover opacity-90 grayscale-[20%] sepia-[10%]"
                            data-alt="A vintage, sepia-toned photograph showing a wide, unpaved street lined with colonial-era buildings in a tropical setting. The buildings feature large verandas, high ceilings, and distinct European architectural elements adapted for hot climates, such as louvered windows and deep eaves. The scene is bathed in bright, stark sunlight, casting deep, sharp shadows that emphasize the architectural forms. The overall mood is nostalgic and historical, fitting the aesthetic of a carefully preserved archival document."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBoWBUaEzVFDOPhscS9FQ4TAIOfBZ9Jd_slfo0P6qFFnn92st2MmYlDOW96DTRpVLRK7jX9j1gH1hPID9TTc7piq48btp8Ln8kxe53iWmjZN9W4TiQ1HCYkTWXtqqiLi65er8902aR2kabzz30vIb2Ux6UndU7xjozSsqaKyYz0S8c_wwA9T5YtWStAioi7Sf-TN_9uGB_coBKd8oWqiE8M2V1GruZ4dPcFnu2yQ4fLiwrbQJlCXqz1enG2RGxeBHIa6P9Jp7SY1MI" />
                    </div>
                    <figcaption class="mt-4 font-caption text-caption text-on-surface-variant text-center max-w-2xl">
                        Gambar 4.1: Tampak jalan utama di kawasan <i>Europeesche Wijk</i> Palembang pada awal tahun
                        1920-an, memperlihatkan adaptasi arsitektur Eropa terhadap iklim tropis. (Sumber: Arsip
                        Nasional)
                    </figcaption>
                </figure>
                <p class="font-body-lg text-body-lg leading-relaxed text-on-surface-variant indent-8">
                    Salah satu elemen arsitektur yang paling menonjol dari era ini adalah fasad bergaya Indische Empire,
                    yang menggabungkan elemen neoklasik Eropa dengan kebutuhan fungsional daerah beriklim panas.
                    Bangunan-bangunan publik seperti kantor pemerintahan, rumah dinas residen, dan fasilitas umum
                    lainnya dibangun dengan pilar-pilar kokoh, langit-langit yang sangat tinggi untuk sirkulasi udara,
                    serta beranda luas yang berfungsi sebagai ruang transisi antara area luar yang terik dan bagian
                    dalam bangunan yang sejuk.
                </p>
                <p class="font-body-lg text-body-lg leading-relaxed text-on-surface-variant indent-8">
                    Sementara itu, masyarakat lokal terus mempertahankan bentuk arsitektur vernakular mereka, seperti
                    Rumah Limas, meskipun perlahan-lahan mulai mengadopsi material bangunan modern yang diperkenalkan
                    oleh pihak kolonial, seperti seng untuk atap dan semen untuk pondasi. Interaksi antara dua gaya
                    arsitektur ini menciptakan lanskap visual kota yang unik dan berlapis, mencerminkan dinamika
                    sosial-politik yang kompleks pada masa itu.
                </p>
            </div>
            <!-- Page Number Bottom Marker -->
            <div class="absolute bottom-8 right-8 font-label-sm text-label-sm text-on-surface-variant">
                124
            </div>
        </article>
    </main>
    <!-- Floating Reader Controls (Bottom Dock) -->
    <div
        class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex items-center bg-white/90 backdrop-blur-xl shadow-[0_8px_32px_rgba(0,30,64,0.12)] rounded-full px-2 py-2 border border-outline-variant/20 z-50 transition-transform duration-300">
        <!-- Zoom Controls -->
        <div class="flex items-center gap-1 px-2 hidden sm:flex">
            <button aria-label="Zoom Out"
                class="p-2 rounded-full hover:bg-surface-variant text-on-surface-variant transition-colors flex items-center justify-center focus:outline-none">
                <span class="material-symbols-outlined text-[20px]"
                    style="font-variation-settings: 'FILL' 0;">zoom_out</span>
            </button>
            <span class="font-label-sm text-label-sm text-primary min-w-[3rem] text-center select-none">100%</span>
            <button aria-label="Zoom In"
                class="p-2 rounded-full hover:bg-surface-variant text-on-surface-variant transition-colors flex items-center justify-center focus:outline-none">
                <span class="material-symbols-outlined text-[20px]"
                    style="font-variation-settings: 'FILL' 0;">zoom_in</span>
            </button>
        </div>
        <div class="w-px h-6 bg-outline-variant/40 mx-2 hidden sm:block"></div>
        <!-- Page Navigation -->
        <div class="flex items-center gap-2 sm:gap-4 px-2 sm:px-4">
            <button aria-label="Previous Page"
                class="p-2 rounded-full hover:bg-surface-variant text-on-surface-variant transition-colors flex items-center justify-center focus:outline-none group">
                <span class="material-symbols-outlined group-hover:-translate-x-0.5 transition-transform"
                    style="font-variation-settings: 'FILL' 0;">chevron_left</span>
            </button>
            <div class="flex items-center gap-1 font-label-sm text-label-sm select-none">
                <span class="text-primary font-semibold w-8 text-right">124</span>
                <span class="text-on-surface-variant/50">/</span>
                <span class="text-on-surface-variant w-8">342</span>
            </div>
            <button aria-label="Next Page"
                class="p-2 rounded-full hover:bg-surface-variant text-on-surface-variant transition-colors flex items-center justify-center focus:outline-none group">
                <span class="material-symbols-outlined group-hover:translate-x-0.5 transition-transform"
                    style="font-variation-settings: 'FILL' 0;">chevron_right</span>
            </button>
        </div>
        <div class="w-px h-6 bg-outline-variant/40 mx-2 hidden sm:block"></div>
        <!-- View Settings -->
        <div class="flex items-center px-2 hidden sm:flex">
            <button aria-label="Display Settings"
                class="p-2 rounded-full hover:bg-surface-variant text-on-surface-variant transition-colors flex items-center justify-center focus:outline-none">
                <span class="material-symbols-outlined text-[20px]"
                    style="font-variation-settings: 'FILL' 0;">tune</span>
            </button>
        </div>
    </div>
</body>

</html>
