@php
    $step = 1;
    $process = [
        [
            'title' => 'Expression des besoins',
            'description' => 'Première rencontre pour comprendre vos besoins et vos objectifs.',
        ],
        [
            'title' => 'Création d\'une stratégie',
            'description' => 'Élaboration d\'une stratégie digitale pour atteindre vos objectifs.',
        ],
        [
            'title' => 'Atelier design',
            'description' => 'Création d\'un design unique et adapté à votre image de marque.',
        ],
        [
            'title' => 'Développement',
            'description' => 'Développement de votre site web en utilisant les dernières technologies.',
        ],
        [
            'title' => 'Mise en ligne',
            'description' => 'Mise en ligne de votre site web et suivi des performances.',
        ],
    ];
@endphp
<section id="processus"
    class="relative isolate overflow-hidden bg-white dark:bg-gray-950 px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
    <div class="absolute inset-0 -z-10 overflow-hidden">
        <svg class="absolute inset-0 -z-10 h-full w-full stroke-black/10 dark:stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
            aria-hidden="true">
            <defs>
                <pattern id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc" width="200" height="200" x="50%" y="-1"
                    patternUnits="userSpaceOnUse">
                    <path d="M.5 200V.5H200" fill="none" />
                </pattern>
            </defs>
            <svg x="50%" y="-1" class="overflow-visible fill-gray-400/20 dark:fill-gray-800/20">
                <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                    stroke-width="0" />
            </svg>
            <rect width="100%" height="100%" stroke-width="0" fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)" />
        </svg>
    </div>
    <div
        class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
        <div
            class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <div class="lg:pr-4">
                <div class="lg:max-w-lg">
                    <p data-aos="fade-right" data-aos-delay="200"
                        class="inline text-base font-semibold leading-7 bg-gradient-to-r from-primary to-secondary text-transparent bg-clip-text">
                        Mon process
                    </p>
                    <h2 data-aos="fade-right" data-aos-delay="300"
                        class="mt-2 text-4xl font-bold tracking-tight text-black dark:text-gray-100 sm:text-6xl">
                        Comment ça marche de collaborer <span class=" whitespace-nowrap">avec moi ?</span>
                    </h2>
                    <p data-aos="fade-in" data-aos-delay="400"
                        class="mt-6 text-xl leading-8 text-black dark:text-gray-200">J'ai un
                        processus clair et précis pour que l'on
                        collabore en toute confiance et de manière efficiente vers notre but commun : décuplez vos
                        ventes grâce à votre site web.</p>
                </div>
            </div>
        </div>
        <div
            class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
            <nav aria-label="Progress">
                <ol role="list" class="overflow-hidden">
                    @foreach ($process as $item)
                        <li data-aos="fade-down" class="relative pb-10">
                            @if ($step < count($process))
                                <div class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-gradient-to-r from-primary to-secondary"
                                    aria-hidden="true">
                                </div>
                                <div class="absolute left-4 top-4 -ml-px mt-0.5 h-full w-0.5 bg-gradient-to-r from-primary to-secondary"
                                    aria-hidden="true">
                                </div>
                            @endif
                            <!-- Complete Step -->
                            <a href="#" class="group relative flex items-start">
                                <span class="flex h-9 items-center">
                                    <span
                                        class="relative z-10 flex h-8 w-8 items-center justify-center rounded-full bg-gradient-to-r from-primary to-secondary group-hover:bg-indigo-800">
                                        <span class="text-white">{{ $step }}</span>
                                    </span>
                                </span>
                                <span class="ml-4 flex min-w-0 flex-col">
                                    <span
                                        class="text-sm font-medium bg-gradient-to-r from-primary to-secondary text-transparent bg-clip-text">
                                        {{ $item['title'] }}
                                    </span>
                                    <span class="text-sm text-black dark:text-gray-500">
                                        {{ $item['description'] }}
                                    </span>
                                </span>
                            </a>
                        </li>
                        @php
                            $step++;
                        @endphp
                    @endforeach
                </ol>
            </nav>

        </div>
        <div data-aos="fade-right" data-aos-delay="400"
            class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <div class="lg:pr-4">
                <div class="max-w-xl text-base leading-7 text-black dark:text-gray-200 lg:max-w-lg">
                    <p>Pour travailler avec moi prenez rendez-vous, nous discuterons de votre projet et de comment
                        atteindre vos objectifs. Vous serez accompagné du début à la fin de votre projet jusqu'à
                        l'obtention de vos premiers résultats.</p>
                    <ul role="list" class="mt-8 space-y-8 text-black dark:text-gray-300">
                        <li class="flex gap-x-3">
                            <span>
                                <strong
                                    class="font-semibold bg-gradient-to-r from-primary to-secondary text-transparent bg-clip-text">Accompagnement.
                                </strong>
                                Je vous accompagne dans la création de votre site web, de la stratégie à la mise en
                                ligne.
                            </span>
                        </li>
                        <li class="flex gap-x-3">
                            <span>
                                <strong
                                    class="font-semibold bg-gradient-to-r from-primary to-secondary text-transparent bg-clip-text">
                                    Résultats.
                                </strong>
                                Mon objectif est avant tout de vous aider à obtenir des résultats concrets et
                                mesurables.
                            </span>
                        </li>
                        <li class="flex gap-x-3">
                            <span>
                                <strong
                                    class="font-semibold bg-gradient-to-r from-primary to-secondary text-transparent bg-clip-text">Conseils.</strong>
                                Ma mission ne se limite pas à la création de votre site web, je vous conseille pour que
                                vous puissiez obtenir des résultats sur le long terme.
                            </span>
                        </li>
                    </ul>
                    <h2 class="mt-16 text-2xl font-bold tracking-tight text-black dark:text-gray-200">Prêt à avoir <span
                            class="bg-gradient-to-r from-primary to-secondary text-transparent bg-clip-text">+ de
                            clients ?</span></h2>
                    <div class="mt-10 flex items-center gap-x-6">
                        <a href="#"
                            class="relative rounded-full bg-gradient-to-r from-primary to-secondary px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:scale-105 transition ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            <span class="absolute -top-1 -right-1 flex h-4 w-4">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                                <span
                                    class="relative inline-flex rounded-full h-4 w-4 text-xs justify-center items-center bg-red-500">1</span>
                            </span>
                            PRENDRE RDV
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
