<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Cormorant+Garamond:wght@400;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="goat-body">

    <div class="goat-wrap">
        <div class="goat-card
            @if (request()->routeIs('login')) goat-card-login @endif
            @if (request()->routeIs('register')) goat-card-register @endif
        ">

            @if (request()->routeIs('login'))
                <img
                    src="{{ asset('img/koeembleem.png') }}"
                    alt="Logo"
                    class="goat-emblem koe-emblem-cow"
                >
            @else
                <img
                    src="{{ asset('img/geitembleem.png') }}"
                    alt="Logo"
                    class="goat-emblem"
                >
            @endif

            {{ $slot }}

        </div>
    </div>

</body>
</html>