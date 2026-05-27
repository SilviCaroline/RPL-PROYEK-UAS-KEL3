<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>DiarySumsel - Login</title>
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
    <!-- Tailwind Config from System Prompt -->
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

        .material-symbols-outlined.filled {
            font-variation-settings: 'FILL' 1;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-background min-h-screen flex flex-col relative overflow-hidden font-sans text-on-background">
    <!-- Subtle Watermark / Background Graphics -->
    <div class="absolute inset-0 z-0 flex items-center justify-center opacity-[0.03] pointer-events-none">
        <!-- Abstracting the logo/watermark as a large blurred element for minimalist feel -->
        <div class="w-[800px] h-[800px] rounded-full bg-primary blur-[120px]"></div>
    </div>
    <div class="absolute inset-0 z-0 bg-[url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?q=80&amp;w=2000&amp;auto=format&amp;fit=crop')] bg-cover bg-center opacity-10 mix-blend-multiply pointer-events-none"
        data-alt="A softly focused, bright modern library interior featuring clean architectural lines and natural sunlight streaming through large windows. The scene is dominated by a sophisticated palette of pristine whites and very subtle, cool light greys, aligning perfectly with a crisp, minimal light-mode UI aesthetic. Bookshelves fade into a gentle blur in the background, conveying a sense of quiet intellect and orderly calm without distracting from the foreground interface.">
    </div>
    <!-- Main Content Canvas -->
    <main class="flex-grow flex items-center justify-center relative z-10 px-margin-mobile md:px-margin-desktop py-12">
        <!-- Login Card -->
        <div
            class="bg-surface-container-lowest/90 backdrop-blur-xl shadow-[0_8px_32px_rgba(0,30,64,0.08)] rounded-xl w-full max-w-[440px] border border-outline-variant/30 flex flex-col p-8 relative">
            <!-- Header -->
            <div class="text-center mb-8 flex flex-col items-center">
                <div
                    class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center mb-4 shadow-sm text-primary">
                    <span class="material-symbols-outlined filled text-4xl">menu_book</span>
                </div>
                <h1 class="font-headline-lg text-headline-lg text-primary tracking-tight">DiarySumsel</h1>
                <p class="font-body-md text-body-md text-on-surface-variant mt-2">South Sumatra Regional Library</p>
            </div>
            <!-- Context Tabs -->
            <div class="bg-surface-container-low p-1 rounded-full flex mb-8">
                <button
                    class="flex-1 bg-surface-container-lowest shadow-sm rounded-full py-2 px-4 text-center transition-all duration-200 cursor-default"
                    type="button">
                    <span class="font-title-md text-title-md text-primary">Pengguna</span>
                </button>
                <button
                    class="flex-1 rounded-full py-2 px-4 text-center transition-all duration-200 hover:bg-surface-variant/50 cursor-pointer"
                    type="button">
                    <span
                        class="font-title-md text-[18px] leading-[28px] font-medium text-on-surface-variant hover:text-primary">Admin/Librarian</span>
                </button>
            </div>
            <!-- Login Form -->
            <form action="#" class="flex flex-col gap-5" method="POST">
                <!-- Input Group: Username/Email -->
                <div class="flex flex-col gap-1.5">
                    <label class="font-label-sm text-label-sm text-on-surface-variant pl-1" for="username">Username /
                        Email</label>
                    <div class="relative flex items-center">
                        <span class="material-symbols-outlined absolute left-4 text-outline z-10">person</span>
                        <input
                            class="w-full bg-surface-bright border border-outline-variant rounded-lg pl-12 pr-4 py-3.5 font-body-md text-body-md text-on-surface placeholder:text-outline-variant/80 focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all shadow-sm"
                            id="username" name="username" placeholder="Masukkan username atau email" type="text" />
                    </div>
                </div>
                <!-- Input Group: Password -->
                <div class="flex flex-col gap-1.5">
                    <label class="font-label-sm text-label-sm text-on-surface-variant pl-1"
                        for="password">Password</label>
                    <div class="relative flex items-center">
                        <span class="material-symbols-outlined absolute left-4 text-outline z-10">lock</span>
                        <input
                            class="w-full bg-surface-bright border border-outline-variant rounded-lg pl-12 pr-12 py-3.5 font-body-md text-body-md text-on-surface placeholder:text-outline-variant/80 focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all shadow-sm"
                            id="password" name="password" placeholder="Masukkan password" type="password" />
                        <button
                            class="absolute right-4 text-outline hover:text-primary transition-colors flex items-center justify-center h-full"
                            type="button">
                            <span class="material-symbols-outlined">visibility_off</span>
                        </button>
                    </div>
                    <div class="flex justify-end mt-1">
                        <a class="font-label-sm text-label-sm text-primary hover:text-primary-container font-semibold transition-colors"
                            href="#">Lupa Password?</a>
                    </div>
                </div>
                <!-- Actions -->
                <div class="mt-4 flex flex-col gap-4">
                    <button
                        class="w-full bg-primary text-on-primary font-title-md text-title-md py-4 rounded-xl hover:bg-primary-container shadow-md hover:shadow-lg transition-all duration-200 active:scale-[0.98] flex items-center justify-center gap-2"
                        type="submit">
                        Masuk
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </button>
                </div>
            </form>
            <!-- Register Link -->
            <div class="mt-8 text-center border-t border-outline-variant/30 pt-6">
                <p class="font-body-md text-body-md text-on-surface-variant">
                    Belum menjadi anggota?
                    <a class="font-title-md text-title-md text-primary hover:underline ml-1" href="#">Daftar
                        Sekarang</a>
                </p>
            </div>
        </div>
    </main>
</body>

</html>
