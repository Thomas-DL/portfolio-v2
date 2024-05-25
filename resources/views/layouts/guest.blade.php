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
    @cookieconsentscripts
</head>

<body x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }" :class="darkMode ? 'dark' : ''"
    @dark-mode-updated.window="darkMode = $event.detail.darkMode" class="antialiased font-sans">

    @include('layouts.partials.header')

    <main class="bg-white dark:bg-gray-950">
        {{ $slot }}
    </main>

    @include('layouts.partials.footer')

    @cookieconsentview
</body>

</html>
