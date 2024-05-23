<header class="fixed z-50 top-0 left-0 right-0" x-data="{ mobileMenu: false }">
    <div class="backdrop-blur bg-gradient-to-t from-transparent to-white/10">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="/" class="-m-1.5 p-1.5">
                    <span class="sr-only">{{ env('APP_NAME') }}</span>
                    <x-application-logo class="h-8 w-auto hidden dark:block" theme="light" />
                    <x-application-logo class="h-8 w-auto block dark:hidden" theme="dark" />
                </a>
            </div>
            <div class="flex space-x-4 lg:hidden">
                <button
                    class="p-1 rounded-lg bg-gray-100/50 dark:bg-gray-800/50 ring-1 ring-gray-200 dark:ring-gray-800"
                    @click="darkMode = !darkMode; localStorage.setItem('darkMode', darkMode)">
                    <x-heroicon-o-sun x-show="!darkMode" class="w-6 h-auto text-gray-900" />
                    <x-heroicon-o-moon x-show="darkMode" class="w-6 h-auto text-gray-400" />
                </button>
                <button type="button" @click="mobileMenu = !mobileMenu"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-950 dark:text-gray-50">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="{{ route('home') }}#realisations"
                    class="text-sm font-semibold leading-6 text-gray-950 dark:text-gray-50">Réalisations</a>
                <a href="{{ route('home') }}#processus"
                    class="text-sm font-semibold leading-6 text-gray-950 dark:text-gray-50">Processus</a>
                <a href="{{ route('home') }}#services"
                    class="text-sm font-semibold leading-6 text-gray-950 dark:text-gray-50">Services</a>
                <a href="{{ route('home') }}#avis"
                    class="text-sm font-semibold leading-6 text-gray-950 dark:text-gray-50">Avis</a>
                <a href="{{ route('blog.index') }}"
                    class="text-sm font-semibold leading-6 text-gray-950 dark:text-gray-50">Blog</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end lg:items-center lg:space-x-4">
                <button
                    class="p-1 rounded-lg bg-gray-100/50 dark:bg-gray-800/50 ring-1 ring-gray-200 dark:ring-gray-800"
                    @click="darkMode = !darkMode; localStorage.setItem('darkMode', darkMode)">
                    <x-heroicon-o-sun x-show="!darkMode" class="w-6 h-auto text-gray-900" />
                    <x-heroicon-o-moon x-show="darkMode" class="w-6 h-auto text-gray-400" />
                </button>
                @auth
                    <a href="{{ route('dashboard') }}"
                        class="text-sm font-semibold leading-6 text-gray-950 dark:text-gray-50">Mon compte
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="text-sm font-semibold leading-6 text-gray-950 dark:text-gray-50">Connexion
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                @endauth
            </div>
        </nav>
    </div>
    <div class="lg:hidden" role="dialog" aria-modal="true" x-show="mobileMenu">
        <div class="fixed inset-0 z-10"></div>
        <div
            class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white dark:bg-gray-950 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="/" class="-m-1.5 p-1.5">
                    <span class="sr-only">{{ env('APP_NAME') }}</span>
                    <x-application-logo class="h-8 w-auto hidden dark:block" theme="light" />
                    <x-application-logo class="h-8 w-auto block dark:hidden" theme="dark" />
                </a>
                <button @click="mobileMenu = !mobileMenu" type="button"
                    class="-m-2.5 rounded-md p-2.5 text-black dark:text-gray-200">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="{{ route('home') }}#realisations"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-black dark:text-white hover:bg-gray-50 dark:hover:bg-gray-950">Réalisation</a>
                        <a href="{{ route('home') }}#processus"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-black dark:text-white hover:bg-gray-50 dark:hover:bg-gray-950">Processus</a>
                        <a href="{{ route('home') }}#services"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-black dark:text-white hover:bg-gray-50 dark:hover:bg-gray-950">Services</a>
                        <a href="{{ route('home') }}#avis"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-black dark:text-white hover:bg-gray-50 dark:hover:bg-gray-950">Avis</a>
                        <a href="{{ route('blog.index') }}"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-black dark:text-white hover:bg-gray-50 dark:hover:bg-gray-950">Blog</a>
                    </div>
                    <div class="py-6">
                        @auth
                            <a href="{{ route('dashboard') }}"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-black dark:text-white hover:bg-gray-50 dark:hover:bg-gray-950">Mon
                                compte
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-black dark:text-white hover:bg-gray-50 dark:hover:bg-gray-950">Connexion
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
