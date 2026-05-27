<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Pengembalian Buku - DiarySumsel</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
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

<body class="bg-background text-on-background flex h-screen overflow-hidden font-body-md">
    <!-- NavigationDrawer (Desktop) -->
    <nav
        class="hidden md:flex flex-col p-base gap-2 bg-white/90 dark:bg-primary/90 backdrop-blur-xl text-primary dark:text-primary-fixed-dim font-label-sm text-label-sm fixed left-0 top-0 h-full w-[280px] rounded-r-xl shadow-2xl dark:shadow-none translate-x-0 transition-transform duration-300 z-40">
        <!-- Header -->
        <div class="flex items-center gap-4 px-4 py-6 border-b border-outline-variant/20 mb-4">
            <div class="w-12 h-12 rounded-full bg-surface-container-high overflow-hidden shadow-sm flex-shrink-0">
                <img alt="User Profile" class="w-full h-full object-cover"
                    data-alt="A professional headshot of a middle-aged man wearing a neat, dark blue polo shirt. The lighting is soft and flattering, creating a trustworthy and approachable appearance suitable for a library administration profile. The background is a clean, neutral grey."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCHSLjYSDqwONiAx7DLc8rvnHsKrGyaBq94u6iCQbHOdQr-WQZmNNOIxkEd-tIlVxz2Weiu__-X752sJMx1XKcrj6FY31WmHhZY4p2ST66cN8a-8TRnsCHBACKG0O6a4X105Ukn84i2ewSiPawrvVH5nHprviYVYP5Yzv5U7BEDFK9xYKKON8jJK_8seEFA6frItuL34h9vnx3i8UgxN6NROafUFu5UX3tsvB1guttxblVdNMLEdPTuAEvHQe2Q0RjFAK0o2mVNlco" />
            </div>
            <div class="flex flex-col">
                <span class="font-title-md text-title-md text-primary dark:text-primary-fixed">Sumsel Member</span>
                <span class="font-caption text-caption text-on-surface-variant">Platinum Member</span>
            </div>
        </div>
        <!-- Navigation Items -->
        <a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-surface-container-highest dark:bg-primary-container text-primary dark:text-primary-fixed border-l-4 border-secondary-container"
            href="#">
            <span class="material-symbols-outlined">dashboard</span>
            <span>Dashboard</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors border-l-4 border-transparent"
            href="#">
            <span class="material-symbols-outlined">library_books</span>
            <span>Catalog</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors border-l-4 border-transparent"
            href="#">
            <span class="material-symbols-outlined">auto_stories</span>
            <span>My Books</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors border-l-4 border-transparent"
            href="#">
            <span class="material-symbols-outlined">qr_code_2</span>
            <span>Member Card</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors border-l-4 border-transparent"
            href="#">
            <span class="material-symbols-outlined">monitoring</span>
            <span>Stats</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors border-l-4 border-transparent"
            href="#">
            <span class="material-symbols-outlined">settings</span>
            <span>Settings</span>
        </a>
    </nav>
    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col md:ml-[280px] relative w-full">
        <!-- TopAppBar -->
        <header
            class="sticky top-0 w-full flex items-center justify-between px-margin-mobile md:px-margin-desktop h-16 bg-white/90 dark:bg-primary/90 backdrop-blur-md text-primary dark:text-primary-fixed font-title-md text-title-md docked full-width top-0 z-50 border-b border-outline-variant/30 dark:border-outline/20 shadow-sm">
            <div class="flex items-center gap-3">
                <button
                    class="p-2 hover:bg-surface-container-low dark:hover:bg-tertiary-container transition-all duration-200 rounded-full scale-95 active:scale-90 text-on-surface-variant dark:text-on-tertiary-container md:hidden">
                    <span class="material-symbols-outlined">menu_book</span>
                </button>
                <span class="material-symbols-outlined hidden md:block">menu_book</span>
                <span
                    class="text-headline-lg font-headline-lg text-primary dark:text-primary-fixed tracking-tight">DiarySumsel</span>
            </div>
            <div class="flex items-center gap-4">
                <nav class="hidden lg:flex items-center gap-6 mr-4">
                    <a class="text-secondary dark:text-secondary-fixed font-bold border-b-2 border-secondary pb-1"
                        href="#">Dashboard</a>
                    <a class="text-on-surface-variant dark:text-on-tertiary-container hover:text-primary pb-1"
                        href="#">Services</a>
                    <a class="text-on-surface-variant dark:text-on-tertiary-container hover:text-primary pb-1"
                        href="#">Help</a>
                </nav>
                <div class="w-8 h-8 rounded-full overflow-hidden border border-outline-variant">
                    <img alt="South Sumatra Library Logo" class="w-full h-full object-cover"
                        data-alt="A professional headshot of a middle-aged man wearing a neat, dark blue polo shirt. The lighting is soft and flattering, creating a trustworthy and approachable appearance suitable for a library administration profile. The background is a clean, neutral grey."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWUVbrA8r9kC4omMgLuGg1C8VrJImUVED7E6MTl95wMrVSpkchHHb5AgEnQJDpFJ66AqVTXqqc2NKD3gldHngpAD1ikMThfeLBaBqJcp3gexM1aOoquw6w5datd28CiLhK9bXPr7YbAvINKW7p7F_T5KnRXjoc-nP67RcwhgyvrmIwFYAEjOreZQAtliRBuD93IYdkvjSUGNX_H-C0G2-lOY246m8f5-1Oze0bQrr0zFh98Jjy0Z8MjvIJrYeRow6gNy8WL60He-g" />
                </div>
            </div>
        </header>
        <!-- Main Canvas -->
        <main class="flex-1 overflow-y-auto w-full relative">
            <div
                class="px-margin-mobile md:px-margin-desktop py-margin-tablet pb-32 md:pb-margin-desktop max-w-container-max mx-auto">
                <!-- Screen Header -->
                <div class="mb-gutter">
                    <h1 class="font-display-lg text-display-lg text-on-background mb-2">Pengembalian Buku</h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant">Pindai barcode buku untuk memproses
                        pengembalian ke sistem.</p>
                </div>
                <!-- Main Layout Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
                    <!-- Left Column: Camera Scanner (Hero) -->
                    <div class="lg:col-span-8 flex flex-col gap-base">
                        <div
                            class="relative w-full h-[400px] md:h-[500px] bg-tertiary rounded-xl overflow-hidden shadow-md group">
                            <!-- Simulated Camera Feed Background -->
                            <img alt="Camera Feed" class="absolute inset-0 w-full h-full object-cover opacity-60"
                                data-alt="A close-up, slightly blurred first-person view looking down at an open book with a barcode sticker on the inside cover. The scene is illuminated by bright, clinical white light typical of a library circulation desk. The colors are muted, focusing on the stark contrast of the black and white barcode against the slightly off-white paper."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCVF-ofGkeNUf4hXIdpqt0dtXV3CvSPfj5hea6cUIPGRNA3VrU0erU1ScKT_EoXEO0HwIqBd5SN_PogBTFRD0_wATDeU7_wK6Hh79WU76R2iSFf9ZuF1ngWd3fi9Ji6BlJaJEiJHeJyGA3XV2FjnTtDY1HSE_OwkDtfxMkbaTTGDav9b3CWZvdAJugqN-aZ7Vm_zlrTtN9MohC9PqXbpnewA8baZIwSjY-f2V3onqYS7FHf2GDRxSwtgboonXUdtzRJwHsXksxQrbs" />
                            <!-- Dark Overlay for Contrast -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-primary/30">
                            </div>
                            <!-- Scanner Viewfinder UI -->
                            <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                                <div class="w-64 h-32 md:w-80 md:h-40 relative">
                                    <!-- Corners -->
                                    <div
                                        class="absolute top-0 left-0 w-8 h-8 border-t-4 border-l-4 border-secondary-container rounded-tl-lg">
                                    </div>
                                    <div
                                        class="absolute top-0 right-0 w-8 h-8 border-t-4 border-r-4 border-secondary-container rounded-tr-lg">
                                    </div>
                                    <div
                                        class="absolute bottom-0 left-0 w-8 h-8 border-b-4 border-l-4 border-secondary-container rounded-bl-lg">
                                    </div>
                                    <div
                                        class="absolute bottom-0 right-0 w-8 h-8 border-b-4 border-r-4 border-secondary-container rounded-br-lg">
                                    </div>
                                    <!-- Scan Line -->
                                    <div
                                        class="absolute top-1/2 left-0 w-full h-[2px] bg-error shadow-[0_0_12px_rgba(186,26,26,0.8)]">
                                    </div>
                                </div>
                            </div>
                            <!-- Real-time Feedback Overlay -->
                            <div
                                class="absolute top-6 left-1/2 -translate-x-1/2 bg-surface-container-lowest/90 backdrop-blur-md px-6 py-3 rounded-full shadow-lg flex items-center gap-3 border border-outline-variant/30">
                                <span class="material-symbols-outlined text-primary">barcode_scanner</span>
                                <span class="font-label-sm text-label-sm text-primary">Arahkan kamera ke barcode
                                    buku</span>
                            </div>
                            <!-- Recent Success Toast (Simulated) -->
                            <div
                                class="absolute bottom-6 left-6 right-6 md:left-auto md:right-6 md:w-80 bg-surface-container-lowest/95 backdrop-blur-xl p-4 rounded-xl shadow-xl border border-surface-variant flex gap-4 items-start">
                                <div
                                    class="w-10 h-10 rounded-full bg-surface-container-high flex items-center justify-center text-primary shrink-0">
                                    <span class="material-symbols-outlined">check_circle</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-label-sm text-label-sm text-on-background">Berhasil
                                        dipindai</span>
                                    <span class="font-body-md text-body-md text-on-surface-variant line-clamp-1">Sejarah
                                        Sumatera Selatan (Vol 2)</span>
                                </div>
                            </div>
                        </div>
                        <!-- Manual Entry Fallback -->
                        <div
                            class="flex items-center justify-between p-4 bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/20">
                            <div class="flex items-center gap-3 text-on-surface-variant">
                                <span class="material-symbols-outlined">keyboard</span>
                                <span class="font-body-md text-body-md">Barcode tidak terbaca?</span>
                            </div>
                            <button
                                class="px-4 py-2 border border-outline rounded-lg font-label-sm text-label-sm text-primary hover:bg-surface-container-low transition-colors">
                                Masukkan Manual
                            </button>
                        </div>
                    </div>
                    <!-- Right Column: Scanned List & Action -->
                    <div class="lg:col-span-4 flex flex-col gap-base h-full">
                        <!-- List Container -->
                        <div
                            class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/20 flex flex-col h-full overflow-hidden">
                            <!-- Header -->
                            <div
                                class="p-6 border-b border-surface-variant flex justify-between items-center bg-surface-bright">
                                <h2 class="font-title-md text-title-md text-on-background">Buku yang Dipindai</h2>
                                <span
                                    class="bg-primary-container text-on-primary-container px-3 py-1 rounded-full font-label-sm text-label-sm">2
                                    Buku</span>
                            </div>
                            <!-- Scrollable List -->
                            <div class="flex-1 overflow-y-auto p-4 flex flex-col gap-3 bg-surface">
                                <!-- Card 1: On Time -->
                                <div
                                    class="p-4 bg-surface-container-lowest rounded-lg border border-outline-variant/30 flex gap-4 hover:shadow-md transition-shadow">
                                    <div class="w-12 h-16 bg-surface-variant rounded flex-shrink-0 overflow-hidden">
                                        <img alt="Book Cover" class="w-full h-full object-cover opacity-80"
                                            data-alt="A minimalist, abstract book cover design featuring geometric overlapping shapes in subtle blues and greys. The style is modern, corporate, and clean, fitting perfectly into a professional library database interface. The lighting implies a flat digital rendering."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-5KNY8u3w5jzcQdHjIQWP0v0-TPzQ90Iajf3xJgsNs1XusYVSnPhmNtp95dtvFLPXP_7McJ9cvEEUitZv5KkEdNnPpRN0JZSxdEVpA2SKk4-7C8MQoqDcMHswBSxw8DXeR-ipn9fSkp4h4rTDUDZKgsouCPf4mQ2hPbFvam55PbKEyC_dfZv8OxYfT7qgIlcY9pZuscBx54oUqMuq4MCekes9H9Xo-Ylv1n488I4JKk3RkthuW4QQ914k01yeigQghHbHaoFm7LQ" />
                                    </div>
                                    <div class="flex flex-col flex-1 min-w-0 justify-between">
                                        <div>
                                            <h3 class="font-label-sm text-label-sm text-on-background truncate">Laskar
                                                Pelangi</h3>
                                            <p class="font-caption text-caption text-on-surface-variant truncate">
                                                Andrea Hirata</p>
                                        </div>
                                        <div class="mt-2 flex items-center justify-between">
                                            <span
                                                class="inline-flex items-center gap-1 bg-surface-container-high text-primary px-2 py-1 rounded text-caption font-label-sm">
                                                <span
                                                    class="material-symbols-outlined text-[14px]">event_available</span>
                                                Tepat Waktu
                                            </span>
                                            <button class="text-outline hover:text-error transition-colors">
                                                <span class="material-symbols-outlined text-[18px]">close</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card 2: Late with Fine -->
                                <div
                                    class="p-4 bg-surface-container-lowest rounded-lg border border-error-container bg-error-container/10 flex gap-4 hover:shadow-md transition-shadow relative overflow-hidden">
                                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-error"></div>
                                    <div class="w-12 h-16 bg-surface-variant rounded flex-shrink-0 overflow-hidden">
                                        <img alt="Book Cover" class="w-full h-full object-cover opacity-80"
                                            data-alt="A flat, generic digital representation of a hardcover book. The cover is a solid, deep muted blue with faint, unreadable white text simulating a title. The aesthetic is extremely clean and minimal, designed as a placeholder graphic for a UI system."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCieDUp9KseCpm4u8az-2YZUon0v-KZxyK5mac7cfHBJzoCxS7p6kR4J3JwXF88z0AfhsAkVp_alvs12qJUURnVRUqLlfqvG5hsg0JD59s6PPu0Ave-eeF--_dbSpGYZ-VIHZ_aF2blyNVmrPlLjuA96iFI_F7OKI8yR-jLfLAn3tXtAn6ErQTsLblMzyhVbph4gyXZXg-Z6Pgn5kNKLpH_sOvotERBUUyrBrxgax7AVIcCJW5BdcC0kF4ISPtyuyeRJUGarKioJcE" />
                                    </div>
                                    <div class="flex flex-col flex-1 min-w-0 justify-between">
                                        <div>
                                            <h3 class="font-label-sm text-label-sm text-on-background truncate">Bumi
                                                Manusia</h3>
                                            <p class="font-caption text-caption text-on-surface-variant truncate">
                                                Pramoedya A. Toer</p>
                                        </div>
                                        <div class="mt-2 flex items-center justify-between">
                                            <div class="flex flex-col">
                                                <span
                                                    class="inline-flex items-center gap-1 text-on-error-container text-caption font-label-sm mb-0.5">
                                                    <span class="material-symbols-outlined text-[14px]">warning</span>
                                                    Terlambat 3 Hari
                                                </span>
                                                <span class="font-label-sm text-label-sm text-error">Denda: Rp
                                                    3.000</span>
                                            </div>
                                            <button class="text-outline hover:text-error transition-colors self-end">
                                                <span class="material-symbols-outlined text-[18px]">close</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Action Area Bottom -->
                            <div class="p-6 bg-surface-bright border-t border-surface-variant flex flex-col gap-4">
                                <div class="flex justify-between items-center font-body-md text-on-background">
                                    <span>Total Denda</span>
                                    <span class="font-title-md text-title-md text-error">Rp 3.000</span>
                                </div>
                                <button
                                    class="w-full bg-primary text-on-primary py-3 rounded-xl font-label-sm text-label-sm text-center shadow-md hover:shadow-lg hover:bg-primary-container transition-all flex justify-center items-center gap-2">
                                    Selesaikan Pengembalian
                                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer
                class="w-full py-base border-t border-primary-container bg-primary dark:bg-on-background text-on-primary dark:text-on-primary-fixed font-caption text-caption w-full flex flex-col md:flex-row justify-between items-center px-margin-mobile md:px-margin-desktop py-8 flat mt-12">
                <div class="mb-4 md:mb-0">
                    <span class="font-title-md text-on-primary block mb-2">DiarySumsel</span>
                    <p class="opacity-80">© 2024 Dinas Perpustakaan Provinsi Sumatera Selatan</p>
                </div>
                <div class="flex gap-6">
                    <a class="text-primary-fixed/70 hover:text-white hover:underline transition-all"
                        href="#">About</a>
                    <a class="text-primary-fixed/70 hover:text-white hover:underline transition-all"
                        href="#">Privacy Policy</a>
                    <a class="text-primary-fixed/70 hover:text-white hover:underline transition-all"
                        href="#">Contact Support</a>
                    <a class="text-primary-fixed/70 hover:text-white hover:underline transition-all"
                        href="#">Digital Collections</a>
                </div>
            </footer>
        </main>
    </div>
    <!-- BottomNavBar (Mobile) -->
    <nav
        class="md:hidden flex justify-around items-center h-16 px-4 pb-safe bg-white/95 dark:bg-primary/95 backdrop-blur-lg text-primary dark:text-primary-fixed font-caption text-caption fixed bottom-0 w-full rounded-t-xl z-50 border-t border-outline-variant/20 shadow-[0_-4px_12px_rgba(0,0,0,0.05)]">
        <a class="bg-secondary-container dark:bg-secondary text-on-secondary-container dark:text-on-secondary rounded-full px-4 py-1 flex flex-col items-center active:scale-90 transition-transform"
            href="#">
            <span class="material-symbols-outlined">home</span>
            <span>Home</span>
        </a>
        <a class="text-on-surface-variant dark:text-on-tertiary-container flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity active:scale-90 transition-transform"
            href="#">
            <span class="material-symbols-outlined">search</span>
            <span>Search</span>
        </a>
        <a class="text-on-surface-variant dark:text-on-tertiary-container flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity active:scale-90 transition-transform"
            href="#">
            <span class="material-symbols-outlined">local_library</span>
            <span>Library</span>
        </a>
        <a class="text-on-surface-variant dark:text-on-tertiary-container flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity active:scale-90 transition-transform"
            href="#">
            <span class="material-symbols-outlined">person</span>
            <span>Profile</span>
        </a>
    </nav>
</body>

</html>
