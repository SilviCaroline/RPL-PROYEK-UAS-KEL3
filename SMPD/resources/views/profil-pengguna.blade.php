<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>DiarySumsel - Profil Pengguna</title>
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
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9ff;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-background text-on-background pb-24 md:pb-0 min-h-screen flex flex-col md:flex-row">
    <!-- Navigation Drawer (Desktop) -->
    <nav
        class="hidden md:flex flex-col p-base gap-2 bg-white/90 dark:bg-primary/90 backdrop-blur-xl fixed left-0 top-0 h-full w-[280px] rounded-r-xl shadow-xl z-40 border-r border-outline-variant/20">
        <div class="px-4 py-6">
            <h1 class="font-headline-lg text-headline-lg text-primary dark:text-primary-fixed tracking-tight">
                DiarySumsel</h1>
        </div>
        <div class="px-4 mb-6 flex items-center gap-3">
            <div class="w-12 h-12 rounded-full overflow-hidden bg-surface-container flex-shrink-0">
                <img alt="Profile avatar" class="w-full h-full object-cover"
                    data-alt="A professional headshot of a young woman with dark hair, smiling warmly. The lighting is soft and flattering, creating a bright and approachable corporate modern aesthetic. The background is a clean, subtle gradient of light grey to white, matching the UI's minimalist design."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAdq_EF0tVok2g_zUtbm7E3qkB2SBV9RHgtwR3I8_I0hhs-Lm3MToBM7qMVDqpTwwyi7OjIbXca8UPRjncWnx2CIHAVq6NidRlCgr_zfF1cnNoq5uUKW1Sp3Tx32YkKxCCpXEPWQEa6B4J15vr_5cTJkp_7xzDvjBCbQXTbVYx7wBV7_0b0wcTQgHRelSgdpA1ms61mX9HzPM4Kf52hifZRbGS0qlNuw1z4wnNZZjZPPB3FL0JsDN2J2OINwGOULCBGh23geKZlJsA" />
            </div>
            <div>
                <h2 class="font-label-sm text-label-sm font-semibold text-primary">Sumsel Member</h2>
                <p class="font-caption text-caption text-on-surface-variant">Platinum Member</p>
            </div>
        </div>
        <ul class="flex-1 space-y-1">
            <li>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                    <span class="font-label-sm text-label-sm">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="library_books">library_books</span>
                    <span class="font-label-sm text-label-sm">Catalog</span>
                </a>
            </li>
            <li>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="auto_stories">auto_stories</span>
                    <span class="font-label-sm text-label-sm">My Books</span>
                </a>
            </li>
            <li>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="qr_code_2">qr_code_2</span>
                    <span class="font-label-sm text-label-sm">Member Card</span>
                </a>
            </li>
            <li>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="monitoring">monitoring</span>
                    <span class="font-label-sm text-label-sm">Stats</span>
                </a>
            </li>
            <li>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-surface-container-highest text-primary border-l-4 border-secondary-container"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="settings"
                        style="font-variation-settings: 'FILL' 1;">settings</span>
                    <span class="font-label-sm text-label-sm">Settings</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- Main Content Area -->
    <main class="flex-1 md:ml-[280px] w-full max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-8">
        <!-- TopAppBar (Mobile Only - Replaced by Drawer on Desktop) -->
        <header
            class="md:hidden sticky top-0 w-full flex items-center justify-between px-margin-mobile h-16 bg-white/90 backdrop-blur-md z-30 shadow-sm border-b border-outline-variant/30 -mx-margin-mobile px-margin-mobile mb-6">
            <div class="flex items-center gap-3">
                <span class="material-symbols-outlined text-primary text-2xl" data-icon="menu_book">menu_book</span>
                <h1 class="font-headline-lg-mobile text-headline-lg-mobile text-primary tracking-tight">DiarySumsel</h1>
            </div>
            <div class="w-8 h-8 rounded-full overflow-hidden bg-surface-container">
                <img alt="South Sumatra Library Logo" class="w-full h-full object-cover"
                    data-alt="A professional headshot of a young woman with dark hair, smiling warmly. The lighting is soft and flattering, creating a bright and approachable corporate modern aesthetic. The background is a clean, subtle gradient of light grey to white, matching the UI's minimalist design."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIR2dw2NFbsVAVB7ng1w_9rVI7nJgJrW7Z-knwCRvtThU5BEnUkEfx3a9F6lH1v-XUrwxFMbwVqgjWQdsVVwvFIvAyYPXv0GtbHHmmSvc7wAp0k70u0bdJ6Mzn987-jWjot0wI81LlTxmYtSB3hhngXvbcbiIn-crFnU_fKkl2VEfeGMYGmNV7PxwnPphqzcq4QQAc7PfIt06a4_n5IrWBfz5Tkq6yN07K49SWM00Pm6rBbI35y-H86aiKu6sNqo1y8gjPS1DKRNE" />
            </div>
        </header>
        <!-- Page Header -->
        <div class="mb-8">
            <h2 class="font-headline-lg text-headline-lg text-primary tracking-tight">Profile</h2>
            <p class="font-body-md text-body-md text-on-surface-variant mt-1">Manage your account settings and
                preferences.</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
            <!-- Left Column: Profile Card -->
            <div class="lg:col-span-4">
                <div
                    class="bg-white rounded-xl shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 p-6 flex flex-col items-center text-center">
                    <div
                        class="w-32 h-32 rounded-full overflow-hidden bg-surface-container-low mb-4 relative ring-4 ring-white shadow-sm">
                        <img alt="Profile avatar large" class="w-full h-full object-cover"
                            data-alt="A professional headshot of a young woman with dark hair, smiling warmly. The lighting is soft and flattering, creating a bright and approachable corporate modern aesthetic. The background is a clean, subtle gradient of light grey to white, matching the UI's minimalist design."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVnQHktqV0DxvZ0cZtuCoNddyAv66GMDdep8dxxpnQ07wc6M0xgXSiVC-XJRhOxefw2LPlZEXea-3RZ0aYiE9OBZs8yib88er77Hk4hTOul9kjMio9rSt8aKc0OhpdBqWbuh563_IotLyitxmMlLTktEb9BZ-vCBwwvTU5UqQE735xbCNffKGzi3vx6upEAqQHTTIwek0M5x6p2KGh9dYX6Yl0sARVgI7tXE3W8LxA24DzGLHlwVxFr1kIX05w62Eo_x7Xyki4jKA" />
                        <button
                            class="absolute bottom-0 w-full bg-black/40 py-1 flex justify-center backdrop-blur-sm hover:bg-black/60 transition-colors">
                            <span class="material-symbols-outlined text-white text-sm"
                                data-icon="photo_camera">photo_camera</span>
                        </button>
                    </div>
                    <h3 class="font-title-md text-title-md text-primary">Sumsel Member</h3>
                    <div class="inline-flex items-center gap-1.5 px-3 py-1 bg-surface-container-low rounded-full mt-2">
                        <span class="material-symbols-outlined text-secondary-container text-sm" data-icon="stars"
                            style="font-variation-settings: 'FILL' 1;">stars</span>
                        <span class="font-label-sm text-label-sm text-primary">Platinum Member</span>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant mt-4 text-sm">Member since Jan 2023</p>
                </div>
            </div>
            <!-- Right Column: Settings List -->
            <div class="lg:col-span-8 space-y-4">
                <div
                    class="bg-white rounded-xl shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 overflow-hidden">
                    <div class="divide-y divide-outline-variant/20">
                        <a class="flex items-center justify-between p-4 hover:bg-surface-container-lowest transition-colors group"
                            href="#">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 rounded-lg bg-surface-container-low flex items-center justify-center text-primary group-hover:bg-primary-container group-hover:text-white transition-colors">
                                    <span class="material-symbols-outlined"
                                        data-icon="person_outline">person_outline</span>
                                </div>
                                <div>
                                    <h4 class="font-label-sm text-label-sm font-semibold text-primary">Informasi Pribadi
                                    </h4>
                                    <p class="font-caption text-caption text-on-surface-variant">Update your personal
                                        details</p>
                                </div>
                            </div>
                            <span
                                class="material-symbols-outlined text-outline group-hover:text-primary transition-colors"
                                data-icon="chevron_right">chevron_right</span>
                        </a>
                        <a class="flex items-center justify-between p-4 hover:bg-surface-container-lowest transition-colors group"
                            href="#">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 rounded-lg bg-surface-container-low flex items-center justify-center text-primary group-hover:bg-primary-container group-hover:text-white transition-colors">
                                    <span class="material-symbols-outlined"
                                        data-icon="lock_outline">lock_outline</span>
                                </div>
                                <div>
                                    <h4 class="font-label-sm text-label-sm font-semibold text-primary">Ubah Password
                                    </h4>
                                    <p class="font-caption text-caption text-on-surface-variant">Manage your security
                                        settings</p>
                                </div>
                            </div>
                            <span
                                class="material-symbols-outlined text-outline group-hover:text-primary transition-colors"
                                data-icon="chevron_right">chevron_right</span>
                        </a>
                        <a class="flex items-center justify-between p-4 hover:bg-surface-container-lowest transition-colors group"
                            href="#">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 rounded-lg bg-surface-container-low flex items-center justify-center text-primary group-hover:bg-primary-container group-hover:text-white transition-colors">
                                    <span class="material-symbols-outlined" data-icon="history">history</span>
                                </div>
                                <div>
                                    <h4 class="font-label-sm text-label-sm font-semibold text-primary">Riwayat
                                        Peminjaman</h4>
                                    <p class="font-caption text-caption text-on-surface-variant">View past borrowed
                                        items</p>
                                </div>
                            </div>
                            <span
                                class="material-symbols-outlined text-outline group-hover:text-primary transition-colors"
                                data-icon="chevron_right">chevron_right</span>
                        </a>
                        <a class="flex items-center justify-between p-4 hover:bg-surface-container-lowest transition-colors group"
                            href="#">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 rounded-lg bg-surface-container-low flex items-center justify-center text-primary group-hover:bg-primary-container group-hover:text-white transition-colors">
                                    <span class="material-symbols-outlined"
                                        data-icon="notifications_none">notifications_none</span>
                                </div>
                                <div>
                                    <h4 class="font-label-sm text-label-sm font-semibold text-primary">Pengaturan
                                        Notifikasi</h4>
                                    <p class="font-caption text-caption text-on-surface-variant">Choose what alerts you
                                        receive</p>
                                </div>
                            </div>
                            <span
                                class="material-symbols-outlined text-outline group-hover:text-primary transition-colors"
                                data-icon="chevron_right">chevron_right</span>
                        </a>
                        <a class="flex items-center justify-between p-4 hover:bg-surface-container-lowest transition-colors group"
                            href="#">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 rounded-lg bg-surface-container-low flex items-center justify-center text-primary group-hover:bg-primary-container group-hover:text-white transition-colors">
                                    <span class="material-symbols-outlined"
                                        data-icon="help_outline">help_outline</span>
                                </div>
                                <div>
                                    <h4 class="font-label-sm text-label-sm font-semibold text-primary">Bantuan</h4>
                                    <p class="font-caption text-caption text-on-surface-variant">Get support and read
                                        FAQs</p>
                                </div>
                            </div>
                            <span
                                class="material-symbols-outlined text-outline group-hover:text-primary transition-colors"
                                data-icon="chevron_right">chevron_right</span>
                        </a>
                    </div>
                </div>
                <!-- Logout Button -->
                <button
                    class="w-full mt-6 py-4 flex items-center justify-center gap-2 rounded-xl bg-error-container/30 hover:bg-error-container/50 text-error transition-colors border border-error/20 font-label-sm text-label-sm font-semibold">
                    <span class="material-symbols-outlined" data-icon="logout">logout</span>
                    Keluar
                </button>
            </div>
        </div>
    </main>
    <!-- Bottom Navigation Bar (Mobile Only) -->
    <nav
        class="md:hidden flex justify-around items-center h-16 px-4 pb-safe bg-white/95 dark:bg-primary/95 backdrop-blur-lg fixed bottom-0 w-full rounded-t-xl z-50 border-t border-outline-variant/20 shadow-[0_-4px_12px_rgba(0,0,0,0.05)]">
        <a class="text-on-surface-variant flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity"
            href="#">
            <span class="material-symbols-outlined" data-icon="home">home</span>
            <span class="font-caption text-caption mt-1">Home</span>
        </a>
        <a class="text-on-surface-variant flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity"
            href="#">
            <span class="material-symbols-outlined" data-icon="search">search</span>
            <span class="font-caption text-caption mt-1">Search</span>
        </a>
        <a class="text-on-surface-variant flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity"
            href="#">
            <span class="material-symbols-outlined" data-icon="local_library">local_library</span>
            <span class="font-caption text-caption mt-1">Library</span>
        </a>
        <a class="bg-secondary-container text-on-secondary-container rounded-full px-4 py-1 flex flex-col items-center active:scale-90 transition-transform"
            href="#">
            <span class="material-symbols-outlined" data-icon="person"
                style="font-variation-settings: 'FILL' 1;">person</span>
            <span class="font-caption text-caption mt-1">Profile</span>
        </a>
    </nav>
</body>

</html>
