<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'KlinikConnect') }}</title> {{-- Nama aplikasi di title --}}

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-100"> {{-- Latar belakang body terang --}}
        <div class="min-h-screen bg-gray-100">

            {{-- Memasukkan Navigation Bar --}}
            @include('layouts.navigation')

            @isset($header)
                <header class="bg-white shadow"> {{-- Header halaman utama tetap terang --}}
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <main>
                {{ $slot }}
            </main>

            {{-- Footer --}}
            <footer class="bg-white border-t border-gray-100 py-6 mt-8 shadow-inner"> {{-- Footer tetap terang --}}
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-gray-600">
                    <p>&copy; {{ date('Y') }} Klinik XYZ. All rights reserved.</p>
                    <p>Jl. Contoh No. 123, Jakarta, Indonesia</p>
                    <p>Telepon: (021) 1234567 | Email: info@klinikxyz.com</p>
                </div>
            </footer>
        </div>
    </body>
</html>
