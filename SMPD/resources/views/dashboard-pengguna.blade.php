<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Dashboard Anggota - DiarySumsel</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
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

        .fill-icon {
            font-variation-settings: 'FILL' 1;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-background text-on-background font-body-md min-h-screen flex flex-col md:flex-row pb-20 md:pb-0">
    <!-- Navigation Drawer (Desktop) -->
    <nav
        class="hidden md:flex flex-col p-base gap-2 bg-white/90 backdrop-blur-xl text-primary font-label-sm text-label-sm fixed left-0 top-0 h-full w-[280px] rounded-r-xl shadow-2xl z-40">
        <div class="p-4 mb-4 border-b border-outline-variant/30 flex items-center gap-3">
            <div
                class="w-12 h-12 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-title-md overflow-hidden">
                <img alt="User Profile" class="w-full h-full object-cover"
                    data-alt="A close-up portrait of a professional looking individual smiling warmly. The lighting is soft and natural, creating a welcoming and modern feel suitable for a corporate SaaS avatar. The background is slightly blurred to keep focus on the subject's face."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFjKXvT2PxiWFWzFfXMJc0mscOsr9FYXlrWdxXyhU5eXcIaMFD1rBspHvdegS9LB_oDlzHsu2PwnGuZz-rpjB8UooVG8cjQqKyAu6h8t17RGELTwGhbGpmslTPFwhW3VsL6nUpdPxOIIz-hYjxy5QwRxvgktv8WfYAPEFYK6aStFvOxdav7JP4WrKuKtXWIlTIIKoXz_rM7V2FJuPARCDLttw1AVeCUjdlZHZZzx9rT2qIIDm817q3nS6cTENiLTb3brQYOXtxEUk" />
            </div>
            <div>
                <div class="font-title-md text-primary">Sumsel Member</div>
                <div class="font-caption text-caption text-on-surface-variant">Platinum Member</div>
            </div>
        </div>
        <a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-surface-container-highest text-primary border-l-4 border-secondary-container transition-colors"
            href="#">
            <span class="material-symbols-outlined fill-icon">dashboard</span>
            Dashboard
        </a>
        <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors"
            href="#">
            <span class="material-symbols-outlined">library_books</span>
            Catalog
        </a>
        <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors"
            href="#">
            <span class="material-symbols-outlined">auto_stories</span>
            My Books
        </a>
        <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors"
            href="#">
            <span class="material-symbols-outlined">qr_code_2</span>
            Member Card
        </a>
        <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors"
            href="#">
            <span class="material-symbols-outlined">monitoring</span>
            Stats
        </a>
        <div class="mt-auto">
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors"
                href="#">
                <span class="material-symbols-outlined">settings</span>
                Settings
            </a>
        </div>
    </nav>
    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col md:ml-[280px] w-full max-w-[1440px] mx-auto">
        <!-- TopAppBar -->
        <header
            class="sticky top-0 w-full flex items-center justify-between px-margin-mobile md:px-margin-desktop h-16 bg-white/90 backdrop-blur-md text-primary font-title-md text-title-md docked full-width z-50 border-b border-outline-variant/30 shadow-sm">
            <div class="flex items-center gap-3">
                <span class="material-symbols-outlined md:hidden cursor-pointer">menu_book</span>
                <span class="text-headline-lg font-headline-lg text-primary tracking-tight">DiarySumsel</span>
            </div>
            <div class="flex items-center gap-4">
                <div class="hidden md:flex gap-6 mr-4">
                    <!-- Navigation links hidden on mobile, shown on desktop -->
                </div>
                <div
                    class="w-8 h-8 rounded-full bg-surface-variant flex items-center justify-center md:hidden overflow-hidden">
                    <img alt="South Sumatra Library Logo" class="w-full h-full object-cover"
                        data-alt="A close-up portrait of a professional looking individual smiling warmly. The lighting is soft and natural, creating a welcoming and modern feel suitable for a corporate SaaS avatar. The background is slightly blurred to keep focus on the subject's face."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdRP0AiNMfQO8dRMTEDVvb4LPUIdmr7_y6CfPaAbl8yEfJukvn4irVN4a7byqnNShoa78yiw2jrDS7BMJeHgrruSsFD7JqKzjVTMT-A9RP62iGAoLzaSssWzoo2rxTr_y2HbR9NngNlvjHxxFbYcucV7gpLr2pvpl7k53dvyU8DKfZIndp1awf7bcmgqKOMWo9pnLMCXXrDp64NO_0svJfUnzEUdfT_FM40yCxhi0USM-KGmazLFmGI-iRX9xUOEmtsB2uWpSDy5Y" />
                </div>
            </div>
        </header>
        <!-- Dashboard Content -->
        <main class="flex-1 p-margin-mobile md:p-margin-tablet lg:p-margin-desktop space-y-8">
            <!-- Greeting & Quick Actions -->
            <section class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                <div>
                    <h1
                        class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary mb-1">
                        Halo, Budi Santoso</h1>
                    <p class="font-body-md text-body-md text-on-surface-variant">Selamat datang kembali di perpustakaan
                        digital Anda.</p>
                </div>
                <button
                    class="bg-primary text-on-primary px-6 py-3 rounded-xl font-label-sm text-label-sm flex items-center gap-2 hover:bg-primary-container transition-all shadow-md hover:shadow-lg hover:-translate-y-0.5 w-full md:w-auto justify-center">
                    <span class="material-symbols-outlined">qr_code</span>
                    Tampilkan Kartu Anggota
                </button>
            </section>
            <!-- Stats Bento Grid -->
            <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div
                    class="bg-white rounded-xl p-6 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 flex flex-col hover:scale-[1.02] transition-transform duration-200">
                    <div class="flex items-center justify-between mb-4">
                        <span class="font-label-sm text-label-sm text-on-surface-variant">Buku Dipinjam</span>
                        <div
                            class="w-10 h-10 rounded-full bg-surface-container-high text-primary flex items-center justify-center">
                            <span class="material-symbols-outlined fill-icon">book</span>
                        </div>
                    </div>
                    <div class="font-display-lg text-display-lg text-primary mb-1">3</div>
                    <div class="font-caption text-caption text-secondary">Batas maksimal: 5 buku</div>
                </div>
                <div
                    class="bg-white rounded-xl p-6 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 flex flex-col hover:scale-[1.02] transition-transform duration-200">
                    <div class="flex items-center justify-between mb-4">
                        <span class="font-label-sm text-label-sm text-on-surface-variant">Denda Aktif</span>
                        <div
                            class="w-10 h-10 rounded-full bg-error-container text-on-error-container flex items-center justify-center">
                            <span class="material-symbols-outlined fill-icon">payments</span>
                        </div>
                    </div>
                    <div class="font-display-lg text-display-lg text-on-error-container mb-1">Rp 0</div>
                    <div class="font-caption text-caption text-outline">Tidak ada denda berjalan</div>
                </div>
                <div
                    class="bg-white rounded-xl p-6 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 flex flex-col hover:scale-[1.02] transition-transform duration-200">
                    <div class="flex items-center justify-between mb-4">
                        <span class="font-label-sm text-label-sm text-on-surface-variant">Reservasi</span>
                        <div
                            class="w-10 h-10 rounded-full bg-secondary-fixed text-on-secondary-fixed flex items-center justify-center">
                            <span class="material-symbols-outlined fill-icon">bookmark</span>
                        </div>
                    </div>
                    <div class="font-display-lg text-display-lg text-primary mb-1">1</div>
                    <div class="font-caption text-caption text-outline">Siap diambil di cabang utama</div>
                </div>
            </section>
            <!-- Sedang Dipinjam & Aktivitas -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Sedang Dipinjam -->
                <section class="lg:col-span-2 space-y-4">
                    <div class="flex justify-between items-center">
                        <h2 class="font-title-md text-title-md text-primary">Sedang Dipinjam</h2>
                        <a class="font-label-sm text-label-sm text-surface-tint hover:underline" href="#">Lihat
                            Semua</a>
                    </div>
                    <div class="space-y-4">
                        <!-- Book Item 1 -->
                        <div
                            class="bg-white rounded-xl p-4 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 flex gap-4 items-start">
                            <img alt="Book Cover" class="w-16 h-24 object-cover rounded-md shadow-sm"
                                data-alt="A close up shot of a generic book cover with an abstract, modern geometric design in deep blues and whites. The lighting is soft studio lighting emphasizing the texture of the paper. It looks like a high quality professional publication fitting a modern library app."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvVlgp5SSB3eD4LMNtZPOpqkYe9tFZnVmGQAWdMnSXlMiGyTCfveOA7DjKYuv18btmJS9oZkT9YmVypHVnw53RFGnc3Dj3JH8Rhgb2YRSDUCayu_5mPdLoK4X-iE3NxXFj6CEtbXaS6We1V56b_SBRLW1ePBIdpLQwMtY-nSRAEaHoiyakCMKTcNqeDNsgXTcOi8nrgT6EARz4qKb4JqJfF3MjDt9Cp1ptSgDqOhZsw0Qn7FKVSJiX93ZW4zGfYtbm9Z5ZB068SLo" />
                            <div class="flex-1">
                                <h3 class="font-label-sm text-label-sm text-primary font-semibold mb-1">Bumi Manusia
                                </h3>
                                <p class="font-caption text-caption text-on-surface-variant mb-2">Pramoedya Ananta Toer
                                </p>
                                <div class="flex items-center gap-2 text-secondary font-caption text-caption">
                                    <span class="material-symbols-outlined" style="font-size: 16px;">schedule</span>
                                    <span>Jatuh tempo: 3 hari lagi (15 Nov 2024)</span>
                                </div>
                            </div>
                            <button
                                class="px-4 py-2 border border-outline text-primary rounded-lg font-label-sm text-label-sm hover:bg-surface-container-low transition-colors">Perpanjang</button>
                        </div>
                        <!-- Book Item 2 -->
                        <div
                            class="bg-white rounded-xl p-4 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 flex gap-4 items-start">
                            <img alt="Book Cover" class="w-16 h-24 object-cover rounded-md shadow-sm"
                                data-alt="A close up shot of a generic book cover showing a minimalist typography design on a clean white background with subtle grey shadows. The lighting highlights the crispness of the design, suitable for a professional corporate library interface."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZJbddfjeD19okM4sIdy--ivBirdMNirqfMEAUoCSrDWFH78JidXoH4fYoEFt2vHjkEFECXFA_SMwafOORTSVsNxQTHAA6qxnpoHeuqIIW0kY4BmCK6m057-0PNz-mE4_VAqH_gt6zkrKPJK4fvOS-VR6XGOSMb1WIsUJX8ko9UO_eVs29A64RXHrNgAidpE5ktxZ7wSVhuBj-AWDCMJ1skap9SHUTbv-VlgJrO6i6NI3QlAOcS3CIbkAqXoccrb4QsPZq2K9vqlk" />
                            <div class="flex-1">
                                <h3 class="font-label-sm text-label-sm text-primary font-semibold mb-1">Filosofi Teras
                                </h3>
                                <p class="font-caption text-caption text-on-surface-variant mb-2">Henry Manampiring</p>
                                <div class="flex items-center gap-2 text-outline font-caption text-caption">
                                    <span class="material-symbols-outlined" style="font-size: 16px;">schedule</span>
                                    <span>Jatuh tempo: 10 hari lagi (22 Nov 2024)</span>
                                </div>
                            </div>
                            <button
                                class="px-4 py-2 border border-outline text-primary rounded-lg font-label-sm text-label-sm hover:bg-surface-container-low transition-colors">Perpanjang</button>
                        </div>
                    </div>
                </section>
                <!-- Aktivitas Terakhir -->
                <section class="space-y-4">
                    <h2 class="font-title-md text-title-md text-primary">Aktivitas Terakhir</h2>
                    <div
                        class="bg-white rounded-xl p-6 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 relative">
                        <!-- Timeline line -->
                        <div class="absolute left-[39px] top-8 bottom-8 w-px bg-outline-variant/50"></div>
                        <div class="space-y-6 relative z-10">
                            <div class="flex gap-4">
                                <div
                                    class="w-8 h-8 rounded-full bg-surface-container-high text-primary flex items-center justify-center shrink-0">
                                    <span class="material-symbols-outlined"
                                        style="font-size: 18px;">check_circle</span>
                                </div>
                                <div>
                                    <p class="font-label-sm text-label-sm text-on-surface">Mengembalikan "Laskar
                                        Pelangi"</p>
                                    <p class="font-caption text-caption text-outline">Hari ini, 09:45</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div
                                    class="w-8 h-8 rounded-full bg-secondary-fixed text-on-secondary-fixed flex items-center justify-center shrink-0">
                                    <span class="material-symbols-outlined"
                                        style="font-size: 18px;">bookmark_added</span>
                                </div>
                                <div>
                                    <p class="font-label-sm text-label-sm text-on-surface">Reservasi "Atomic Habits"
                                        berhasil</p>
                                    <p class="font-caption text-caption text-outline">Kemarin, 14:20</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div
                                    class="w-8 h-8 rounded-full bg-surface-container-high text-primary flex items-center justify-center shrink-0">
                                    <span class="material-symbols-outlined" style="font-size: 18px;">book</span>
                                </div>
                                <div>
                                    <p class="font-label-sm text-label-sm text-on-surface">Meminjam "Bumi Manusia"</p>
                                    <p class="font-caption text-caption text-outline">5 Nov 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Rekomendasi Untukmu -->
            <section class="space-y-4">
                <div class="flex justify-between items-center">
                    <h2 class="font-title-md text-title-md text-primary">Rekomendasi Untukmu</h2>
                    <div class="flex gap-2">
                        <button
                            class="w-8 h-8 rounded-full border border-outline-variant flex items-center justify-center text-on-surface-variant hover:bg-surface-container-low"><span
                                class="material-symbols-outlined"
                                style="font-size: 18px;">chevron_left</span></button>
                        <button
                            class="w-8 h-8 rounded-full border border-outline-variant flex items-center justify-center text-on-surface-variant hover:bg-surface-container-low"><span
                                class="material-symbols-outlined"
                                style="font-size: 18px;">chevron_right</span></button>
                    </div>
                </div>
                <div class="flex gap-4 overflow-x-auto pb-4 hide-scrollbar">
                    <!-- Rec Card 1 -->
                    <div
                        class="min-w-[160px] bg-white rounded-xl p-3 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 hover:scale-[1.02] transition-transform cursor-pointer">
                        <img alt="Book Cover" class="w-full aspect-[2/3] object-cover rounded-lg mb-3"
                            data-alt="A stylized digital illustration of an old vintage book lying slightly open on a sleek modern table. The lighting is dramatic, casting soft blue and grey shadows, emphasizing a clean corporate aesthetic mixed with classic literature themes."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQupEwh54rGgSVTlckCbtmIpT3GWiakmqCs-tBcUxVrp_ovrd574odzju3LImCFnZzsQ1soURgLcyQzSZlXf-2ZaXmCYue8GFuHlVwc9IgzGJEkmrh7VCjpFZd-MFWBiCEFMN-yOuNLtqsA5EDTa6jl39dIC-6TEdaXO7qXKndmZK88ixd_G11S_1_kcZmqZj79x7NObyYZt9iMQUybfbYJ36UFNNmqVRP7zDZLOJotFo9iKgmDMzz8vncLuePSsXw5ipEVX5QJg4" />
                        <h3 class="font-label-sm text-label-sm text-primary font-semibold truncate">Sapiens</h3>
                        <p class="font-caption text-caption text-outline truncate">Yuval Noah Harari</p>
                    </div>
                    <!-- Rec Card 2 -->
                    <div
                        class="min-w-[160px] bg-white rounded-xl p-3 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 hover:scale-[1.02] transition-transform cursor-pointer">
                        <img alt="Book Cover" class="w-full aspect-[2/3] object-cover rounded-lg mb-3"
                            data-alt="A neat stack of hardback books photographed from a slightly high angle against a plain soft white background. The topmost book has a blank blue cover. The scene is brightly lit with even lighting, typical of a high-end e-commerce product shot."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDfRWDjygDk847tHknBhHtaRiqnGZ0gGZemhDHCWriKNCxD3DN4XhK4BXKvsgzRFXXzQ0PV4kk-gwMqmXdHMKJqks_sMJHZ892lhd6c0Kof2PbZFtCaOYyEfAIWpN4bhtUYQUnUOLNYW9YNHZUtn73fb2hihehNOPALxoglNs-DrrzCUT_tqk25YrlerHfGRWgXB0ZphmLht7m2hff0v2uKskiHpbHGH11SbsqJJeCOZUGjfZcm0AScElkQz8CvG75i06OuQewAhx0" />
                        <h3 class="font-label-sm text-label-sm text-primary font-semibold truncate">Madilog</h3>
                        <p class="font-caption text-caption text-outline truncate">Tan Malaka</p>
                    </div>
                    <!-- Rec Card 3 -->
                    <div
                        class="min-w-[160px] bg-white rounded-xl p-3 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 hover:scale-[1.02] transition-transform cursor-pointer">
                        <img alt="Book Cover" class="w-full aspect-[2/3] object-cover rounded-lg mb-3"
                            data-alt="An open book pages spread out creating a fan shape, photographed against a minimalist grey background. The lighting highlights the texture of the paper edges. The overall mood is intellectual and modern, fitting for a library interface."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCi6n6a6g7UhpD1ezfpk01tGgYv_4V8NnkAWsMiHga8DfSEBSDj2uswYnNkiWziAkJ-GS79wbOan54eEYZSVGsEC9FzQeA0I6t7RgZlcBa3bSIOW3iDmUz25q8Pf9HEoVvIJlwiRCjLjLtO6W7if-eMXIao5Te2D0lIfPAhNsMgn350J_3gK_ZzzR9hepjRP1pZYclVNaU6DVhqaNu8ppBj3diZnooN-jEELV57tN6HudIeMqcx7wNxhvcff6dK1WnOKX_i-YM_U2U" />
                        <h3 class="font-label-sm text-label-sm text-primary font-semibold truncate">Gadis Kretek</h3>
                        <p class="font-caption text-caption text-outline truncate">Ratih Kumala</p>
                    </div>
                    <!-- Rec Card 4 -->
                    <div
                        class="min-w-[160px] bg-white rounded-xl p-3 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 hover:scale-[1.02] transition-transform cursor-pointer">
                        <img alt="Book Cover" class="w-full aspect-[2/3] object-cover rounded-lg mb-3"
                            data-alt="A single modern book standing upright next to a sleek glass vase on a white marble surface. The lighting is bright and airy, creating a fresh and inviting atmosphere. The color palette is mostly whites and subtle blues."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAeDAQjF7JDU75wpCEn7gbSdAGTd3dUGTYFqStLSyDVCr5_3hCvRXi_Z6CWwhaNJ8zh6WEMh-zNPI7pc7gydC94s5QXa_b0nMi97d7jv_8cv4rCfCJe-GGYN4R7lQQ8qm_WR7BlrTAWy1N56te5yHa9_SiymxStXnmOrEaefd0nKhLDmA8boVXXEVE4KhF7V5POBddoztkHxiUFBKbt_P6soWKs6oQb7wSu2c9sDAAqJBHaZPuiOlUrT8JLtW5u2HKM5UDjoWPHTcs" />
                        <h3 class="font-label-sm text-label-sm text-primary font-semibold truncate">Cantik Itu Luka
                        </h3>
                        <p class="font-caption text-caption text-outline truncate">Eka Kurniawan</p>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <footer
            class="w-full py-base bg-primary text-on-primary font-caption text-caption w-full flex flex-col md:flex-row justify-between items-center px-margin-mobile md:px-margin-desktop py-8 border-t border-primary-container flat mt-12 hidden md:flex">
            <div class="font-title-md text-on-primary mb-4 md:mb-0">DiarySumsel</div>
            <div class="flex gap-4 mb-4 md:mb-0">
                <a class="text-primary-fixed/70 hover:text-white hover:underline transition-all"
                    href="#">About</a>
                <a class="text-primary-fixed/70 hover:text-white hover:underline transition-all"
                    href="#">Privacy Policy</a>
                <a class="text-primary-fixed/70 hover:text-white hover:underline transition-all"
                    href="#">Contact Support</a>
                <a class="text-primary-fixed/70 hover:text-white hover:underline transition-all"
                    href="#">Digital Collections</a>
            </div>
            <div>© 2024 Dinas Perpustakaan Provinsi Sumatera Selatan</div>
        </footer>
    </div>
    <!-- BottomNavBar (Mobile) -->
    <nav
        class="md:hidden flex justify-around items-center h-16 px-4 pb-safe bg-white/95 backdrop-blur-lg text-primary font-caption text-caption fixed bottom-0 w-full rounded-t-xl z-50 border-t border-outline-variant/20 shadow-[0_-4px_12px_rgba(0,0,0,0.05)]">
        <a class="bg-secondary-container text-on-secondary-container rounded-full px-4 py-1 flex flex-col items-center active:scale-90 transition-transform"
            href="#">
            <span class="material-symbols-outlined fill-icon">home</span>
            <span>Home</span>
        </a>
        <a class="text-on-surface-variant flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity active:scale-90 transition-transform"
            href="#">
            <span class="material-symbols-outlined">search</span>
            <span>Search</span>
        </a>
        <a class="text-on-surface-variant flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity active:scale-90 transition-transform"
            href="#">
            <span class="material-symbols-outlined">local_library</span>
            <span>Library</span>
        </a>
        <a class="text-on-surface-variant flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity active:scale-90 transition-transform"
            href="#">
            <span class="material-symbols-outlined">person</span>
            <span>Profile</span>
        </a>
    </nav>
    <style>
        /* Utility to hide scrollbar for horizontal scrolling area */
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</body>

</html>
