<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav class="border-b border-gray-200 dark:border-white/10 bg-white dark:bg-gray-950" x-data="{ mobileMenu: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between">
            <div class="flex">
                <div class="flex flex-shrink-0 items-center">
                    <a href="{{ route('home') }}" wire:navigate>
                        <x-application-logo class="h-8 w-auto hidden dark:block" theme="light" />
                        <x-application-logo class="h-8 w-auto block dark:hidden" theme="dark" />
                    </a>
                </div>
                <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
                    <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                    <a href="{{ route('dashboard') }}" wire:navigate
                        class="{{ request()->routeIs('dashboard') ? 'border-primary' : 'dark:border-white/10' }}
                            'text-gray-900 dark:text-white inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium'"
                        aria-current="page">Actualités</a>
                </div>
            </div>
            <div class="hidden sm:ml-6 sm:flex sm:items-center" x-data="{ open: false }">

                <!-- Profile dropdown -->
                <div class="relative ml-3 flex space-x-4">
                    <button
                        class="p-1 rounded-lg bg-gray-100/50 dark:bg-gray-800/50 ring-1 ring-gray-200 dark:ring-gray-800"
                        @click="darkMode = !darkMode; localStorage.setItem('darkMode', darkMode)">
                        <x-heroicon-o-sun x-show="!darkMode" class="w-6 h-auto text-gray-900" />
                        <x-heroicon-o-moon x-show="darkMode" class="w-6 h-auto text-gray-400" />
                    </button>
                    <div>
                        <button type="button" @click="open = !open"
                            class="relative flex max-w-xs items-center rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full"
                                src="https://api.dicebear.com/8.x/lorelei-neutral/svg?seed={{ auth()->user()->email }}"
                                alt="{{ auth()->user()->name }} avatar">
                        </button>
                    </div>

                    <div x-show="open" x-transition @click.away="open = false"
                        class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <a href="{{ route('profile') }}" wire:navigate class="block px-4 py-2 text-sm text-gray-700"
                            role="menuitem" tabindex="-1" id="user-menu-item-0">Mon profil</a>
                        <span wire:click="logout" class="block px-4 py-2 text-sm text-gray-700 cursor-pointer"
                            role="menuitem" tabindex="-1" id="user-menu-item-2">Déconnexion</span>
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex items-center sm:hidden">
                <!-- Mobile menu button -->
                <button type="button" @click="mobileMenu = !mobileMenu"
                    class="relative inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="mobileMenu" id="mobile-menu">
        <div class="space-y-1 pb-3 pt-2">
            <!-- Current: "border-indigo-500 bg-indigo-50 text-indigo-700", Default: "border-transparent text-gray-600 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800" -->
            <a href="{{ route('dashboard') }}"
                class="border-primary bg-primary/5 text-black dark:text-white block border-l-4 py-2 pl-3 pr-4 text-base font-medium"
                aria-current="page">Dashboard</a>
        </div>
        <div class="border-t border-gray-200 pb-3 pt-4">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full"
                        src="https://api.dicebear.com/8.x/lorelei-neutral/svg?seed={{ auth()->user()->email }}"
                        alt="{{ auth()->user()->name }} avatar">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium text-gray-800 dark:text-gray-200">{{ auth()->user()->name }}</div>
                    <div class="text-sm font-medium text-gray-500 dark:text-white">{{ auth()->user()->email }}</div>
                </div>
            </div>
            <div class="mt-3 space-y-1">
                <a href="{{ route('profile') }}" wire:navigate
                    class="block px-4 py-2 text-base font-medium text-gray-500 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-white/5 hover:text-gray-800 dark:hover:text-white">
                    Mon profil
                </a>
                <span wire:click="logout"
                    class="block px-4 py-2 text-base font-medium text-gray-500 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-white/5 hover:text-gray-800 dark:hover:text-white cursor-pointer">
                    Déconnexion
                </span>
            </div>
        </div>
    </div>
</nav>
