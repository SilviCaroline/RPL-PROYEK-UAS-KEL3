<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Kelola Buku - DiarySumsel</title>
    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Tailwind Config -->
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

        .icon-fill {
            font-variation-settings: 'FILL' 1;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body
    class="bg-background text-on-background antialiased min-h-screen flex selection:bg-primary-container selection:text-on-primary-container">
    <!-- NavigationDrawer (Desktop) -->
    <aside
        class="fixed left-0 top-0 h-full w-[280px] rounded-r-xl shadow-2xl dark:shadow-none shadow-xl bg-white/90 dark:bg-primary/90 backdrop-blur-xl hidden md:flex flex-col p-base gap-2 z-40 border-r border-outline-variant/20">
        <!-- Header -->
        <div class="px-4 py-6 flex items-center gap-3">
            <img alt="User Profile" class="w-12 h-12 rounded-full object-cover border-2 border-surface-container"
                data-alt="A professional headshot of a person looking directly at the camera. The lighting is soft and studio-quality, emphasizing a modern, clean corporate style. The background is a subtle, neutral soft grey, aligning perfectly with a light-mode UI aesthetic. The overall mood is approachable, reliable, and sophisticated."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAPE8lfy4y1jg71hdfcGCJDCwl3_-hVPPcCQucVe29FCGpeZdjW_RL1teEyZgqXeyVY_sVzLWvdJ5apM1T8yb-mS-_4xpflxvd0_nvj5XEm_LL3nyHX74Qrx80rgOl-k5nuZPH7G9nWvFJLNN44OI7DgIAi2UhHoRwBbXXWcsFQd-cdr_93yKZDqYv0U0cXyzGgY4JdKuRqaEgn0b4OMQyUtyG0olBGHi7FvBdo-d79mkQt8PhcoNL0kfDUj07nfZ9X9JD5ClB34B4" />
            <div>
                <h2 class="font-label-sm text-label-sm text-primary dark:text-primary-fixed-dim font-bold">Sumsel Member
                </h2>
                <p class="font-caption text-caption text-on-surface-variant">Platinum Member</p>
            </div>
        </div>
        <!-- Navigation Links -->
        <nav class="flex-1 space-y-1 mt-4">
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors translate-x-0 transition-transform duration-300"
                href="#">
                <span class="material-symbols-outlined text-[20px]" data-icon="dashboard">dashboard</span>
                <span class="font-label-sm text-label-sm">Dashboard</span>
            </a>
            <!-- Active State: Catalog -->
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-surface-container-highest dark:bg-primary-container text-primary dark:text-primary-fixed border-l-4 border-secondary-container translate-x-0 transition-transform duration-300"
                href="#">
                <span class="material-symbols-outlined text-[20px] icon-fill"
                    data-icon="library_books">library_books</span>
                <span class="font-label-sm text-label-sm font-bold">Catalog</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors translate-x-0 transition-transform duration-300"
                href="#">
                <span class="material-symbols-outlined text-[20px]" data-icon="auto_stories">auto_stories</span>
                <span class="font-label-sm text-label-sm">My Books</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors translate-x-0 transition-transform duration-300"
                href="#">
                <span class="material-symbols-outlined text-[20px]" data-icon="qr_code_2">qr_code_2</span>
                <span class="font-label-sm text-label-sm">Member Card</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors translate-x-0 transition-transform duration-300"
                href="#">
                <span class="material-symbols-outlined text-[20px]" data-icon="monitoring">monitoring</span>
                <span class="font-label-sm text-label-sm">Stats</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant dark:text-on-tertiary-container hover:bg-surface-container dark:hover:bg-tertiary-container transition-colors translate-x-0 transition-transform duration-300"
                href="#">
                <span class="material-symbols-outlined text-[20px]" data-icon="settings">settings</span>
                <span class="font-label-sm text-label-sm">Settings</span>
            </a>
        </nav>
    </aside>
    <!-- Main Content Wrapper -->
    <div class="flex-1 flex flex-col min-h-screen md:ml-[280px] w-full">
        <!-- TopAppBar -->
        <header
            class="bg-white/90 dark:bg-primary/90 backdrop-blur-md docked full-width top-0 z-50 border-b border-outline-variant/30 dark:border-outline/20 shadow-sm sticky top-0 w-full flex items-center justify-between px-margin-mobile md:px-margin-desktop h-16">
            <div class="flex items-center gap-3">
                <button
                    class="md:hidden text-on-surface-variant hover:text-primary transition-all duration-200 scale-95 active:scale-90 flex items-center justify-center">
                    <span class="material-symbols-outlined" data-icon="menu">menu</span>
                </button>
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary dark:text-primary-fixed"
                        data-icon="menu_book">menu_book</span>
                    <span
                        class="text-headline-lg font-headline-lg text-primary dark:text-primary-fixed tracking-tight">DiarySumsel</span>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="w-8 h-8 rounded-full overflow-hidden border border-outline-variant/30">
                    <img alt="South Sumatra Library Logo" class="w-full h-full object-cover"
                        data-alt="A clean, minimalist logo graphic representing a library or educational institution. The design features subtle geometric shapes in deep corporate blue and soft white, evoking a sense of trust and modernity. The lighting is flat and graphic, perfect for a high-end SaaS interface avatar."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDPnXA5UNbBm_FaRht1_AzUMQ0FGFh95jbB1bBn1omk22E3aSekkMbrcopHCRreI3TDusBsqm8NVDCidAaAKdKGmUUwo5Zl4D93xZjKQADXPUirypwqf2l8xjn_3IJUgo3R0Ot0hhN_nHiiQsRBDU34nrVfSYp_J-6_-neJ3xC4T9rxDmIt0A9VTtbANHGvIeaEHq2-qFvnpZhElvUpQvwhifj3zB1DjsX_ZxoM8Rw9q_nLNmkR4hWnYnkV3JVBlW8_VLDMv13lI64" />
                </div>
            </div>
        </header>
        <!-- Main Workspace -->
        <main
            class="flex-1 p-margin-mobile md:p-margin-desktop pb-24 md:pb-margin-desktop flex flex-col gap-6 max-w-container-max mx-auto w-full">
            <!-- Page Header & Actions -->
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <h1 class="font-headline-lg text-headline-lg text-on-background">Kelola Buku</h1>
                    <p class="font-body-md text-body-md text-on-surface-variant mt-1">Manage library catalog, update
                        stock, and edit book details.</p>
                </div>
                <!-- Desktop Primary Action -->
                <button
                    class="hidden md:flex items-center gap-2 bg-primary text-on-primary px-6 py-3 rounded-xl font-label-sm text-label-sm hover:bg-primary-container hover:text-on-primary-container transition-all shadow-[0_4px_12px_rgba(0,30,64,0.1)] hover:shadow-[0_6px_16px_rgba(0,30,64,0.15)]">
                    <span class="material-symbols-outlined text-[18px]" data-icon="add">add</span>
                    Tambah Buku Baru
                </button>
            </div>
            <!-- Advanced Search & Filters (Glassmorphism Surface) -->
            <div
                class="bg-white/80 backdrop-blur-xl border border-white/40 shadow-[0_4px_24px_rgba(0,30,64,0.04)] rounded-2xl p-4 flex flex-col lg:flex-row gap-4 items-center">
                <!-- Search Bar -->
                <div class="relative flex-1 w-full">
                    <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline"
                        data-icon="search">search</span>
                    <input
                        class="w-full pl-12 pr-4 py-3 bg-surface border border-outline-variant/50 rounded-xl font-body-md text-body-md text-on-background focus:ring-2 focus:ring-primary focus:border-primary transition-all placeholder:text-outline"
                        placeholder="Search title, ISBN, or author..." type="text" />
                </div>
                <!-- Filters -->
                <div class="flex flex-wrap md:flex-nowrap w-full lg:w-auto gap-3">
                    <select
                        class="flex-1 md:w-40 px-4 py-3 bg-surface border border-outline-variant/50 rounded-xl font-body-md text-body-md text-on-surface-variant focus:ring-2 focus:ring-primary appearance-none cursor-pointer">
                        <option value="">All Categories</option>
                        <option value="history">History</option>
                        <option value="science">Science</option>
                        <option value="literature">Literature</option>
                    </select>
                    <select
                        class="flex-1 md:w-36 px-4 py-3 bg-surface border border-outline-variant/50 rounded-xl font-body-md text-body-md text-on-surface-variant focus:ring-2 focus:ring-primary appearance-none cursor-pointer">
                        <option value="">Status</option>
                        <option value="available">Available</option>
                        <option value="borrowed">Borrowed</option>
                        <option value="maintenance">Maintenance</option>
                    </select>
                    <select
                        class="flex-1 md:w-36 px-4 py-3 bg-surface border border-outline-variant/50 rounded-xl font-body-md text-body-md text-on-surface-variant focus:ring-2 focus:ring-primary appearance-none cursor-pointer">
                        <option value="">Type</option>
                        <option value="physical">Physical</option>
                        <option value="digital">Digital</option>
                    </select>
                </div>
            </div>
            <!-- Modern Data List (Card-based Rows) -->
            <div class="flex flex-col gap-4 mt-2">
                <!-- List Header (Desktop Only) -->
                <div
                    class="hidden md:grid grid-cols-12 gap-4 px-6 py-2 border-b border-outline-variant/30 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                    <div class="col-span-5">Book Details</div>
                    <div class="col-span-2">Type / Category</div>
                    <div class="col-span-2">Status</div>
                    <div class="col-span-1 text-center">Stock</div>
                    <div class="col-span-2 text-right">Actions</div>
                </div>
                <!-- Item 1 -->
                <div
                    class="group bg-white border border-outline-variant/20 rounded-xl p-4 md:p-6 shadow-[0_2px_8px_rgba(0,0,0,0.02)] hover:shadow-[0_8px_24px_rgba(0,30,64,0.06)] transition-all duration-300 flex flex-col md:grid md:grid-cols-12 gap-4 items-start md:items-center relative overflow-hidden">
                    <!-- Subtle Hover Accent -->
                    <div
                        class="absolute left-0 top-0 bottom-0 w-1 bg-secondary opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <!-- Detail Column -->
                    <div class="col-span-5 flex items-center gap-4 w-full">
                        <div
                            class="w-16 h-20 md:w-14 md:h-18 flex-shrink-0 rounded-md overflow-hidden bg-surface-container border border-outline-variant/20 shadow-sm">
                            <img alt="Book Cover" class="w-full h-full object-cover"
                                data-alt="A clean, modern book cover featuring abstract geometric shapes in deep blue and soft orange on a pristine white background. The lighting is soft and even, highlighting a matte finish that conveys academic professionalism. The overall style perfectly matches a minimal SaaS library catalog aesthetic."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBG81uoqplqCDe3lgm4Bp1Gyy0ugIokzCz2-kW9dn_C_g7wAnszb44L7oco4r4SL7ToId3cgHcyJsVw-3EIXiIUapulV-cHWh6vdp_MN0tT78_8_lxWETGQZPegqx8shWz6qEyVdXxLS04g9a4WMP1IbdBnZ5dOg_ykZXxaUXn24Yb5xAjhPQprewq6AklUouu3lf7SnyKK4GWIEs-o2Yg7P7dBs8NaHWyO7KBNKpQXWq48qJXfg1k2vfO25SBRS01zUnEhdNYQnNA" />
                        </div>
                        <div class="flex flex-col overflow-hidden">
                            <h3 class="font-title-md text-title-md text-on-background truncate">Sejarah Sumatera
                                Selatan</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant truncate">Prof. Dr. A. Hasyim
                            </p>
                            <p class="font-caption text-caption text-outline mt-1 font-mono">ISBN: 978-602-1234-56-7
                            </p>
                        </div>
                    </div>
                    <!-- Type/Category -->
                    <div class="col-span-2 flex flex-row md:flex-col gap-2 md:gap-1 w-full md:w-auto mt-2 md:mt-0">
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-medium bg-surface-container-low text-on-surface-variant border border-outline-variant/30 w-fit">
                            <span class="material-symbols-outlined text-[14px] mr-1"
                                data-icon="menu_book">menu_book</span> Physical
                        </span>
                        <span class="font-caption text-caption text-on-surface-variant">History</span>
                    </div>
                    <!-- Status -->
                    <div class="col-span-2 w-full md:w-auto mt-2 md:mt-0">
                        <span
                            class="inline-flex items-center px-2.5 py-1 rounded-full font-label-sm text-label-sm bg-surface-container-high text-primary w-fit">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary mr-2"></span> Available
                        </span>
                    </div>
                    <!-- Stock -->
                    <div
                        class="col-span-1 w-full md:w-auto flex justify-between md:justify-center items-center mt-2 md:mt-0 pt-2 md:pt-0 border-t border-outline-variant/20 md:border-none">
                        <span class="md:hidden font-caption text-caption text-outline">Stock</span>
                        <span class="font-title-md text-title-md text-on-background">12</span>
                    </div>
                    <!-- Actions -->
                    <div class="col-span-2 flex items-center justify-end gap-2 w-full mt-4 md:mt-0">
                        <button
                            class="p-2 text-outline hover:text-primary hover:bg-surface-container rounded-lg transition-colors"
                            title="View Stats">
                            <span class="material-symbols-outlined text-[20px]" data-icon="bar_chart">bar_chart</span>
                        </button>
                        <button
                            class="p-2 text-outline hover:text-secondary hover:bg-secondary-container/20 rounded-lg transition-colors"
                            title="Edit">
                            <span class="material-symbols-outlined text-[20px]" data-icon="edit">edit</span>
                        </button>
                        <button
                            class="p-2 text-outline hover:text-error hover:bg-error-container/50 rounded-lg transition-colors"
                            title="Delete">
                            <span class="material-symbols-outlined text-[20px]" data-icon="delete">delete</span>
                        </button>
                    </div>
                </div>
                <!-- Item 2 -->
                <div
                    class="group bg-white border border-outline-variant/20 rounded-xl p-4 md:p-6 shadow-[0_2px_8px_rgba(0,0,0,0.02)] hover:shadow-[0_8px_24px_rgba(0,30,64,0.06)] transition-all duration-300 flex flex-col md:grid md:grid-cols-12 gap-4 items-start md:items-center relative overflow-hidden">
                    <div
                        class="absolute left-0 top-0 bottom-0 w-1 bg-secondary opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div class="col-span-5 flex items-center gap-4 w-full">
                        <div
                            class="w-16 h-20 md:w-14 md:h-18 flex-shrink-0 rounded-md overflow-hidden bg-surface-container border border-outline-variant/20 shadow-sm">
                            <img alt="Book Cover" class="w-full h-full object-cover"
                                data-alt="A sophisticated digital representation of an eBook cover displayed on a sleek tablet screen. The design features elegant typography on a deep indigo background, perfectly lit to showcase a glossy, premium digital product. The minimalist style aligns with a high-end educational software interface."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJQHXwERwT1FjmARFGPECun-V-KlJwflcoSOI_IOt0MJDBFV4Fc9H2LNVdYPNY-GkxpcfvP3k766QLz9OhRq60QtD3WGtAfol7bwxNKqIClbxBLQ6xr1oUoLsaTHk1pLO-tkvzCW0gn9NOsrwY0ulGbc1iLHcMdhFZZUY888cr1RdTG72gQ7LzxE0PQDRntivnXe0l9VNNN9p51HBfdoPA4L5UF2P7UGWU1o8u_QGT3caDuS3oWGCjwy1BB_UICW5Fqh4iwP4M0qM" />
                        </div>
                        <div class="flex flex-col overflow-hidden">
                            <h3 class="font-title-md text-title-md text-on-background truncate">Digital Transformation
                                in Govt</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant truncate">Dr. Budi Santoso</p>
                            <p class="font-caption text-caption text-outline mt-1 font-mono">ISBN: 978-602-9876-54-3
                            </p>
                        </div>
                    </div>
                    <div class="col-span-2 flex flex-row md:flex-col gap-2 md:gap-1 w-full md:w-auto mt-2 md:mt-0">
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-medium bg-secondary-container/20 text-secondary border border-secondary/20 w-fit">
                            <span class="material-symbols-outlined text-[14px] mr-1"
                                data-icon="devices">devices</span> Digital
                        </span>
                        <span class="font-caption text-caption text-on-surface-variant">Technology</span>
                    </div>
                    <div class="col-span-2 w-full md:w-auto mt-2 md:mt-0">
                        <span
                            class="inline-flex items-center px-2.5 py-1 rounded-full font-label-sm text-label-sm bg-surface-container text-on-surface-variant w-fit">
                            <span class="w-1.5 h-1.5 rounded-full bg-outline mr-2"></span> Borrowed (3)
                        </span>
                    </div>
                    <div
                        class="col-span-1 w-full md:w-auto flex justify-between md:justify-center items-center mt-2 md:mt-0 pt-2 md:pt-0 border-t border-outline-variant/20 md:border-none">
                        <span class="md:hidden font-caption text-caption text-outline">Licenses</span>
                        <span class="font-title-md text-title-md text-on-background">∞</span>
                    </div>
                    <div class="col-span-2 flex items-center justify-end gap-2 w-full mt-4 md:mt-0">
                        <button
                            class="p-2 text-outline hover:text-primary hover:bg-surface-container rounded-lg transition-colors"
                            title="View Stats">
                            <span class="material-symbols-outlined text-[20px]" data-icon="bar_chart">bar_chart</span>
                        </button>
                        <button
                            class="p-2 text-outline hover:text-secondary hover:bg-secondary-container/20 rounded-lg transition-colors"
                            title="Edit">
                            <span class="material-symbols-outlined text-[20px]" data-icon="edit">edit</span>
                        </button>
                        <button
                            class="p-2 text-outline hover:text-error hover:bg-error-container/50 rounded-lg transition-colors"
                            title="Delete">
                            <span class="material-symbols-outlined text-[20px]" data-icon="delete">delete</span>
                        </button>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer -->
        <footer
            class="w-full py-base border-t border-primary-container flat bg-primary dark:bg-on-background text-on-primary dark:text-on-primary-fixed font-caption text-caption w-full flex flex-col md:flex-row justify-between items-center px-margin-mobile md:px-margin-desktop py-8 z-10 relative">
            <div class="font-title-md text-on-primary mb-4 md:mb-0">
                © 2024 Dinas Perpustakaan Provinsi Sumatera Selatan
            </div>
            <div class="flex flex-wrap justify-center gap-4 md:gap-6">
                <a class="text-primary-fixed/70 hover:text-white hover:underline transition-all none"
                    href="#">About</a>
                <a class="text-primary-fixed/70 hover:text-white hover:underline transition-all none"
                    href="#">Privacy Policy</a>
                <a class="text-primary-fixed/70 hover:text-white hover:underline transition-all none"
                    href="#">Contact Support</a>
                <a class="text-primary-fixed/70 hover:text-white hover:underline transition-all none"
                    href="#">Digital Collections</a>
            </div>
        </footer>
    </div>
    <!-- Floating Action Button (Mobile Only) -->
    <button
        class="md:hidden fixed right-6 bottom-24 z-50 w-14 h-14 bg-secondary text-on-secondary rounded-2xl shadow-[0_8px_16px_rgba(130,85,0,0.3)] flex items-center justify-center hover:scale-105 active:scale-95 transition-transform">
        <span class="material-symbols-outlined text-[28px]" data-icon="add">add</span>
    </button>
    <!-- BottomNavBar (Mobile) -->
    <nav
        class="bg-white/95 dark:bg-primary/95 backdrop-blur-lg border-t border-outline-variant/20 shadow-[0_-4px_12px_rgba(0,0,0,0.05)] fixed bottom-0 w-full rounded-t-xl z-50 md:hidden flex justify-around items-center h-16 px-4 pb-safe text-primary dark:text-primary-fixed font-caption text-caption">
        <a class="text-on-surface-variant dark:text-on-tertiary-container flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity active:scale-90 transition-transform"
            href="#">
            <span class="material-symbols-outlined text-[24px]" data-icon="home">home</span>
            <span>Home</span>
        </a>
        <a class="text-on-surface-variant dark:text-on-tertiary-container flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity active:scale-90 transition-transform"
            href="#">
            <span class="material-symbols-outlined text-[24px]" data-icon="search">search</span>
            <span>Search</span>
        </a>
        <!-- Active State: Library (Mapped from Catalog/Manage Books intent) -->
        <a class="bg-secondary-container dark:bg-secondary text-on-secondary-container dark:text-on-secondary rounded-full px-4 py-1 flex flex-col items-center active:scale-90 transition-transform"
            href="#">
            <span class="material-symbols-outlined text-[24px] icon-fill"
                data-icon="local_library">local_library</span>
            <span class="font-bold">Library</span>
        </a>
        <a class="text-on-surface-variant dark:text-on-tertiary-container flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity active:scale-90 transition-transform"
            href="#">
            <span class="material-symbols-outlined text-[24px]" data-icon="person">person</span>
            <span>Profile</span>
        </a>
    </nav>
</body>

</html>
