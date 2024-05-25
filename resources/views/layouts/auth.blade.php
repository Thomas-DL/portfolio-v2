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

<body x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }" :class="darkMode ? 'dark' : ''"
    @dark-mode-updated.window="darkMode = $event.detail.darkMode" class="antialiased font-sans">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-950">
        <livewire:layout.navigation />

        <div class="py-10">
            @if (isset($header))
                <header>
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">
                            {{ $header }}
                        </h1>
                    </div>
                </header>
            @endif
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
</body>

</html>
