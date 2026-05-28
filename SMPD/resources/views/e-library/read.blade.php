<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Baca PDF</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

    <main class="max-w-6xl mx-auto p-8">
        <a href="{{ route('elibrary.index') }}" class="text-blue-900 font-semibold">← Kembali ke E-Library</a>

        <div class="bg-white rounded-2xl shadow p-8 mt-6">
            <div class="flex justify-between items-start mb-6">
                <div>
                    <h1 class="text-3xl font-bold text-blue-950">
                        {{ $digitalBook->title }}
                    </h1>
                    <p class="text-slate-500">
                        {{ $digitalBook->author }} — {{ $digitalBook->category->name ?? '-' }}
                    </p>
                </div>

                <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full">
                    Akses {{ $digitalBook->access }}
                </span>
            </div>

            <div class="bg-slate-200 rounded-2xl h-[650px] flex items-center justify-center">
                <div class="text-center">
                    <div class="text-7xl mb-4">📄</div>
                    <h2 class="text-2xl font-bold text-blue-950">Preview PDF</h2>
                    <p class="text-slate-600 mt-2">
                        File: {{ $digitalBook->file }}
                    </p>
                    <p class="text-sm text-slate-500 mt-4">
                        Nanti bagian ini bisa diganti iframe PDF asli dari storage Laravel.
                    </p>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
