<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Profil</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-slate-100">

    <div class="flex min-h-screen">

        @include('sidebar.anggota')

        <main class="flex-1 p-6 md:p-10">

            <div class="mb-8">

                <h1 class="text-3xl font-bold text-blue-950">

                    Edit Profil

                </h1>

                <p class="text-slate-500">

                    Perbarui data pribadi Anda.

                </p>

            </div>

            @if ($errors->any())

                <div class="bg-red-100 border border-red-300 text-red-700 p-4 rounded-xl mb-6">

                    <ul class="list-disc ml-5">

                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach

                    </ul>

                </div>

            @endif

            <div class="bg-white rounded-2xl shadow p-8">

                <form action="{{ route('profile.update') }}" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="grid md:grid-cols-2 gap-6">

                        <div>

                            <label class="block mb-2 font-medium">

                                Nama Lengkap

                            </label>

                            <input type="text" name="name" value="{{ old('name', $member->name) }}"
                                class="w-full border rounded-xl px-4 py-3">

                        </div>

                        <div>

                            <label class="block mb-2 font-medium">

                                Email

                            </label>

                            <input type="email" value="{{ $member->email }}" disabled
                                class="w-full border rounded-xl px-4 py-3 bg-slate-100">

                        </div>

                        <div>

                            <label class="block mb-2 font-medium">

                                Nomor HP

                            </label>

                            <input type="text" name="phone" value="{{ old('phone', $member->phone) }}"
                                class="w-full border rounded-xl px-4 py-3">

                        </div>

                        <div>

                            <label class="block mb-2 font-medium">

                                Kode Anggota

                            </label>

                            <input type="text" value="{{ $member->member_code }}" disabled
                                class="w-full border rounded-xl px-4 py-3 bg-slate-100">

                        </div>

                        <div class="md:col-span-2">

                            <label class="block mb-2 font-medium">

                                Alamat

                            </label>

                            <textarea name="address" rows="4" class="w-full border rounded-xl px-4 py-3">{{ old('address', $member->address) }}</textarea>

                        </div>

                    </div>

                    <div class="mt-8 flex gap-4">

                        <button type="submit" class="bg-blue-950 hover:bg-blue-900 text-white px-6 py-3 rounded-xl">

                            Simpan Perubahan

                        </button>

                        <a href="{{ route('profile.index') }}"
                            class="bg-slate-200 hover:bg-slate-300 px-6 py-3 rounded-xl">

                            Batal

                        </a>

                    </div>

                </form>

            </div>

        </main>

    </div>

</body>

</html>
