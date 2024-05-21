@php
    $landing = [
        'headline' => 'Boost tes ventes',
        'name' => 'Landing Page',
        'features' => [
            '2 Propositions design Figma',
            '1 Landing page',
            'Responsive',
            'Nom de domaine',
            'Hébergement',
            'Retours illimités',
        ],
    ];
    $premium = [
        'headline' => 'Développe ton business',
        'name' => 'Site vitrine + Landing Page',
        'features' => [
            '2 Propositions de design Figma',
            'Branding premium',
            'Kit réseaux sociaux',
            'Accompagnement stratégie SEO',
            '1 Site vitrine',
            '1 Landing page | tarif à -50%',
            'Responsive',
            'Nom de domaine',
            'Hébergement',
            'Retours illimités',
        ],
    ];
    $website = [
        'headline' => 'Affirme ta présence en ligne',
        'name' => 'Site vitrine',
        'features' => [
            '2 Propositions de design Figma',
            'Branding premium',
            'Kit réseaux sociaux',
            'Accompagnement stratégie SEO',
            '1 Site vitrine',
            'Responsive',
            'Nom de domaine',
            'Hébergement',
            'Retours illimités',
        ],
    ];
@endphp
<section id="services" class="isolate overflow-hidden">
    <div class="relative flow-root bg-white dark:bg-gray-950 pb-16 pt-24 sm:pt-32 lg:pb-0">
        <div class="mx-auto max-w-7xl mb-24 px-6 lg:px-8">
            <div class="relative z-10 text-center">
                <h2 data-aos="fade-up" data-aos-delay="100" id="section-title"
                    class="text-4xl font-bold tracking-tight text-black dark:text-gray-100 sm:text-6xl">
                    Faisons simple et efficace.
                </h2>
                <p data-aos="fade-up" data-aos-delay="200"
                    class="mx-auto mt-4 max-w-2xl text-center text-lg leading-8 text-black dark:text-white">
                    Pas de surprises. Pas de frais caché. Des prix justes.
                </p>
            </div>
            <div
                class="relative mx-auto mt-16 grid max-w-md grid-cols-1 gap-y-8 lg:mx-0 lg:-mb-14 lg:max-w-none lg:grid-cols-3">
                <svg viewBox="0 0 1208 1024" aria-hidden="true"
                    class="absolute z-[0] rotate-90 -bottom-48 left-1/2 h-[64rem] -translate-x-1/2 translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] lg:-top-48 lg:bottom-auto lg:translate-y-0">
                    <ellipse cx="604" cy="512" fill="url(#d25c25d4-6d43-4bf9-b9ac-1842a30a4867)"
                        rx="604" ry="512" />
                    <defs>
                        <radialGradient id="d25c25d4-6d43-4bf9-b9ac-1842a30a4867">
                            <stop stop-color="#FF007A" />
                            <stop offset="1" stop-color="#FF7A00" />
                        </radialGradient>
                    </defs>
                </svg>
                <div class="hidden max-h-[90%] lg:absolute lg:inset-x-px lg:bottom-0 lg:top-4 lg:block lg:rounded-t-2xl lg:bg-gray-100/80 dark:lg:bg-gray-900/80 lg:ring-1 lg:ring-black/10 dark:lg:ring-white/10"
                    aria-hidden="true">
                </div>
                <div data-aos="fade-right" data-aos-delay="300"
                    class="relative rounded-2xl bg-gray-100/80 dark:bg-gray-800/80 ring-1 ring-black/10 dark:ring-white/10 lg:bg-transparent lg:pb-14 lg:ring-0">
                    <div class="p-8 lg:pt-12 xl:p-10 xl:pt-14">
                        <h3 id="tier-starter" class="text-sm font-semibold leading-6 text-black dark:text-white">
                            {{ $landing['headline'] }}</h3>
                        <div
                            class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between lg:flex-col lg:items-stretch">
                            <div class="mt-2 flex items-center gap-x-4">
                                <!-- Price, update based on frequency toggle state -->
                                <p class="text-4xl font-bold tracking-tight text-black dark:text-white">
                                    {{ $landing['name'] }}</p>
                            </div>
                            <a href="#" aria-describedby="tier-starter"
                                class="rounded-full py-2 px-3 text-center text-sm font-semibold leading-6 text-black dark:text-white hover:scale-105 transition ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 bg-black/10 dark:bg-white/10 hover:bg-black/20 dark:hover:bg-white/20 focus-visible:outline-white">
                                PRENDRE RDV
                            </a>
                        </div>
                        <div class="mt-8 flow-root sm:mt-10">
                            <ul role="list"
                                class="-my-2 divide-y border-t text-sm leading-6 lg:border-t-0 divide-white/5 border-white/5 text-black dark:text-white">
                                @foreach ($landing['features'] as $feature)
                                    <li class="flex gap-x-3 py-2">
                                        <svg class="h-6 w-5 flex-none text-gray-500" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        {{ $feature }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="200"
                    class="relative rounded-2xl z-10 bg-black dark:bg-white shadow-xl ring-1 ring-gray-100/10 dark:ring-gray-900/10">
                    <div class="p-8 lg:pt-12 xl:p-10 xl:pt-14">
                        <h3 id="tier-scale" class="text-sm font-semibold leading-6 text-white dark:text-gray-900">
                            {{ $premium['headline'] }}</h3>
                        <div
                            class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between lg:flex-col lg:items-stretch">
                            <div class="mt-2 flex items-center gap-x-4">
                                <!-- Price, update based on frequency toggle state -->
                                <p class="text-4xl font-bold tracking-tight text-white dark:text-gray-900">
                                    {{ $premium['name'] }}</p>
                            </div>
                            <a href="#" aria-describedby="tier-scale"
                                class="rounded-full py-2 px-3 text-center text-sm font-semibold leading-6 text-white dark:text-white hover:scale-105 transition ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 bg-gradient-to-r from-primary to-secondary shadow-sm">
                                PRENDRE RDV
                            </a>
                        </div>
                        <div class="mt-8 flow-root sm:mt-10">
                            <ul role="list"
                                class="-my-2 divide-y border-t text-sm leading-6 lg:border-t-0 divide-gray-900/5 border-gray-900/5 text-white dark:text-gray-600">
                                @foreach ($premium['features'] as $feature)
                                    <li class="flex gap-x-3 py-2">
                                        <svg class="h-6 w-5 flex-none text-white dark:text-gray-500" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        {{ $feature }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-left" data-aos-delay="300"
                    class="relative rounded-2xl bg-gray-100/80 dark:bg-gray-800/80 ring-1 ring-black/10 dark:ring-white/10 lg:bg-transparent lg:pb-14 lg:ring-0">
                    <div class="p-8 lg:pt-12 xl:p-10 xl:pt-14">
                        <h3 id="tier-growth" class="text-sm font-semibold leading-6 text-black dark:text-white">
                            {{ $website['headline'] }}
                        </h3>
                        <div
                            class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between lg:flex-col lg:items-stretch">
                            <div class="mt-2 flex items-center gap-x-4">
                                <!-- Price, update based on frequency toggle state -->
                                <p class="text-4xl font-bold tracking-tight text-black dark:text-white">
                                    {{ $website['name'] }}</p>
                            </div>
                            <a href="#" aria-describedby="tier-growth"
                                class="rounded-full py-2 px-3 text-center text-sm font-semibold leading-6 text-black dark:text-white hover:scale-105 transition ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 bg-black/10 dark:bg-white/10 hover:bg-black/20 dark:hover:bg-white/20 focus-visible:outline-white">
                                PRENDRE RDV
                            </a>
                        </div>
                        <div class="mt-8 flow-root sm:mt-10">
                            <ul role="list"
                                class="-my-2 divide-y border-t text-sm leading-6 lg:border-t-0 divide-white/5 border-white/5 text-black dark:text-white">
                                @foreach ($website['features'] as $feature)
                                    <li class="flex gap-x-3 py-2">
                                        <svg class="h-6 w-5 flex-none text-gray-500" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        {{ $feature }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 bottom-0 z-[1] h-24 bg-gradient-to-t from-white dark:from-gray-950 sm:h-32">
        </div>
    </div>

</section>
