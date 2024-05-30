<footer class="bg-white dark:bg-gray-950" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-24 lg:px-8 lg:pt-32">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="space-y-8">
                <x-application-logo class="h-8 w-auto hidden dark:block" theme="light" />
                <x-application-logo class="h-8 w-auto block dark:hidden" theme="dark" />
                <p class="text-sm leading-6 text-black dark:text-gray-300">Making the world a better place through
                    constructing elegant
                    hierarchies.</p>
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
            <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold leading-6 text-black dark:text-white">Solutions</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="#"
                                    class="text-sm leading-6 text-black dark:text-gray-300 hover:text-white">Marketing</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-sm leading-6 text-black dark:text-gray-300 hover:text-white">Analytics</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-sm leading-6 text-black dark:text-gray-300 hover:text-white">Commerce</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-sm leading-6 text-black dark:text-gray-300 hover:text-white">Insights</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-semibold leading-6 text-black dark:text-white">Support</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="#"
                                    class="text-sm leading-6 text-black dark:text-gray-300 hover:text-white">Pricing</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-sm leading-6 text-black dark:text-gray-300 hover:text-white">Documentation</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-sm leading-6 text-black dark:text-gray-300 hover:text-white">Guides</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-sm leading-6 text-black dark:text-gray-300 hover:text-white">API
                                    Status</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold leading-6 text-black dark:text-white">Company</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="#"
                                    class="text-sm leading-6 text-black dark:text-gray-300 hover:text-white">About</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-sm leading-6 text-black dark:text-gray-300 hover:text-white">Blog</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-sm leading-6 text-black dark:text-gray-300 hover:text-white">Jobs</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-sm leading-6 text-black dark:text-gray-300 hover:text-white">Press</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-sm leading-6 text-black dark:text-gray-300 hover:text-white">Partners</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-semibold leading-6 text-black dark:text-white">Legal</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="#"
                                    class="text-sm leading-6 text-black dark:text-gray-300 hover:text-white">Claim</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-sm leading-6 text-black dark:text-gray-300 hover:text-white">Privacy</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-sm leading-6 text-black dark:text-gray-300 hover:text-white">Terms</a>
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
