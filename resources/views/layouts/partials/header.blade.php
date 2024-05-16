<header class="fixed z-50 top-0 left-0 right-0" x-data="{ mobileMenu: false }">
    <div class="backdrop-blur bg-gradient-to-t from-transparent to-white/10">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="/" class="-m-1.5 p-1.5">
                    <span class="sr-only">{{ env('APP_NAME') }}</span>
                    <x-application-logo class="h-8 w-auto" theme="light" />
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button" @click="mobileMenu = !mobileMenu"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-50">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="#realisations" class="text-sm font-semibold leading-6 text-gray-50">Réalisations</a>
                <a href="#processus" class="text-sm font-semibold leading-6 text-gray-50">Processus</a>
                <a href="#services" class="text-sm font-semibold leading-6 text-gray-50">Services</a>
                <a href="#avis" class="text-sm font-semibold leading-6 text-gray-50">Avis</a>
                <a href="{{ route('blog.index') }}" class="text-sm font-semibold leading-6 text-gray-50">Blog</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                @auth
                    <a href="{{ route('dashboard') }}" class="text-sm font-semibold leading-6 text-gray-50">Mon compte
                    </a>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-semibold leading-6 text-gray-50">Connexion
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                @endauth
            </div>
        </nav>
    </div>
    <div class="lg:hidden" role="dialog" aria-modal="true" x-show="mobileMenu">
        <div class="fixed inset-0 z-10"></div>
        <div
            class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-gray-950 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="/" class="-m-1.5 p-1.5">
                    <span class="sr-only">{{ env('APP_NAME') }}</span>
                    <x-application-logo class="h-8 w-auto" theme="light" />
                </a>
                <button @click="mobileMenu = !mobileMenu" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-200">
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
                        <a href="#realisations"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-950">Réalisation</a>
                        <a href="#processus"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-950">Processus</a>
                        <a href="#services"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-950">Services</a>
                        <a href="#avis"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-950">Avis</a>
                        <a href="{{ route('blog.index') }}"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-950">Blog</a>
                    </div>
                    <div class="py-6">
                        @auth
                            <a href="{{ route('dashboard') }}"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-white hover:bg-gray-900">Mon
                                compte
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-white hover:bg-gray-900">Connexion
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
