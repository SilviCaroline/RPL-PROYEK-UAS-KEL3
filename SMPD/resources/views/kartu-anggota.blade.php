<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Member Card - DiarySumsel</title>
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
                        "headline-lg-mobile": [
                            "Inter"
                        ],
                        "title-md": [
                            "Inter"
                        ],
                        "label-sm": [
                            "Inter"
                        ],
                        "body-lg": [
                            "Inter"
                        ],
                        "headline-lg": [
                            "Inter"
                        ],
                        "display-lg": [
                            "Inter"
                        ],
                        "caption": [
                            "Inter"
                        ],
                        "body-md": [
                            "Inter"
                        ]
                    },
                    "fontSize": {
                        "headline-lg-mobile": [
                            "28px",
                            {
                                "lineHeight": "36px",
                                "fontWeight": "600"
                            }
                        ],
                        "title-md": [
                            "20px",
                            {
                                "lineHeight": "28px",
                                "fontWeight": "600"
                            }
                        ],
                        "label-sm": [
                            "14px",
                            {
                                "lineHeight": "20px",
                                "letterSpacing": "0.01em",
                                "fontWeight": "500"
                            }
                        ],
                        "body-lg": [
                            "18px",
                            {
                                "lineHeight": "28px",
                                "fontWeight": "400"
                            }
                        ],
                        "headline-lg": [
                            "32px",
                            {
                                "lineHeight": "40px",
                                "letterSpacing": "-0.01em",
                                "fontWeight": "600"
                            }
                        ],
                        "display-lg": [
                            "48px",
                            {
                                "lineHeight": "60px",
                                "letterSpacing": "-0.02em",
                                "fontWeight": "700"
                            }
                        ],
                        "caption": [
                            "12px",
                            {
                                "lineHeight": "16px",
                                "fontWeight": "400"
                            }
                        ],
                        "body-md": [
                            "16px",
                            {
                                "lineHeight": "24px",
                                "fontWeight": "400"
                            }
                        ]
                    }
                },
            },
        }
    </script>
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .pattern-bg {
            background-color: #001e40;
            background-image: radial-gradient(circle at 100% 100%, rgba(255, 255, 255, 0.05) 0, rgba(255, 255, 255, 0.05) 3px, transparent 3px), radial-gradient(circle at 0 0, rgba(255, 255, 255, 0.05) 0, rgba(255, 255, 255, 0.05) 3px, transparent 3px);
            background-size: 20px 20px;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-background text-on-background font-body-md min-h-screen flex flex-col">
    <!-- TopAppBar -->
    <header
        class="sticky top-0 w-full flex items-center justify-between px-margin-mobile md:px-margin-desktop h-16 bg-white/90 dark:bg-primary/90 backdrop-blur-md border-b border-outline-variant/30 dark:border-outline/20 shadow-sm docked full-width top-0 z-50">
        <div class="flex items-center gap-4">
            <button
                class="text-primary dark:text-primary-fixed hover:bg-surface-container-low dark:hover:bg-tertiary-container transition-all duration-200 p-2 rounded-full scale-95 active:scale-90">
                <span class="material-symbols-outlined" data-icon="menu_book"
                    style="font-variation-settings: 'FILL' 1;">menu_book</span>
            </button>
            <h1 class="font-headline-lg text-headline-lg text-primary dark:text-primary-fixed tracking-tight">
                DiarySumsel</h1>
        </div>
        <div class="w-10 h-10 rounded-full bg-surface-container overflow-hidden">
            <img alt="South Sumatra Library Logo" class="w-full h-full object-cover"
                data-alt="A small, circular avatar image showing a professional headshot of a person, used as a placeholder for the South Sumatra Library Logo in the top app bar. Clean, modern light mode aesthetic."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBLSS_D8AXXZ0a_MZOilddgQXIzED_p36seVMqBRLiqSJaRxjlthCogS2CymQKVi3UvoLG51hDkHlrvmtyW7a4-8bxXmFdT7U8IxmyIF61DkcpEkGWEXhbIcUpWKtvWYkpr7kzd26XI374TdtY1-4M0L7aHesC1pPtM6Eol71MzqIALbTl49n6ZaLcq-Xvi4o5ZuRFP14CA0XqMW0tXN46h9uSHKIMVc7C8JwlsTGQaNSu8vEx7bL1BAgUasOKh_zyeVwF5mzYQODM" />
        </div>
    </header>
    <div class="flex flex-1 overflow-hidden">
        <!-- NavigationDrawer (Desktop) -->
        <nav
            class="hidden md:flex flex-col p-base gap-2 bg-white/90 dark:bg-primary/90 backdrop-blur-xl fixed left-0 top-0 h-full w-[280px] rounded-r-xl shadow-2xl dark:shadow-none shadow-xl translate-x-0 transition-transform duration-300 z-40 pt-20">
            <div class="px-4 py-6 mb-4 border-b border-outline-variant/20 flex items-center gap-4">
                <img alt="User Profile" class="w-12 h-12 rounded-full object-cover border-2 border-primary"
                    data-alt="A professional headshot of a user, cleanly framed in a circular avatar container. Soft lighting, modern aesthetic, suitable for a library member profile picture."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuASzaXP_UlrmktdNlvbSEFo_njbjlhdUXNN63OQ5Zds2pLVOzXT8pvMew3R02J6vl0Mf_WiHTZaz847tzrmazmL4zmm2LTd0d5O9_ISUsXHuH34rwfBlksYkwwNsjpeHu7DJDelVPwyMTLd-ScNpoPxqjs_h9ylj2L9tSClij7labfn96gXKmgXSmoaFVZ_p4Xe4-GniszsxP3bW9uLyPQvQ8X4yOdo3P9uetEKZX3065LQpTvV3InTRil_IbHAQN7auzV_-R9iKBA" />
                <div>
                    <h2 class="font-title-md text-title-md text-primary dark:text-primary-fixed-dim">Sumsel Member</h2>
                    <p class="font-label-sm text-label-sm text-on-surface-variant">Platinum Member</p>
                </div>
            </div>
            <ul class="flex flex-col gap-1">
                <li>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors font-label-sm text-label-sm"
                        href="#">
                        <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors font-label-sm text-label-sm"
                        href="#">
                        <span class="material-symbols-outlined" data-icon="library_books">library_books</span>
                        Catalog
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors font-label-sm text-label-sm"
                        href="#">
                        <span class="material-symbols-outlined" data-icon="auto_stories">auto_stories</span>
                        My Books
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-surface-container-highest dark:bg-primary-container text-primary dark:text-primary-fixed border-l-4 border-secondary-container font-label-sm text-label-sm"
                        href="#">
                        <span class="material-symbols-outlined" data-icon="qr_code_2"
                            style="font-variation-settings: 'FILL' 1;">qr_code_2</span>
                        Member Card
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors font-label-sm text-label-sm"
                        href="#">
                        <span class="material-symbols-outlined" data-icon="monitoring">monitoring</span>
                        Stats
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors font-label-sm text-label-sm"
                        href="#">
                        <span class="material-symbols-outlined" data-icon="settings">settings</span>
                        Settings
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Main Content -->
        <main
            class="flex-1 md:ml-[280px] p-margin-mobile md:p-margin-tablet pb-24 md:pb-margin-tablet flex flex-col items-center justify-center min-h-[calc(100vh-64px)]">
            <div class="w-full max-w-md mx-auto relative group">
                <!-- Virtual Card Container -->
                <div
                    class="relative rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.12)] transition-transform duration-300 group-hover:scale-[1.02] aspect-[3/5] sm:aspect-[2/3] md:aspect-auto md:min-h-[600px] flex flex-col pattern-bg">
                    <!-- Card Header (Brand Identity) -->
                    <div class="p-6 text-center text-white flex-shrink-0 z-10 relative">
                        <div class="flex items-center justify-center gap-2 mb-2">
                            <span class="material-symbols-outlined text-3xl"
                                data-icon="local_library">local_library</span>
                            <h2 class="font-headline-lg text-headline-lg tracking-tight">DiarySumsel</h2>
                        </div>
                        <p class="font-caption text-caption opacity-80 uppercase tracking-widest">Dinas Perpustakaan
                            Provinsi Sumatera Selatan</p>
                    </div>
                    <!-- Glassmorphism Content Area -->
                    <div
                        class="flex-1 glass-card mx-4 mb-4 rounded-xl flex flex-col items-center p-6 relative z-10 overflow-hidden">
                        <!-- User Info Section -->
                        <div class="flex flex-col items-center w-full mb-6 relative">
                            <!-- Avatar -->
                            <div
                                class="w-24 h-24 rounded-full border-4 border-white shadow-md overflow-hidden mb-4 relative z-10">
                                <img alt="Member Photo" class="w-full h-full object-cover"
                                    data-alt="A clear, front-facing portrait photo of a person, styled as an official ID card photo. The background is a plain, neutral color. High quality, professional lighting, consistent with a digital library card profile."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAwHWnDOkFmvNsmQrqk39_iUvbjMFeGYigRmDhVve815UjaMeZRHNDBPRX5puIG6agccH15ny5XZpnFj21HyxhGBTgdZlokPVPa8Yg3CV9SVFJqPjM0j4EcKVngUJZCEm7u9BWVKKznguHDz6oMJ6rCwrU33cWuDOdUmy_EkKyLaRaXgFUTt0hK9zpK7ftGWOmzvGYyIbNbrxOHAMuQZaCiIpud7DimjtKFpkRcal3yn2dNdX4Mr9SWMaTx3Q7QfiV_oVlOvfAuSYc" />
                            </div>
                            <h3 class="font-title-md text-title-md text-primary text-center leading-tight mb-1">Ahmad
                                Rinaldi</h3>
                            <div
                                class="bg-surface-container-low px-3 py-1 rounded-full text-on-surface-variant font-label-sm text-label-sm border border-outline-variant/30">
                                ID: SS-2024-89210
                            </div>
                        </div>
                        <!-- Divider -->
                        <div class="w-full h-px bg-outline-variant/50 mb-6"></div>
                        <!-- QR Code Section -->
                        <div class="flex-1 flex flex-col items-center justify-center w-full">
                            <div
                                class="bg-white p-4 rounded-xl shadow-sm border border-outline-variant/20 mb-4 relative group cursor-pointer transition-shadow hover:shadow-md">
                                <img alt="QR Code" class="w-40 h-40 object-contain mix-blend-multiply"
                                    data-alt="A clean, high-contrast QR code image centered on a white background. It represents a scannable digital barcode for library access. Crisp black squares on a white surface, professional and functional."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAe3qcF9AnQ_uGHnjzJQfHrx18fGMWok7GMAjHpLCqQbg_SI6Cd2cioTuBLyZrmR-VyAijTCNhOUzcoUW6bPiUEkWeGYWQLbgmJ8x8E4ixmaQqJdGMWxj3xbbIYAZCjrRo0X8iC0DB-qI_4FXoZF_hSL-bNNEsBEmDdMFFEOGqV0PlCozOmYwsCIRUgGACiG7Yl_Jk4u3WNir5Y-3MrSaHnZ48pP3N9tG2ztdpXGNWx3illSqFdKfK1DK7v5sKe5EuMTga128_X4Vo" />
                                <div
                                    class="absolute inset-0 bg-primary/5 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none">
                                </div>
                            </div>
                            <p class="font-label-sm text-label-sm text-on-surface-variant text-center px-4">
                                Tunjukkan QR Code ini ke petugas untuk akses masuk atau peminjaman buku.
                            </p>
                        </div>
                        <!-- Expiry -->
                        <div class="mt-6 w-full flex justify-between items-end border-t border-outline-variant/30 pt-4">
                            <div>
                                <p class="font-caption text-caption text-on-surface-variant mb-0.5">Status</p>
                                <p class="font-label-sm text-label-sm text-secondary font-semibold">Aktif</p>
                            </div>
                            <div class="text-right">
                                <p class="font-caption text-caption text-on-surface-variant mb-0.5">Berlaku Hingga</p>
                                <p class="font-label-sm text-label-sm text-primary font-medium">31 Des 2025</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Action Button -->
                <div class="mt-8 flex justify-center">
                    <button
                        class="bg-surface text-primary border border-outline-variant/50 font-label-sm text-label-sm px-6 py-3 rounded-xl shadow-sm hover:bg-surface-container-low hover:shadow transition-all duration-200 flex items-center gap-2">
                        <span class="material-symbols-outlined text-lg" data-icon="arrow_back">arrow_back</span>
                        Kembali ke Dashboard
                    </button>
                </div>
            </div>
        </main>
    </div>
    <!-- BottomNavBar (Mobile) -->
    <nav
        class="md:hidden flex justify-around items-center h-16 px-4 pb-safe bg-white/95 dark:bg-primary/95 backdrop-blur-lg fixed bottom-0 w-full rounded-t-xl z-50 border-t border-outline-variant/20 shadow-[0_-4px_12px_rgba(0,0,0,0.05)]">
        <a class="text-on-surface-variant dark:text-on-tertiary-container flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity active:scale-90 transition-transform font-caption text-caption"
            href="#">
            <span class="material-symbols-outlined mb-1" data-icon="home">home</span>
            Home
        </a>
        <a class="text-on-surface-variant dark:text-on-tertiary-container flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity active:scale-90 transition-transform font-caption text-caption"
            href="#">
            <span class="material-symbols-outlined mb-1" data-icon="search">search</span>
            Search
        </a>
        <a class="text-on-surface-variant dark:text-on-tertiary-container flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity active:scale-90 transition-transform font-caption text-caption"
            href="#">
            <span class="material-symbols-outlined mb-1" data-icon="local_library">local_library</span>
            Library
        </a>
        <a class="bg-secondary-container dark:bg-secondary text-on-secondary-container dark:text-on-secondary rounded-full px-4 py-1 flex flex-col items-center active:scale-90 transition-transform font-caption text-caption"
            href="#">
            <span class="material-symbols-outlined mb-1" data-icon="person"
                style="font-variation-settings: 'FILL' 1;">person</span>
            Profile
        </a>
    </nav>
    <!-- Footer -->
    <footer
        class="w-full flex flex-col md:flex-row justify-between items-center px-margin-mobile md:px-margin-desktop py-8 bg-primary dark:bg-on-background py-base border-t border-primary-container z-30 hidden md:flex mt-auto">
        <div class="mb-4 md:mb-0 text-center md:text-left">
            <span class="font-title-md text-on-primary block mb-2">DiarySumsel</span>
            <p class="font-caption text-caption text-on-primary dark:text-on-primary-fixed">© 2024 Dinas Perpustakaan
                Provinsi Sumatera Selatan</p>
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
</body>

</html>
