<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Manajemen User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

    <div class="flex min-h-screen">

        @include('sidebar.admin')

        <main class="flex-1 p-6 md:p-10">

            <div class="mb-8">

                <h1 class="text-3xl font-bold text-blue-950">
                    Manajemen User
                </h1>

                <p class="text-slate-500">
                    Daftar role yang tersedia dalam sistem perpustakaan.
                </p>

            </div>

            <div class="bg-white rounded-2xl shadow overflow-hidden">

                <table class="w-full">

                    <thead class="bg-blue-950 text-white">

                        <tr>

                            <th class="p-4 text-left">
                                ID
                            </th>

                            <th class="p-4 text-left">
                                Nama Role
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach ($roles as $role)
                            <tr class="border-b hover:bg-slate-50">

                                <td class="p-4">
                                    {{ $role->id }}
                                </td>

                                <td class="p-4">
                                    {{ ucfirst($role->name) }}
                                </td>

                            </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>

        </main>

    </div>

</body>

</html>
