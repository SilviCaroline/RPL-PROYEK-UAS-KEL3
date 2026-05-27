<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Notification Center - DiarySumsel</title>
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
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-background text-on-background min-h-screen flex flex-col font-sans">
    <!-- TopAppBar (Transactional - Back Button) -->
    <header
        class="bg-white/90 dark:bg-primary/90 backdrop-blur-md text-primary dark:text-primary-fixed font-title-md text-title-md docked full-width top-0 z-50 border-b border-outline-variant/30 dark:border-outline/20 shadow-sm sticky top-0 w-full flex items-center justify-between px-margin-mobile md:px-margin-desktop h-16">
        <div class="flex items-center gap-4">
            <button
                class="hover:bg-surface-container-low dark:hover:bg-tertiary-container transition-all duration-200 scale-95 active:scale-90 p-2 rounded-full text-primary">
                <span class="material-symbols-outlined">arrow_back</span>
            </button>
            <h1 class="text-headline-lg font-headline-lg text-primary dark:text-primary-fixed tracking-tight">
                Notifications</h1>
        </div>
        <div class="flex items-center gap-4">
            <!-- Empty trailing for balance, or settings if needed -->
        </div>
    </header>
    <!-- Main Content -->
    <main class="flex-grow w-full max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-8 md:py-12">
        <div class="max-w-3xl mx-auto space-y-8">
            <!-- Group: Hari Ini -->
            <section>
                <h2 class="font-title-md text-title-md text-primary mb-4 border-b border-outline-variant/30 pb-2">Hari
                    Ini</h2>
                <div class="space-y-4">
                    <!-- Notification Item: Unread (Soft Background) -->
                    <div
                        class="bg-surface-container-low rounded-xl p-4 flex gap-4 items-start shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 hover:scale-[1.01] transition-transform duration-200 relative overflow-hidden">
                        <!-- Unread Indicator Indicator -->
                        <div class="absolute left-0 top-0 bottom-0 w-1 bg-secondary-container"></div>
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-error-container text-error rounded-full flex items-center justify-center">
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">warning</span>
                        </div>
                        <div class="flex-grow">
                            <div class="flex justify-between items-start mb-1">
                                <h3 class="font-label-sm text-label-sm text-primary">Jatuh Tempo Peminjaman</h3>
                                <span class="font-caption text-caption text-on-surface-variant">2 jam lalu</span>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface-variant">Buku "Sapiens: A Brief History
                                of Humankind" harus dikembalikan besok. Harap segera kembalikan untuk menghindari denda.
                            </p>
                        </div>
                    </div>
                    <!-- Notification Item: Unread -->
                    <div
                        class="bg-surface-container-low rounded-xl p-4 flex gap-4 items-start shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 hover:scale-[1.01] transition-transform duration-200 relative overflow-hidden">
                        <div class="absolute left-0 top-0 bottom-0 w-1 bg-secondary-container"></div>
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-surface-variant text-primary rounded-full flex items-center justify-center">
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">book</span>
                        </div>
                        <div class="flex-grow">
                            <div class="flex justify-between items-start mb-1">
                                <h3 class="font-label-sm text-label-sm text-primary">Buku Reservasi Tersedia</h3>
                                <span class="font-caption text-caption text-on-surface-variant">5 jam lalu</span>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface-variant">Buku yang Anda reservasi,
                                "Atomic Habits", kini tersedia untuk diambil di meja sirkulasi.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Group: Sebelumnya -->
            <section>
                <h2 class="font-title-md text-title-md text-primary mb-4 border-b border-outline-variant/30 pb-2">
                    Sebelumnya</h2>
                <div class="space-y-4">
                    <!-- Notification Item: Read (White Background) -->
                    <div
                        class="bg-white rounded-xl p-4 flex gap-4 items-start border border-outline-variant/20 hover:shadow-[0_4px_12px_rgba(0,30,64,0.05)] transition-all duration-200">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-secondary-fixed text-on-secondary-fixed rounded-full flex items-center justify-center">
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">check_circle</span>
                        </div>
                        <div class="flex-grow">
                            <div class="flex justify-between items-start mb-1">
                                <h3 class="font-label-sm text-label-sm text-primary">Denda Terbayar</h3>
                                <span class="font-caption text-caption text-on-surface-variant">Kemarin</span>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface-variant">Pembayaran denda sebesar Rp
                                5.000 telah berhasil dikonfirmasi. Terima kasih.</p>
                        </div>
                    </div>
                    <!-- Notification Item: Read -->
                    <div
                        class="bg-white rounded-xl p-4 flex gap-4 items-start border border-outline-variant/20 hover:shadow-[0_4px_12px_rgba(0,30,64,0.05)] transition-all duration-200">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-primary-container text-on-primary-container rounded-full flex items-center justify-center">
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">campaign</span>
                        </div>
                        <div class="flex-grow">
                            <div class="flex justify-between items-start mb-1">
                                <h3 class="font-label-sm text-label-sm text-primary">Pengumuman Perpustakaan</h3>
                                <span class="font-caption text-caption text-on-surface-variant">2 Hari Lalu</span>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface-variant">Perpustakaan Daerah Sumatera
                                Selatan akan tutup pada libur nasional tanggal 17 Agustus. Layanan digital tetap
                                tersedia.</p>
                        </div>
                    </div>
                    <!-- Notification Item: Read -->
                    <div
                        class="bg-white rounded-xl p-4 flex gap-4 items-start border border-outline-variant/20 hover:shadow-[0_4px_12px_rgba(0,30,64,0.05)] transition-all duration-200">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-tertiary-fixed text-on-tertiary-fixed rounded-full flex items-center justify-center">
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">local_library</span>
                        </div>
                        <div class="flex-grow">
                            <div class="flex justify-between items-start mb-1">
                                <h3 class="font-label-sm text-label-sm text-primary">Pengumuman Perpustakaan</h3>
                                <span class="font-caption text-caption text-on-surface-variant">1 Minggu Lalu</span>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface-variant">Koleksi buku baru untuk bulan
                                ini telah ditambahkan. Jelajahi katalog sekarang!</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>

</html>
