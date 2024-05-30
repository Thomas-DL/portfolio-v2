@props(['data'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $settings->app_name ?? env('APP_NAME') }}</title>

    @if (isset($data))
        <meta name="description" content="{{ $data['description'] }}">
        <meta name="author" content="{{ $data['author'] }}">
        <meta name="keywords" content="{{ $data['keywords'] }}">
        <meta property="og:title" content="{{ $data['title'] }}">
        <meta property="og:description" content="{{ $data['description'] }}">
        <meta property="og:image" content="{{ $data['image'] }}">
        <meta property="og:url" content="{{ $data['url'] }}">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="{{ $settings->app_name ?? env('APP_NAME') }}">
    @else
        <meta name="description" content="{{ $settings->app_description ?? '' }}">
        <meta property="og:url" content="{{ $settings->app_url }}">
    @endif

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @cookieconsentscripts
</head>

<body x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }" :class="darkMode ? 'dark' : ''"
    @dark-mode-updated.window="darkMode = $event.detail.darkMode" class="antialiased font-sans">
    @include('layouts.partials.header')

    <main>
        {{ $slot }}
    </main>

    @include('layouts.partials.footer')

    @cookieconsentview

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-D9FM6XMCQD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-D9FM6XMCQD');
    </script>
</body>

</html>
