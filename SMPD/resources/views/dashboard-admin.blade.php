<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>DiarySumsel - Admin Dashboard</title>
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
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-background text-on-background font-body-md min-h-screen flex">
    <!-- NavigationDrawer (Sidebar) - Hidden on Mobile, Fixed on Desktop -->
    <aside
        class="hidden md:flex flex-col p-base gap-2 bg-white/90 backdrop-blur-xl fixed left-0 top-0 h-full w-[280px] rounded-r-xl shadow-2xl z-40">
        <!-- Header (Profile) -->
        <div class="flex items-center gap-3 p-4 mb-4">
            <img alt="User Profile" class="w-10 h-10 rounded-full object-cover shadow-sm"
                data-alt="A professional headshot of a middle-aged man with short brown hair, wearing a dark blue suit jacket and white shirt. The background is a slightly blurred, bright modern office setting with glass walls. The lighting is soft and flattering, creating a trustworthy and corporate aesthetic suitable for an administrator profile."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCRtnqpMVoLorL_-7ptVNzhx_dmllMxM67yEHPYkLv_sVkBxsUxI6PKX6MbNUNRDZ37sIf2yn7VJfRLH2Gw15wDTQhGfFXpjPB3I2AHil7ZQgkXAIL3uHthkvVZ7Dz1ziZygN4scfSxWWP7v7Zym4bOfLgniLJXbRYY0TVyfEwBHzyFH9JDcZfMfwqS84hugJrQOe7P6P1kfA8P3za8d11I-DtnS6uLFG43tD42msXVbN4AVkbj7DhxXuOkF_W8iPBUTy5uQtl9Z2w" />
            <div class="flex flex-col">
                <span class="font-label-sm text-label-sm text-primary">Sumsel Member</span>
                <span class="font-caption text-caption text-on-surface-variant">Platinum Member</span>
            </div>
        </div>
        <!-- Navigation Links -->
        <nav class="flex-1 overflow-y-auto">
            <ul class="flex flex-col gap-1">
                <li>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-surface-container-highest text-primary border-l-4 border-secondary-container transition-colors font-label-sm text-label-sm"
                        href="#">
                        <span class="material-symbols-outlined"
                            style="font-variation-settings: 'FILL' 1;">dashboard</span>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors font-label-sm text-label-sm"
                        href="#">
                        <span class="material-symbols-outlined">library_books</span>
                        Catalog
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors font-label-sm text-label-sm"
                        href="#">
                        <span class="material-symbols-outlined">auto_stories</span>
                        My Books
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors font-label-sm text-label-sm"
                        href="#">
                        <span class="material-symbols-outlined">qr_code_2</span>
                        Member Card
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors font-label-sm text-label-sm"
                        href="#">
                        <span class="material-symbols-outlined">monitoring</span>
                        Stats
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Settings at Bottom -->
        <div class="mt-auto pt-4 border-t border-outline-variant/20">
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors font-label-sm text-label-sm"
                href="#">
                <span class="material-symbols-outlined">settings</span>
                Settings
            </a>
        </div>
    </aside>
    <!-- Main Content Area -->
    <main class="flex-1 md:ml-[280px] flex flex-col min-h-screen">
        <!-- TopAppBar (Mobile & Desktop) -->
        <header
            class="sticky top-0 w-full flex items-center justify-between px-margin-mobile md:px-margin-desktop h-16 bg-white/90 backdrop-blur-md shadow-sm border-b border-outline-variant/30 z-30">
            <!-- Mobile Menu Icon (Hidden on Desktop) -->
            <button
                class="md:hidden p-2 text-on-surface-variant hover:bg-surface-container-low rounded-full transition-all duration-200 scale-95 active:scale-90">
                <span class="material-symbols-outlined">menu</span>
            </button>
            <!-- Brand -->
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-[28px]"
                    style="font-variation-settings: 'FILL' 1;">menu_book</span>
                <span class="text-headline-lg font-headline-lg text-primary tracking-tight">DiarySumsel</span>
            </div>
            <!-- Avatar -->
            <div class="flex items-center gap-4">
                <button
                    class="p-2 text-on-surface-variant hover:bg-surface-container-low rounded-full transition-all duration-200 scale-95 active:scale-90 relative">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="absolute top-1 right-1 w-2 h-2 bg-error rounded-full"></span>
                </button>
                <img alt="South Sumatra Library Logo"
                    class="w-8 h-8 rounded-full border border-outline-variant/50 object-cover hidden md:block"
                    data-alt="A stylized, modern, abstract logo mark featuring geometric shapes in deep blue and vibrant orange, suggesting an open book or a soaring bird. The design is clean, corporate, and rendered against a pristine white background. It serves as the official seal for a regional library system."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAOkjnymD4rhqbe1s7wP8mE6m40nNQ3R0EWUAaISjlmMAAOEjlC6nsTRNAST_Sr_UV8S2TvMP-sxN2pFDOpPv0AqC6b1T908gbHEqOJM9U3K--ZUjWJdYh6qAtd-TGguxmnll2kLTneDQP_JPkLxAwiizl4FqteNstI-x9j-BaPJwDJfhenPS8kIGlPW4MfLYD3l1WV0x5JCZgrla1oPfnnwlcIYg6qGQQ4PHmfIV9RMGZ6Zewsb9gpWJS7O84CXR8UmemY0Z3fLDc" />
            </div>
        </header>
        <!-- Dashboard Canvas -->
        <div class="p-margin-mobile md:p-margin-desktop flex-1 space-y-gutter pb-24 md:pb-margin-desktop">
            <!-- Page Title -->
            <div class="flex flex-col gap-1">
                <h1 class="font-headline-lg text-headline-lg text-on-background">Overview</h1>
                <p class="font-body-md text-body-md text-on-surface-variant">Real-time statistics and quick actions for
                    librarians.</p>
            </div>
            <!-- Stats Grid -->
            <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-base md:gap-gutter">
                <!-- Stat Card 1 -->
                <div
                    class="bg-white rounded-xl p-6 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 hover:scale-[1.02] hover:shadow-[0_8px_24px_rgba(0,30,64,0.1)] transition-all duration-200 flex flex-col gap-4">
                    <div class="flex justify-between items-start">
                        <div class="p-3 bg-surface-container-low text-primary rounded-lg">
                            <span class="material-symbols-outlined">library_books</span>
                        </div>
                        <span
                            class="font-label-sm text-label-sm text-primary bg-primary-fixed px-2 py-1 rounded-md">+124
                            this week</span>
                    </div>
                    <div>
                        <p class="font-caption text-caption text-on-surface-variant mb-1">Total Books</p>
                        <h2 class="font-display-lg text-display-lg text-on-surface">45,231</h2>
                    </div>
                </div>
                <!-- Stat Card 2 -->
                <div
                    class="bg-white rounded-xl p-6 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 hover:scale-[1.02] hover:shadow-[0_8px_24px_rgba(0,30,64,0.1)] transition-all duration-200 flex flex-col gap-4">
                    <div class="flex justify-between items-start">
                        <div class="p-3 bg-secondary-fixed text-secondary rounded-lg">
                            <span class="material-symbols-outlined">group</span>
                        </div>
                        <span class="font-label-sm text-label-sm text-primary bg-primary-fixed px-2 py-1 rounded-md">+45
                            this week</span>
                    </div>
                    <div>
                        <p class="font-caption text-caption text-on-surface-variant mb-1">Total Members</p>
                        <h2 class="font-display-lg text-display-lg text-on-surface">12,804</h2>
                    </div>
                </div>
                <!-- Stat Card 3 -->
                <div
                    class="bg-white rounded-xl p-6 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 hover:scale-[1.02] hover:shadow-[0_8px_24px_rgba(0,30,64,0.1)] transition-all duration-200 flex flex-col gap-4">
                    <div class="flex justify-between items-start">
                        <div class="p-3 bg-surface-container-low text-primary rounded-lg">
                            <span class="material-symbols-outlined">menu_book</span>
                        </div>
                    </div>
                    <div>
                        <p class="font-caption text-caption text-on-surface-variant mb-1">Borrowed Today</p>
                        <h2 class="font-display-lg text-display-lg text-on-surface">342</h2>
                    </div>
                </div>
                <!-- Stat Card 4 -->
                <div
                    class="bg-white rounded-xl p-6 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 hover:scale-[1.02] hover:shadow-[0_8px_24px_rgba(0,30,64,0.1)] transition-all duration-200 flex flex-col gap-4">
                    <div class="flex justify-between items-start">
                        <div class="p-3 bg-error-container text-error rounded-lg">
                            <span class="material-symbols-outlined">account_balance_wallet</span>
                        </div>
                    </div>
                    <div>
                        <p class="font-caption text-caption text-on-surface-variant mb-1">Active Fines</p>
                        <h2 class="font-display-lg text-display-lg text-on-surface">Rp 4.5M</h2>
                    </div>
                </div>
            </section>
            <!-- Bento Grid Layout for Main Content -->
            <section class="grid grid-cols-1 lg:grid-cols-3 gap-base md:gap-gutter">
                <!-- Main Chart Area (Spans 2 columns on large screens) -->
                <div
                    class="lg:col-span-2 bg-white rounded-xl p-6 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 flex flex-col">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="font-title-md text-title-md text-on-surface">Monthly Borrowing Trends</h3>
                        <button
                            class="p-2 text-on-surface-variant hover:bg-surface-container-low rounded-full transition-colors">
                            <span class="material-symbols-outlined">more_vert</span>
                        </button>
                    </div>
                    <!-- Chart Placeholder (Stylized with Tailwind) -->
                    <div
                        class="flex-1 min-h-[300px] flex items-end gap-2 pt-4 border-b border-l border-outline-variant/30 pl-4 pb-4">
                        <div
                            class="w-full bg-primary-container/20 rounded-t-sm h-[40%] hover:bg-primary-container/40 transition-colors relative group">
                            <div
                                class="absolute -top-10 left-1/2 -translate-x-1/2 bg-surface text-on-surface text-caption font-caption px-2 py-1 rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-10">
                                40%</div>
                        </div>
                        <div
                            class="w-full bg-secondary-container/60 rounded-t-sm h-[60%] hover:bg-secondary-container/80 transition-colors relative group">
                            <div
                                class="absolute -top-10 left-1/2 -translate-x-1/2 bg-surface text-on-surface text-caption font-caption px-2 py-1 rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-10">
                                60%</div>
                        </div>
                        <div
                            class="w-full bg-primary-container/40 rounded-t-sm h-[50%] hover:bg-primary-container/60 transition-colors relative group">
                        </div>
                        <div
                            class="w-full bg-primary-container/80 rounded-t-sm h-[80%] hover:bg-primary-container transition-colors relative group">
                        </div>
                        <div
                            class="w-full bg-secondary-container rounded-t-sm h-[70%] hover:bg-secondary-container/80 transition-colors relative group">
                        </div>
                        <div
                            class="w-full bg-primary-container/60 rounded-t-sm h-[90%] hover:bg-primary-container/80 transition-colors relative group">
                        </div>
                        <div
                            class="w-full bg-primary rounded-t-sm h-[100%] hover:bg-primary/90 transition-colors relative group">
                        </div>
                    </div>
                    <div class="flex justify-between mt-2 text-caption font-caption text-on-surface-variant px-4">
                        <span>Jan</span>
                        <span>Feb</span>
                        <span>Mar</span>
                        <span>Apr</span>
                        <span>May</span>
                        <span>Jun</span>
                        <span>Jul</span>
                    </div>
                </div>
                <!-- Right Column (Quick Actions & Recent Activities) -->
                <div class="flex flex-col gap-base md:gap-gutter">
                    <!-- Quick Actions -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20">
                        <h3 class="font-title-md text-title-md text-on-surface mb-4">Quick Actions</h3>
                        <div class="grid grid-cols-2 gap-3">
                            <button
                                class="flex flex-col items-center justify-center p-4 bg-surface-container-low hover:bg-surface-container rounded-lg transition-colors border border-outline-variant/20 gap-2">
                                <span class="material-symbols-outlined text-primary">add_circle</span>
                                <span class="font-label-sm text-label-sm text-on-surface">Add Book</span>
                            </button>
                            <button
                                class="flex flex-col items-center justify-center p-4 bg-surface-container-low hover:bg-surface-container rounded-lg transition-colors border border-outline-variant/20 gap-2">
                                <span class="material-symbols-outlined text-primary">qr_code_scanner</span>
                                <span class="font-label-sm text-label-sm text-on-surface">Scan Return</span>
                            </button>
                            <button
                                class="flex flex-col items-center justify-center p-4 bg-surface-container-low hover:bg-surface-container rounded-lg transition-colors border border-outline-variant/20 gap-2 col-span-2 bg-primary text-on-primary hover:bg-primary/90">
                                <span class="material-symbols-outlined">summarize</span>
                                <span class="font-label-sm text-label-sm">Generate Report</span>
                            </button>
                        </div>
                    </div>
                    <!-- Recent Activities -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 flex-1">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="font-title-md text-title-md text-on-surface">Recent Activities</h3>
                            <a class="font-label-sm text-label-sm text-primary hover:underline" href="#">View
                                All</a>
                        </div>
                        <ul class="flex flex-col gap-4">
                            <li class="flex items-start gap-3">
                                <div
                                    class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center flex-shrink-0 text-primary">
                                    <span class="material-symbols-outlined text-[18px]">person_add</span>
                                </div>
                                <div>
                                    <p class="font-body-md text-body-md text-on-surface leading-tight">New member
                                        registration: <strong>Budi Santoso</strong></p>
                                    <span class="font-caption text-caption text-on-surface-variant">2 mins ago</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div
                                    class="w-8 h-8 rounded-full bg-secondary-container flex items-center justify-center flex-shrink-0 text-on-secondary-container">
                                    <span class="material-symbols-outlined text-[18px]">keyboard_return</span>
                                </div>
                                <div>
                                    <p class="font-body-md text-body-md text-on-surface leading-tight">Book returned:
                                        <strong>Laskar Pelangi</strong></p>
                                    <span class="font-caption text-caption text-on-surface-variant">15 mins ago</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div
                                    class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center flex-shrink-0 text-primary">
                                    <span class="material-symbols-outlined text-[18px]">menu_book</span>
                                </div>
                                <div>
                                    <p class="font-body-md text-body-md text-on-surface leading-tight">Book borrowed:
                                        <strong>Bumi Manusia</strong></p>
                                    <span class="font-caption text-caption text-on-surface-variant">1 hour ago</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!-- BottomNavBar (Mobile Only) -->
    <nav
        class="md:hidden flex justify-around items-center h-16 px-4 pb-safe bg-white/95 backdrop-blur-lg shadow-[0_-4px_12px_rgba(0,0,0,0.05)] border-t border-outline-variant/20 fixed bottom-0 w-full rounded-t-xl z-50">
        <a class="bg-secondary-container text-on-secondary-container rounded-full px-4 py-1 flex flex-col items-center"
            href="#">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">home</span>
            <span class="font-caption text-caption">Home</span>
        </a>
        <a class="text-on-surface-variant flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity"
            href="#">
            <span class="material-symbols-outlined">search</span>
            <span class="font-caption text-caption">Search</span>
        </a>
        <a class="text-on-surface-variant flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity"
            href="#">
            <span class="material-symbols-outlined">local_library</span>
            <span class="font-caption text-caption">Library</span>
        </a>
        <a class="text-on-surface-variant flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity"
            href="#">
            <span class="material-symbols-outlined">person</span>
            <span class="font-caption text-caption">Profile</span>
        </a>
    </nav>
</body>

</html>
