<footer class="bg-white dark:bg-gray-950" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-24 lg:px-8 lg:pt-32">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="space-y-8">
                <x-application-logo class="h-8 w-auto hidden dark:block" theme="light" />
                <x-application-logo class="h-8 w-auto block dark:hidden" theme="dark" />
                <p class="text-sm leading-6 text-black dark:text-gray-300">
                    Convertissez vos leads en clients avec votre futur site web.
                </p>
                <div class="flex space-x-6">
                    @if (isset($settings->social_links))
                        @foreach (json_decode($settings->social_links) as $link)
                            <a href="{{ $link->url }}" class="text-black dark:text-gray-500 hover:text-gray-400">
                                <span class="sr-only">Facebook</span>
                                @svg($link->network, 'h-6 w-6')
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="mt-16 grid grid-cols-1 sm:grid-cols-3 gap-8 xl:col-span-2 xl:mt-0">
                <div class="md:grid md:grid-cols-1 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold leading-6 text-black dark:text-white">Section</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="{{ route('home') }}#realisations"
                                    class="text-sm leading-6 text-gray-950 dark:text-gray-300">Réalisations</a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}#processus"
                                    class="text-sm leading-6 text-gray-950 dark:text-gray-300">Processus</a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}#services"
                                    class="text-sm leading-6 text-gray-950 dark:text-gray-300">Services</a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}#avis"
                                    class="text-sm leading-6 text-gray-950 dark:text-gray-300">Avis</a>
                            </li>
                            <li>
                                <a href="{{ route('blog.index') }}"
                                    class="text-sm leading-6 text-gray-950 dark:text-gray-300">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-1 md:gap-8">
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-semibold leading-6 text-black dark:text-white">Services</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="{{ $settings->call_url ?? '#' }}"
                                    class="text-sm leading-6 text-black dark:text-gray-300">Landing
                                    Page</a>
                            </li>
                            <li>
                                <a href="{{ $settings->call_url ?? '#' }}"
                                    class="text-sm leading-6 text-black dark:text-gray-300">Site
                                    vitrine</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-1 md:gap-8">
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-semibold leading-6 text-black dark:text-white">À propos</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="{{ route('mentions-legales') }}"
                                    class="text-sm leading-6 text-black dark:text-gray-300 hover:text-white">Mentions
                                    légales</a>
                            </li>
                            <li>
                                <a href="{{ route('cgu') }}"
                                    class="text-sm leading-6 text-black dark:text-gray-300 hover:text-white">CGU</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-16 border-t border-white/10 pt-8 sm:mt-20 lg:mt-24">
            <p class="text-xs leading-5 text-black dark:text-gray-400">&copy; {{ date('Y') }}
                {{ $settings->app_name ?? env('APP_NAME') }}, Inc. All
                rights reserved.</p>
        </div>
    </div>
</footer>
