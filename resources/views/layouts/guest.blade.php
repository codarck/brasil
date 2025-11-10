<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased ">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#17466E]">
            <div class="mb-16">
                <a href="/" >
                    <img src="{{ asset('logo.png') }}" alt="{{ config('app.name', 'Laravel') }}" class="h-16 w-auto">
                </a>
            </div>

            <span
                class="inline-flex items-center justify-center w-24 h-24 rounded-full ring-4 ring-emerald-300 border border-white/20 shadow-md mb-6"
                style="background-image: linear-gradient(rgba(3,163,165,0.55), rgba(3,163,165,0.55)), url('https://www.cirurgiaplastica.org.br/wp-content/uploads/2017/10/banner_regionais.jpg'); background-size:cover; background-position:center;">
                <span class="text-white font-bold text-2xl drop-shadow-md">IASBCP</span>
            </span>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
