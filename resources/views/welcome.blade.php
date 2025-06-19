<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KlinikConnect - Solusi Janji Temu Medis Online</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-gray-900 bg-gray-100">
        <div class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg text-center">
                <a href="/">
                    {{-- Anda bisa ganti ini dengan logo aplikasi KlinikConnect Anda --}}
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500 mx-auto" />
                </a>

                <h1 class="text-4xl font-extrabold text-indigo-700 mt-4 mb-2">KlinikConnect</h1>
                <p class="text-lg text-gray-700 mb-6 px-4">
                    Solusi Cerdas untuk Janji Temu Medis Anda
                </p>

                <hr class="my-6 border-gray-200">

                <p class="text-md text-gray-800 mb-6 px-4">
                    Daftar janji temu dengan dokter spesialis pilihan Anda di Klinik XYZ, kapan saja dan di mana saja. Hemat waktu, hindari antrean panjang!
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                    @if (Route::has('login'))
                        @auth
                            {{-- Jika pengguna sudah login, arahkan ke dashboard --}}
                            <a href="{{ url('/dashboard') }}" class="inline-flex items-center px-6 py-3 bg-indigo-600 border border-transparent rounded-md font-semibold text-base text-white uppercase tracking-widest hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 shadow-lg">
                                Dashboard Saya
                            </a>
                        @else
                            {{-- Jika belum login, tampilkan tombol login dan register --}}
                            <a href="{{ route('login') }}" class="inline-flex items-center px-6 py-3 bg-indigo-600 border border-transparent rounded-md font-semibold text-base text-white uppercase tracking-widest hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 shadow-lg">
                                Masuk
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="inline-flex items-center px-6 py-3 bg-gray-200 border border-transparent rounded-md font-semibold text-base text-gray-800 uppercase tracking-widest hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition ease-in-out duration-150 shadow-md">
                                    Daftar Sekarang
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>

                <div class="mt-8 text-sm text-gray-600">
                    &copy; {{ date('Y') }} KlinikConnect. Hak Cipta Dilindungi Undang-Undang.
                </div>
            </div>
        </div>
    </body>
</html>