<section id="realisations" class="relative bg-gray-950 py-24 sm:py-32">
    <svg class="absolute inset-0 z-0 rotate-180 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
        aria-hidden="true">
        <defs>
            <pattern id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc" width="200" height="200" x="50%" y="-1"
                patternUnits="userSpaceOnUse">
                <path d="M.5 200V.5H200" fill="none" />
            </pattern>
        </defs>
        <svg x="50%" y="-1" class="overflow-visible fill-gray-800/20">
            <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                stroke-width="0" />
        </svg>
        <rect width="100%" height="100%" stroke-width="0" fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)" />
    </svg>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 id="section-title" class="text-4xl font-bold tracking-tight text-gray-100 sm:text-6xl">
                Mes réalisations
            </h2>
            <p class="mt-2 text-lg leading-8 text-gray-200">Des sites web qui donnent des résultats, et rien d'autre.
                Vous pourriez être le prochain !</p>
        </div>
        @if (isset($projects) && count($projects) > 0)
            <div
                class="mx-auto mt-16 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @foreach ($projects as $project)
                    <article
                        class="group relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-950 px-8 pb-8 pt-80 sm:pt-48 lg:pt-96 hover:scale-105 transition ease-in-out">
                        <img src="{{ $project->getThumbnail() }}" alt=""
                            class="absolute top-0 left-0 inset-0 -z-10 w-full object-top group-hover:-top-[500px] transition-all ease-in-out duration-[2500ms]">
                        <div class="absolute inset-0 -bottom-1 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40">
                        </div>
                        <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        <div
                            class="absolute top-[calc(50%-36px)] left-[calc(50%-65px)] flex justify-center items-center">
                            <button type="button"
                                class="opacity-0 group-hover:opacity-100 inline-flex items-center gap-x-1.5 rounded-full bg-gradient-to-r from-[#FF007A] to-[#FF7A00] px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition-all ease-in-out">
                                Voir le projet
                                <x-heroicon-o-arrow-up-right class="-mr-0.5 h-5 w-5" />
                            </button>
                        </div>
                        <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
                            <a href="">
                                <span class="absolute inset-0"></span>
                                {{ $project->name }}
                            </a>
                        </h3>
                        <div
                            class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-400">
                            <p class="mr-8">{{ $project->type }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        @else
            <p class="text-center text-white font-bold text-xl mt-16">ça arrive bientôt... 👀</p>
        @endif
    </div>
</section>
