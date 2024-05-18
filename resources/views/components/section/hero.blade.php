<div class="relative  overflow-hidden bg-gray-950">
    <svg class="absolute inset-0 z-10 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
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
    <div class="absolute left-[calc(50%-4rem)] top-10 z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]"
        aria-hidden="true">
        <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-primary to-secondary opacity-20"
            style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
        </div>
    </div>
    <div class="relative z-20 mx-auto px-6 pb-24 pt-10 sm:pb-32 flex justify-center lg:px-8 lg:py-20">
        <div class="mx-auto max-w-4xl text-center lg:mx-0 lg:pt-8">
            <div class="mt-24 sm:mt-32 lg:mt-16">
                @if (isset($post) && !empty($post[0]))
                    <a data-aos="fade-up" href="{{ route('blog.show', [$post[0]->category->slug, $post[0]->slug]) }}"
                        class="inline-flex flex-wrap justify-center space-y-6 min-[420px]:space-y-0 space-x-6">
                        <span
                            class="rounded-full bg-gradient-to-r from-primary to-secondary px-3 py-1 text-sm font-semibold leading-6 text-white">
                            Nouveau !
                        </span>
                        <span class="inline-flex items-center space-x-2 text-sm font-medium leading-6 text-gray-200">
                            <span>{{ $post[0]->title }}</span>
                            <svg class="h-5 w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </a>
                @endif
            </div>
            <h1 data-aos="fade-up" data-aos-delay="100"
                class="mt-10 text-4xl font-bold tracking-tight text-white sm:text-6xl">Transformons
                ensemble
                <span class="bg-gradient-to-r from-primary to-secondary text-transparent bg-clip-text">
                    vos
                    idées
                </span>
                en expériences web
                <span
                    class="bg-gradient-to-r from-primary to-secondary text-transparent bg-clip-text">remarquables</span>
            </h1>
            <p data-aos="fade-up" data-aos-delay="200" class="mt-6 text-lg leading-8 text-gray-300">Je réalise pour vous
                des sites vitrines
                qui captent
                l'attention et convertissent vos visiteurs en clients fidèles.
            </p>

            <livewire:ask-audit />

        </div>
    </div>
</div>
