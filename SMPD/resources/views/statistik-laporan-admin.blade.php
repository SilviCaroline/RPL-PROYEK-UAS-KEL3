<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>DiarySumsel - Stats &amp; Reports</title>
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

<body class="bg-background text-on-background antialiased flex flex-col md:flex-row min-h-screen">
    <!-- NavigationDrawer (Sidebar - Desktop) -->
    <nav
        class="hidden md:flex flex-col p-base gap-2 bg-white/90 dark:bg-primary/90 backdrop-blur-xl shadow-xl fixed left-0 top-0 h-full w-[280px] rounded-r-xl z-40">
        <div class="flex items-center gap-3 p-4 mb-4 border-b border-outline-variant/30">
            <div
                class="w-10 h-10 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-bold">
                <img alt="User Profile" class="w-full h-full rounded-full object-cover"
                    data-alt="A professional headshot of an administrative user in a corporate library setting. The lighting is clean and bright, conveying a modern SaaS platform aesthetic. Deep blue background accents provide a trustworthy corporate feel. The image is crisp and clear, suitable for a dashboard avatar."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCo5xmfAQ5J0Gc--5BagNGsLEMCRpU7gfeFcAcNmGbu9bvky0C1B1Ory-rJdwwcd69h3tJsehajUwZrfrqJbXYfDQeYOTvS-E-PKY-y9R_5Wn9MlCYUN7juYb2zdgXlzvoH-V2U5SM4BQfgxGq4_S-j4BBOfOUDTAZvoAlqCMMNe-0wGtAC-bUG-8e9c--l5gXff1a_nyZBkCPZ21yENBdXF1BRjiQ4eQx02zkEQDGxufisG9pDipv5KUCqXRWUyw2aeNIkC4T_QWw" />
            </div>
            <div>
                <h3 class="font-label-sm text-label-sm text-primary dark:text-primary-fixed-dim">Sumsel Member</h3>
                <p class="font-caption text-caption text-on-surface-variant">Platinum Member</p>
            </div>
        </div>
        <a class="flex items-center gap-3 p-3 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors"
            href="#">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="font-label-sm text-label-sm">Dashboard</span>
        </a>
        <a class="flex items-center gap-3 p-3 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors"
            href="#">
            <span class="material-symbols-outlined">library_books</span>
            <span class="font-label-sm text-label-sm">Catalog</span>
        </a>
        <a class="flex items-center gap-3 p-3 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors"
            href="#">
            <span class="material-symbols-outlined">auto_stories</span>
            <span class="font-label-sm text-label-sm">My Books</span>
        </a>
        <a class="flex items-center gap-3 p-3 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors"
            href="#">
            <span class="material-symbols-outlined">qr_code_2</span>
            <span class="font-label-sm text-label-sm">Member Card</span>
        </a>
        <a class="flex items-center gap-3 p-3 rounded-lg bg-surface-container-highest text-primary border-l-4 border-secondary-container"
            href="#">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">monitoring</span>
            <span class="font-label-sm text-label-sm font-bold">Stats</span>
        </a>
        <a class="flex items-center gap-3 p-3 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors mt-auto"
            href="#">
            <span class="material-symbols-outlined">settings</span>
            <span class="font-label-sm text-label-sm">Settings</span>
        </a>
    </nav>
    <!-- TopAppBar (Mobile) -->
    <header
        class="md:hidden sticky top-0 w-full flex items-center justify-between px-margin-mobile h-16 bg-white/90 backdrop-blur-md shadow-sm z-50 border-b border-outline-variant/30">
        <button
            class="text-primary p-2 scale-95 active:scale-90 transition-all duration-200 hover:bg-surface-container-low rounded-full">
            <span class="material-symbols-outlined">menu_book</span>
        </button>
        <h1 class="text-headline-lg font-headline-lg text-primary tracking-tight">DiarySumsel</h1>
        <div class="w-8 h-8 rounded-full bg-primary-container overflow-hidden">
            <img alt="South Sumatra Library Logo" class="w-full h-full object-cover"
                data-alt="A professional headshot of an administrative user in a corporate library setting. The lighting is clean and bright, conveying a modern SaaS platform aesthetic. Deep blue background accents provide a trustworthy corporate feel. The image is crisp and clear, suitable for a dashboard avatar."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBDdMlQR_0yCvWydpTb4zs85p59zH7HTkDcxpIcYZfeILCv-YkclPoGvF-O83emQhV5jnIbMyR8eOPCkLTDEMbyeJwMbWFk_oFE0S7GzrYafl_edxy5CL-Sf84WkRyoF2YrAZDf0aEGeANrEACh4sGFoaDT00ZSQ7qQPLwdpCffDukj08dzwGydvllCtRlizH-TMi6isNqCe5TTfaK2d9pVLs04FmNaiBuWaoInp2mhlLJX2UH97HZ9s-MfdfDfPiezZVMCMw3IPAs" />
        </div>
    </header>
    <!-- Main Content Area -->
    <main
        class="flex-1 md:ml-[280px] w-full max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-8 pb-32 md:pb-8 flex flex-col gap-gutter">
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-4">
            <div>
                <h1 class="font-headline-lg text-headline-lg text-primary tracking-tight">Statistik &amp; Reports</h1>
                <p class="font-body-md text-body-md text-on-surface-variant mt-1">Overview of library performance and
                    user engagement.</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto">
                <!-- Date Range Picker Mockup -->
                <div
                    class="flex items-center bg-white border border-outline-variant rounded-lg px-3 py-2 shadow-sm text-on-surface">
                    <span class="material-symbols-outlined text-outline mr-2 text-[20px]">calendar_today</span>
                    <span class="font-label-sm text-label-sm">Oct 1 - Oct 31, 2023</span>
                    <span class="material-symbols-outlined text-outline ml-2 text-[20px]">arrow_drop_down</span>
                </div>
                <!-- Export Button -->
                <button
                    class="bg-primary text-on-primary hover:bg-primary-container hover:shadow-md transition-all duration-200 px-4 py-2 rounded-lg font-label-sm text-label-sm flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-[18px]">download</span>
                    Export Report
                </button>
            </div>
        </div>
        <!-- KPI Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
            <div
                class="bg-white rounded-xl p-5 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 hover:scale-[1.02] transition-transform duration-200">
                <div class="flex justify-between items-start mb-2">
                    <p class="font-label-sm text-label-sm text-on-surface-variant">Total Peminjaman</p>
                    <span
                        class="material-symbols-outlined text-surface-tint bg-surface-container-low p-1.5 rounded-lg text-[20px]">book</span>
                </div>
                <h3 class="font-display-lg text-display-lg text-primary">4,821</h3>
                <div class="flex items-center gap-1 mt-2 text-emerald-600">
                    <span class="material-symbols-outlined text-[16px]">trending_up</span>
                    <span class="font-caption text-caption font-medium">+12.5% from last month</span>
                </div>
            </div>
            <div
                class="bg-white rounded-xl p-5 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 hover:scale-[1.02] transition-transform duration-200">
                <div class="flex justify-between items-start mb-2">
                    <p class="font-label-sm text-label-sm text-on-surface-variant">Active Members</p>
                    <span
                        class="material-symbols-outlined text-secondary bg-secondary-fixed p-1.5 rounded-lg text-[20px]">group</span>
                </div>
                <h3 class="font-display-lg text-display-lg text-primary">1,204</h3>
                <div class="flex items-center gap-1 mt-2 text-emerald-600">
                    <span class="material-symbols-outlined text-[16px]">trending_up</span>
                    <span class="font-caption text-caption font-medium">+3.2% from last month</span>
                </div>
            </div>
            <div
                class="bg-white rounded-xl p-5 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 hover:scale-[1.02] transition-transform duration-200">
                <div class="flex justify-between items-start mb-2">
                    <p class="font-label-sm text-label-sm text-on-surface-variant">New Catalog Items</p>
                    <span
                        class="material-symbols-outlined text-surface-tint bg-surface-container-low p-1.5 rounded-lg text-[20px]">library_add</span>
                </div>
                <h3 class="font-display-lg text-display-lg text-primary">342</h3>
                <div class="flex items-center gap-1 mt-2 text-on-surface-variant">
                    <span class="material-symbols-outlined text-[16px]">horizontal_rule</span>
                    <span class="font-caption text-caption">Steady addition rate</span>
                </div>
            </div>
            <div
                class="bg-white rounded-xl p-5 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 hover:scale-[1.02] transition-transform duration-200">
                <div class="flex justify-between items-start mb-2">
                    <p class="font-label-sm text-label-sm text-on-surface-variant">Overdue Returns</p>
                    <span
                        class="material-symbols-outlined text-error bg-error-container p-1.5 rounded-lg text-[20px]">warning</span>
                </div>
                <h3 class="font-display-lg text-display-lg text-primary">56</h3>
                <div class="flex items-center gap-1 mt-2 text-error">
                    <span class="material-symbols-outlined text-[16px]">trending_up</span>
                    <span class="font-caption text-caption font-medium">+5 cases require attention</span>
                </div>
            </div>
        </div>
        <!-- Bento Grid Layout for Charts -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter mt-2">
            <!-- Line Chart: Peminjaman per Bulan (Spans 2 columns on large screens) -->
            <div
                class="bg-white rounded-xl p-6 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 lg:col-span-2 flex flex-col">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="font-title-md text-title-md text-primary">Peminjaman per Bulan</h2>
                    <button
                        class="p-1.5 rounded-md hover:bg-surface-container text-on-surface-variant transition-colors">
                        <span class="material-symbols-outlined">more_vert</span>
                    </button>
                </div>
                <!-- CSS Chart Mockup -->
                <div class="relative flex-1 min-h-[300px] flex items-end gap-2 pt-10">
                    <!-- Y Axis Labels -->
                    <div
                        class="absolute left-0 top-0 h-full flex flex-col justify-between text-on-surface-variant font-caption text-caption pb-8 pr-2 text-right w-10">
                        <span>1k</span>
                        <span>750</span>
                        <span>500</span>
                        <span>250</span>
                        <span>0</span>
                    </div>
                    <!-- Chart Area -->
                    <div
                        class="flex-1 h-full ml-10 border-l border-b border-outline-variant/30 flex items-end justify-between px-4 pb-0 relative">
                        <!-- Grid Lines -->
                        <div class="absolute inset-0 flex flex-col justify-between z-0 ml-4 mb-8">
                            <div class="border-t border-outline-variant/20 w-full"></div>
                            <div class="border-t border-outline-variant/20 w-full"></div>
                            <div class="border-t border-outline-variant/20 w-full"></div>
                            <div class="border-t border-outline-variant/20 w-full"></div>
                            <div class="border-t border-outline-variant/20 w-full"></div>
                        </div>
                        <!-- Data Points (Mocked with simple bars/lines for visual structure) -->
                        <div class="w-1/6 flex flex-col items-center z-10 h-full justify-end">
                            <div class="w-2 bg-surface-tint rounded-t-sm h-[40%] mb-1 relative group cursor-pointer">
                                <div
                                    class="absolute -top-8 left-1/2 -translate-x-1/2 bg-inverse-surface text-inverse-on-surface px-2 py-1 rounded text-xs opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap shadow-lg">
                                    400</div>
                            </div>
                            <span class="font-caption text-caption text-on-surface-variant mt-2">Jan</span>
                        </div>
                        <div class="w-1/6 flex flex-col items-center z-10 h-full justify-end">
                            <div class="w-2 bg-surface-tint rounded-t-sm h-[60%] mb-1 relative group cursor-pointer">
                                <div
                                    class="absolute -top-8 left-1/2 -translate-x-1/2 bg-inverse-surface text-inverse-on-surface px-2 py-1 rounded text-xs opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap shadow-lg">
                                    600</div>
                            </div>
                            <span class="font-caption text-caption text-on-surface-variant mt-2">Feb</span>
                        </div>
                        <div class="w-1/6 flex flex-col items-center z-10 h-full justify-end">
                            <div class="w-2 bg-surface-tint rounded-t-sm h-[50%] mb-1 relative group cursor-pointer">
                                <div
                                    class="absolute -top-8 left-1/2 -translate-x-1/2 bg-inverse-surface text-inverse-on-surface px-2 py-1 rounded text-xs opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap shadow-lg">
                                    500</div>
                            </div>
                            <span class="font-caption text-caption text-on-surface-variant mt-2">Mar</span>
                        </div>
                        <div class="w-1/6 flex flex-col items-center z-10 h-full justify-end">
                            <div class="w-2 bg-surface-tint rounded-t-sm h-[80%] mb-1 relative group cursor-pointer">
                                <div
                                    class="absolute -top-8 left-1/2 -translate-x-1/2 bg-inverse-surface text-inverse-on-surface px-2 py-1 rounded text-xs opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap shadow-lg">
                                    800</div>
                            </div>
                            <span class="font-caption text-caption text-on-surface-variant mt-2">Apr</span>
                        </div>
                        <div class="w-1/6 flex flex-col items-center z-10 h-full justify-end">
                            <div class="w-2 bg-surface-tint rounded-t-sm h-[70%] mb-1 relative group cursor-pointer">
                                <div
                                    class="absolute -top-8 left-1/2 -translate-x-1/2 bg-inverse-surface text-inverse-on-surface px-2 py-1 rounded text-xs opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap shadow-lg">
                                    700</div>
                            </div>
                            <span class="font-caption text-caption text-on-surface-variant mt-2">May</span>
                        </div>
                        <div class="w-1/6 flex flex-col items-center z-10 h-full justify-end">
                            <div class="w-2 bg-secondary rounded-t-sm h-[95%] mb-1 relative group cursor-pointer">
                                <div
                                    class="absolute -top-8 left-1/2 -translate-x-1/2 bg-inverse-surface text-inverse-on-surface px-2 py-1 rounded text-xs opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap shadow-lg">
                                    950</div>
                            </div>
                            <span class="font-caption text-caption font-bold text-primary mt-2">Jun</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bar Chart: Kategori Terpopuler -->
            <div
                class="bg-white rounded-xl p-6 shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 flex flex-col">
                <h2 class="font-title-md text-title-md text-primary mb-6">Kategori Terpopuler</h2>
                <div class="flex-1 flex flex-col gap-4 justify-center">
                    <!-- Progress Bar 1 -->
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="font-label-sm text-label-sm text-on-surface">Fiksi &amp; Sastra</span>
                            <span class="font-label-sm text-label-sm text-primary font-bold">45%</span>
                        </div>
                        <div class="w-full bg-surface-container rounded-full h-2.5">
                            <div class="bg-surface-tint h-2.5 rounded-full" style="width: 45%"></div>
                        </div>
                    </div>
                    <!-- Progress Bar 2 -->
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="font-label-sm text-label-sm text-on-surface">Sejarah Lokal</span>
                            <span class="font-label-sm text-label-sm text-primary font-bold">28%</span>
                        </div>
                        <div class="w-full bg-surface-container rounded-full h-2.5">
                            <div class="bg-secondary h-2.5 rounded-full" style="width: 28%"></div>
                        </div>
                    </div>
                    <!-- Progress Bar 3 -->
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="font-label-sm text-label-sm text-on-surface">Teknologi</span>
                            <span class="font-label-sm text-label-sm text-primary font-bold">15%</span>
                        </div>
                        <div class="w-full bg-surface-container rounded-full h-2.5">
                            <div class="bg-surface-dim h-2.5 rounded-full" style="width: 15%"></div>
                        </div>
                    </div>
                    <!-- Progress Bar 4 -->
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="font-label-sm text-label-sm text-on-surface">Sains Terapan</span>
                            <span class="font-label-sm text-label-sm text-primary font-bold">12%</span>
                        </div>
                        <div class="w-full bg-surface-container rounded-full h-2.5">
                            <div class="bg-outline-variant h-2.5 rounded-full" style="width: 12%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- List: Member Paling Aktif -->
        <div
            class="bg-white rounded-xl shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-outline-variant/20 mt-2 overflow-hidden">
            <div
                class="p-6 border-b border-outline-variant/20 flex justify-between items-center bg-surface-container-low/50">
                <h2 class="font-title-md text-title-md text-primary">Member Paling Aktif</h2>
                <a class="font-label-sm text-label-sm text-surface-tint hover:underline" href="#">View All</a>
            </div>
            <div class="w-full overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr
                            class="bg-surface-container-lowest border-b border-outline-variant/30 font-label-sm text-label-sm text-on-surface-variant">
                            <th class="p-4 font-medium">Member</th>
                            <th class="p-4 font-medium">ID Number</th>
                            <th class="p-4 font-medium">Buku Dipinjam</th>
                            <th class="p-4 font-medium">Status</th>
                            <th class="p-4 font-medium text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="font-body-md text-body-md text-on-surface">
                        <tr
                            class="border-b border-outline-variant/10 hover:bg-surface-container-low transition-colors group">
                            <td class="p-4 flex items-center gap-3">
                                <div
                                    class="w-8 h-8 rounded-full bg-surface-variant flex items-center justify-center text-primary font-bold text-sm">
                                    AW</div>
                                <span class="font-medium">Andi Wijaya</span>
                            </td>
                            <td class="p-4 text-on-surface-variant">MBR-2023-089</td>
                            <td class="p-4">42 <span class="text-xs text-on-surface-variant ml-1">books</span></td>
                            <td class="p-4">
                                <span
                                    class="px-2 py-1 bg-surface-container-high text-primary text-xs rounded-md font-medium border border-primary-fixed-dim">Platinum</span>
                            </td>
                            <td class="p-4 text-right">
                                <button
                                    class="text-surface-tint hover:text-primary transition-colors opacity-0 group-hover:opacity-100">
                                    <span class="material-symbols-outlined text-[20px]">visibility</span>
                                </button>
                            </td>
                        </tr>
                        <tr
                            class="border-b border-outline-variant/10 hover:bg-surface-container-low transition-colors group">
                            <td class="p-4 flex items-center gap-3">
                                <div
                                    class="w-8 h-8 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-bold text-sm">
                                    SR</div>
                                <span class="font-medium">Siti Rahmawati</span>
                            </td>
                            <td class="p-4 text-on-surface-variant">MBR-2022-142</td>
                            <td class="p-4">38 <span class="text-xs text-on-surface-variant ml-1">books</span></td>
                            <td class="p-4">
                                <span
                                    class="px-2 py-1 bg-surface-container-high text-primary text-xs rounded-md font-medium border border-primary-fixed-dim">Platinum</span>
                            </td>
                            <td class="p-4 text-right">
                                <button
                                    class="text-surface-tint hover:text-primary transition-colors opacity-0 group-hover:opacity-100">
                                    <span class="material-symbols-outlined text-[20px]">visibility</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-surface-container-low transition-colors group">
                            <td class="p-4 flex items-center gap-3">
                                <div
                                    class="w-8 h-8 rounded-full bg-tertiary-container text-on-tertiary flex items-center justify-center font-bold text-sm">
                                    BP</div>
                                <span class="font-medium">Budi Pratama</span>
                            </td>
                            <td class="p-4 text-on-surface-variant">MBR-2024-012</td>
                            <td class="p-4">27 <span class="text-xs text-on-surface-variant ml-1">books</span></td>
                            <td class="p-4">
                                <span
                                    class="px-2 py-1 bg-surface-container text-on-surface-variant text-xs rounded-md border border-outline-variant/50">Gold</span>
                            </td>
                            <td class="p-4 text-right">
                                <button
                                    class="text-surface-tint hover:text-primary transition-colors opacity-0 group-hover:opacity-100">
                                    <span class="material-symbols-outlined text-[20px]">visibility</span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <!-- BottomNavBar (Mobile) -->
    <nav
        class="md:hidden flex justify-around items-center h-16 px-4 pb-safe bg-white/95 dark:bg-primary/95 backdrop-blur-lg border-t border-outline-variant/20 shadow-[0_-4px_12px_rgba(0,0,0,0.05)] fixed bottom-0 w-full rounded-t-xl z-50">
        <a class="text-on-surface-variant dark:text-on-tertiary-container flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity"
            href="#">
            <span class="material-symbols-outlined">home</span>
            <span class="font-caption text-caption mt-1">Home</span>
        </a>
        <a class="text-on-surface-variant dark:text-on-tertiary-container flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity"
            href="#">
            <span class="material-symbols-outlined">search</span>
            <span class="font-caption text-caption mt-1">Search</span>
        </a>
        <a class="text-on-surface-variant dark:text-on-tertiary-container flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity"
            href="#">
            <span class="material-symbols-outlined">local_library</span>
            <span class="font-caption text-caption mt-1">Library</span>
        </a>
        <a class="bg-secondary-container dark:bg-secondary text-on-secondary-container dark:text-on-secondary rounded-full px-4 py-1 flex flex-col items-center"
            href="#">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">person</span>
            <span class="font-caption text-caption mt-1 font-medium">Profile</span>
        </a>
    </nav>
</body>

</html>
