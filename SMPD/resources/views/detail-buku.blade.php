<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Book Detail - DiarySumsel</title>
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
        .glass-panel {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }

        .text-truncate-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-background text-on-background antialiased min-h-screen pb-24 md:pb-0">
    <!-- TopAppBar -->
    <header
        class="bg-white/90 dark:bg-primary/90 backdrop-blur-md text-primary dark:text-primary-fixed font-title-md text-title-md text-headline-lg font-headline-lg tracking-tight docked full-width top-0 z-50 border-b border-outline-variant/30 dark:border-outline/20 shadow-sm sticky w-full flex items-center justify-between px-margin-mobile md:px-margin-desktop h-16">
        <div class="flex items-center gap-4">
            <button
                class="hover:bg-surface-container-low dark:hover:bg-tertiary-container transition-all duration-200 p-2 rounded-full scale-95 active:scale-90 flex items-center justify-center">
                <span class="material-symbols-outlined text-primary" data-icon="arrow_back">arrow_back</span>
            </button>
            <span class="font-bold text-lg hidden sm:block">DiarySumsel</span>
        </div>
        <div class="flex items-center gap-4">
            <button
                class="hover:bg-surface-container-low dark:hover:bg-tertiary-container transition-all duration-200 p-2 rounded-full scale-95 active:scale-90 flex items-center justify-center">
                <span class="material-symbols-outlined text-primary" data-icon="favorite_border">favorite_border</span>
            </button>
            <div class="w-8 h-8 rounded-full bg-surface-variant overflow-hidden border border-outline-variant/50">
                <img alt="South Sumatra Library Logo" class="w-full h-full object-cover"
                    data-alt="A small, professional circular avatar portrait of a young woman with dark hair pulled back, smiling softly. The lighting is clean and bright, set against a modern corporate background with subtle blue and grey tones. The image serves as a user profile placeholder in a polished, minimalist digital interface."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBcYZj9YjE2TD4R4SUP6_cVr7crJJvIQgGtx__fUiK_pptR4LaGXpTG8YfTIJLfz_KpuGhpN1aScXqLRZmWz0O7Wvf4jHV_2TlHtP8kB89opiglXOPwEKLzZuuPuUgxtrKqPMoA3m-j3XOj-crS0j1Fdnk4fMwaX_apz9ALnOqebEjmVUjcevLeG3DwxbBLqwRq8fB0qcKdJ8_FemL7BI_qZHbijL-z8cA7m_mV2qWa3Whoiryqh-AQuW_srIJm0aDLGESYjvy7fuE" />
            </div>
        </div>
    </header>
    <main class="max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop py-8 md:py-12">
        <!-- Bento Grid Layout for Book Details -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter mb-12">
            <!-- Left Column: Cover & Quick Actions (Mobile Top, Desktop Left) -->
            <div class="md:col-span-4 lg:col-span-3 flex flex-col gap-6">
                <!-- Book Cover Glass Card -->
                <div
                    class="glass-panel rounded-xl p-4 shadow-[0_4px_12px_rgba(0,30,64,0.1)] border border-white/50 relative group flex justify-center">
                    <img alt="Book Cover"
                        class="w-full max-w-[280px] h-auto object-cover rounded-lg shadow-md transition-transform duration-300 group-hover:scale-[1.02]"
                        data-alt="A high-quality, professional photograph of a hardcover book standing upright against a clean, light grey background. The book features an elegant, abstract cover design with muted blue and gold tones. Soft, diffused studio lighting highlights the texture of the cover and creates a gentle shadow, conveying a sense of premium literature and academic quality within a sophisticated, minimalist setting."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvYFc-ZTfr3BpBnogCz9Dd1IldhT-evTkfexI9UkAWcDh57EEOS5R1PoyfrgXdXS1feyn9iNsuSFjiBbi06CPxSVcMLGQ1y_Rb6q57vCZVwndSquT3LnL13aaemdRY-UmRnEw0nsl186uF0lvm4DRm6NFFOlz8ogHfezcypOMpOgcg8Vs8-jLZQlAZx4kcK9JACs8aBa-GvhIerePR81GVgACyWrH5r_ceWjfLWnSSKJyevzJ12_ZqeQBz0WHTDXzkscJlTwZJg8M" />
                    <!-- Floating Rating Badge -->
                    <div
                        class="absolute top-6 right-6 bg-white/90 backdrop-blur-sm px-3 py-1.5 rounded-full flex items-center gap-1 shadow-sm border border-outline-variant/20">
                        <span class="material-symbols-outlined text-secondary-container text-[16px]" data-icon="star"
                            data-weight="fill" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="font-label-sm text-label-sm text-on-surface font-semibold">4.8</span>
                    </div>
                </div>
                <!-- Action Buttons -->
                <div class="flex flex-col gap-3">
                    <button
                        class="w-full bg-primary text-on-primary font-label-sm text-label-sm py-3 px-6 rounded-xl shadow-sm hover:shadow-md hover:bg-primary-container transition-all duration-200 flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined" data-icon="menu_book">menu_book</span>
                        Pinjam Buku Fisik
                    </button>
                    <button
                        class="w-full border-2 border-primary text-primary bg-transparent font-label-sm text-label-sm py-3 px-6 rounded-xl hover:bg-surface-container-low transition-all duration-200 flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined" data-icon="tablet_mac">tablet_mac</span>
                        Baca E-Book
                    </button>
                </div>
            </div>
            <!-- Right Column: Metadata & Synopsis -->
            <div class="md:col-span-8 lg:col-span-9 flex flex-col gap-8">
                <!-- Header Info -->
                <div class="flex flex-col gap-2">
                    <div class="flex items-center gap-2 mb-1">
                        <span
                            class="bg-surface-variant text-on-surface-variant font-caption text-caption px-3 py-1 rounded-full uppercase tracking-wider font-medium">Sejarah
                            &amp; Budaya</span>
                        <span
                            class="bg-surface-container-high text-on-surface font-caption text-caption px-3 py-1 rounded-full">Tersedia
                            3 Salinan</span>
                    </div>
                    <h1 class="font-display-lg text-display-lg text-primary text-3xl md:text-5xl">Jejak Sriwijaya di
                        Tanah Sumatera</h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant">Oleh <span
                            class="text-primary font-medium cursor-pointer hover:underline">Prof. Dr. Azyumardi
                            Azra</span></p>
                </div>
                <!-- Metadata Bento Row -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div
                        class="bg-surface-container-lowest p-4 rounded-xl shadow-[0_2px_8px_rgba(0,30,64,0.05)] border border-outline-variant/10">
                        <p class="font-caption text-caption text-on-surface-variant mb-1">Penerbit</p>
                        <p class="font-label-sm text-label-sm text-on-surface font-semibold">Balai Pustaka</p>
                    </div>
                    <div
                        class="bg-surface-container-lowest p-4 rounded-xl shadow-[0_2px_8px_rgba(0,30,64,0.05)] border border-outline-variant/10">
                        <p class="font-caption text-caption text-on-surface-variant mb-1">Tahun Terbit</p>
                        <p class="font-label-sm text-label-sm text-on-surface font-semibold">2019</p>
                    </div>
                    <div
                        class="bg-surface-container-lowest p-4 rounded-xl shadow-[0_2px_8px_rgba(0,30,64,0.05)] border border-outline-variant/10">
                        <p class="font-caption text-caption text-on-surface-variant mb-1">ISBN</p>
                        <p class="font-label-sm text-label-sm text-on-surface font-semibold">978-602-258-123-4</p>
                    </div>
                    <div
                        class="bg-surface-container-lowest p-4 rounded-xl shadow-[0_2px_8px_rgba(0,30,64,0.05)] border border-outline-variant/10">
                        <p class="font-caption text-caption text-on-surface-variant mb-1">Halaman</p>
                        <p class="font-label-sm text-label-sm text-on-surface font-semibold">342 Halaman</p>
                    </div>
                </div>
                <!-- Synopsis Section -->
                <div
                    class="glass-panel p-6 md:p-8 rounded-xl shadow-[0_4px_12px_rgba(0,30,64,0.05)] border border-white/50">
                    <h2 class="font-title-md text-title-md text-primary mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-secondary-container"
                            data-icon="format_quote">format_quote</span>
                        Sinopsis
                    </h2>
                    <p class="font-body-md text-body-md text-on-surface leading-relaxed text-justify">
                        Buku ini menelusuri jejak-jejak kejayaan Kerajaan Sriwijaya yang pernah menjadi pusat maritim
                        dan peradaban Buddha terbesar di Asia Tenggara. Melalui pendekatan historis dan arkeologis,
                        penulis menyajikan bukti-bukti artefak serta literatur kuno yang menggambarkan pengaruh
                        Sriwijaya dalam perdagangan global dan pertukaran budaya. Bab-bab di dalamnya tidak hanya
                        membahas aspek politik dan militer, tetapi juga kehidupan sosial masyarakat pesisir Sumatera
                        pada masa lampau, memberikan wawasan baru bagi pemahaman sejarah Nusantara.
                    </p>
                </div>
            </div>
        </div>
        <!-- Related Books Carousel -->
        <section class="mt-16">
            <div class="flex justify-between items-end mb-6">
                <h3 class="font-headline-lg text-headline-lg text-primary text-2xl">Buku Terkait</h3>
                <a class="font-label-sm text-label-sm text-surface-tint hover:underline flex items-center gap-1"
                    href="#">
                    Lihat Semua
                    <span class="material-symbols-outlined text-[18px]" data-icon="chevron_right">chevron_right</span>
                </a>
            </div>
            <div class="flex overflow-x-auto gap-6 pb-4 snap-x hide-scrollbar" style="scrollbar-width: none;">
                <!-- Book Card 1 -->
                <div class="min-w-[160px] max-w-[160px] snap-start group cursor-pointer">
                    <div
                        class="glass-panel rounded-xl p-2 shadow-[0_2px_8px_rgba(0,30,64,0.05)] mb-3 transition-transform duration-300 group-hover:-translate-y-1 group-hover:shadow-[0_8px_16px_rgba(0,30,64,0.1)]">
                        <img alt="Related Book 1" class="w-full h-[220px] object-cover rounded-lg"
                            data-alt="A stylized studio shot of a thick paperback book with a minimalist white and blue cover design, standing angled on a pristine white surface. Soft, highly controlled lighting creates a gentle drop shadow, emphasizing the book's physical presence against a clean, modern, light-mode background. The aesthetic is academic yet contemporary."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAQQcAwEecx9ZfGrCUWMo6XkLpiclY3OHMBgrwMzvOOnNdc1un3WSZPswvDoE5zwVYTaQumq8Be5whVtixvGgqA84rWOksnhr1d1UyUk2_J7fTDSr7Wy5fsFKB5HE07WBYB-7Zoh08AKFUs334YDCoSsjl-rVa9I8webON-bqnylD_tyjjWvWSJHzOsczKAIPNe21JCUjV4oL0bm-1arkpXMa7pbWyGrFWChSdEJJwL17QgFrTx6K86RQc1-vBi4VC6VYDs68o7mKU" />
                    </div>
                    <h4
                        class="font-label-sm text-label-sm text-on-surface font-semibold text-truncate-3 leading-tight mb-1">
                        Sejarah Nasional Indonesia Jilid 2</h4>
                    <p class="font-caption text-caption text-on-surface-variant">Marwati Djoened</p>
                </div>
                <!-- Book Card 2 -->
                <div class="min-w-[160px] max-w-[160px] snap-start group cursor-pointer">
                    <div
                        class="glass-panel rounded-xl p-2 shadow-[0_2px_8px_rgba(0,30,64,0.05)] mb-3 transition-transform duration-300 group-hover:-translate-y-1 group-hover:shadow-[0_8px_16px_rgba(0,30,64,0.1)]">
                        <img alt="Related Book 2" class="w-full h-[220px] object-cover rounded-lg"
                            data-alt="A detailed close-up of a vintage-style hardcover book bound in dark navy blue cloth, resting flat on a sleek, light grey desk surface. Natural, bright light washes over the scene, highlighting the subtle texture of the book's cover fabric and creating a serene, scholarly atmosphere within a professional, modern digital space."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6legUzJ2cx83-iHO8Iuf9-blCiAJLXv3nIlucnraRTjXJB6K-k1wRXXhWB5DT28Vg5NFKqP61DKXifj8rstipIrMSM6k2_joQIm5_2SVZ5FjctLHfQ1DhFV8T72E3-BiMscv2rtPwh8FKjgweNv9Nc7fatVnnU0kQzBVytz7zsypDOnTf-DexQiqS1zxPEvfixvszdyFsi49OITB_CBLINzPkkfcoONb1kpWuvBRL8rBz6MAxcHK0mKznOvgyQPgB9ZkhmQGi8zQ" />
                    </div>
                    <h4
                        class="font-label-sm text-label-sm text-on-surface font-semibold text-truncate-3 leading-tight mb-1">
                        Kebudayaan Melayu di Nusantara</h4>
                    <p class="font-caption text-caption text-on-surface-variant">Tenas Effendy</p>
                </div>
                <!-- Book Card 3 -->
                <div class="min-w-[160px] max-w-[160px] snap-start group cursor-pointer">
                    <div
                        class="glass-panel rounded-xl p-2 shadow-[0_2px_8px_rgba(0,30,64,0.05)] mb-3 transition-transform duration-300 group-hover:-translate-y-1 group-hover:shadow-[0_8px_16px_rgba(0,30,64,0.1)]">
                        <img alt="Related Book 3" class="w-full h-[220px] object-cover rounded-lg"
                            data-alt="A brightly lit, aesthetic composition featuring a stack of three modern hardcover books with colorful geometric spines, resting on a clean, white minimalist table. The lighting is crisp and diffused, casting soft shadows that enhance the depth and premium feel of the books, perfectly suited for a clean, glassmorphism-inspired library interface."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDS_8vfRh3xJ2a1eKY51xXmc2MAjwYI1EnWMfnw1ZVp__KzolJkS8UGHN-f96ExRph8nbiSq-BJrDKmc5WmoV6bed7eQIuBqkU65H9iDiYf5bNR4a8pozxHxdycGsVH4jUW1Ejenf9dJNv43wkHmQrewogVS44qWHxO4soolE-UWX5r8hTq9xjyvHmmt9jthfKb_6gT8M8JRbym3tXKEobia9GRio0mgZVp08WnsUQxj9KBTJasfRmOBHkhB6ISWFhvdSQn4JjmCh8" />
                    </div>
                    <h4
                        class="font-label-sm text-label-sm text-on-surface font-semibold text-truncate-3 leading-tight mb-1">
                        Arkeologi Palembang</h4>
                    <p class="font-caption text-caption text-on-surface-variant">Bambang Budi Utomo</p>
                </div>
                <!-- Book Card 4 -->
                <div class="min-w-[160px] max-w-[160px] snap-start group cursor-pointer">
                    <div
                        class="glass-panel rounded-xl p-2 shadow-[0_2px_8px_rgba(0,30,64,0.05)] mb-3 transition-transform duration-300 group-hover:-translate-y-1 group-hover:shadow-[0_8px_16px_rgba(0,30,64,0.1)]">
                        <img alt="Related Book 4" class="w-full h-[220px] object-cover rounded-lg"
                            data-alt="An elegant presentation of an open book lying flat on a light-colored wooden surface, viewed from a top-down angle. The pages are crisp and white, illuminated by bright, natural daylight that creates a fresh, inviting reading environment. The overall tone is bright, minimalist, and highly professional, fitting a modern literary application."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBdlAwGcS2FWdkxwb6s0iq7RwfiTn12SrJ9CPLOlvtZN6B3KFiY_4kszOecBBdN_Gs-PDhzM9DcKs8lps167H6ZaonsIMuREUmk6wXY-iTeKHPcEElghiGnbk7fas9icwnXvVrvzPKHAjpEsLql3jfZT2DdwxOYRirfdPRD8cKDRJ_FC4k81v4OBjIbqdZ2EdPhwnUJbjGo-7XnNbCfzZlpUj-aSPCjV7W9gkQGMjR2CGnuTXic4x2Ny-kp0i3f1w3nJ_mfkBcHL2M" />
                    </div>
                    <h4
                        class="font-label-sm text-label-sm text-on-surface font-semibold text-truncate-3 leading-tight mb-1">
                        Ensiklopedia Kerajaan Nusantara</h4>
                    <p class="font-caption text-caption text-on-surface-variant">Tim Peneliti</p>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer
        class="bg-primary dark:bg-on-background text-on-primary dark:text-on-primary-fixed font-caption text-caption font-title-md text-on-primary w-full py-base border-t border-primary-container flat w-full flex flex-col md:flex-row justify-between items-center px-margin-mobile md:px-margin-desktop py-8 mt-12">
        <div class="mb-4 md:mb-0 text-center md:text-left">
            <p class="font-title-md text-on-primary mb-1 text-lg">DiarySumsel</p>
            <p>© 2024 Dinas Perpustakaan Provinsi Sumatera Selatan</p>
        </div>
        <div class="flex flex-wrap justify-center gap-6">
            <a class="text-primary-fixed/70 hover:text-white hover:underline transition-all" href="#">About</a>
            <a class="text-primary-fixed/70 hover:text-white hover:underline transition-all" href="#">Privacy
                Policy</a>
            <a class="text-primary-fixed/70 hover:text-white hover:underline transition-all" href="#">Contact
                Support</a>
            <a class="text-primary-fixed/70 hover:text-white hover:underline transition-all" href="#">Digital
                Collections</a>
        </div>
    </footer>
</body>

</html>
