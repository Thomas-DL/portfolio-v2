@php
    $faqs = [
        [
            'question' => 'What\'s the best thing about Switzerland?',
            'answer' =>
                'I don\'t know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.',
        ],
        [
            'question' => 'What\'s the best thing about Switzerland?',
            'answer' =>
                'I don\'t know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.',
        ],
        [
            'question' => 'What\'s the best thing about Switzerland?',
            'answer' =>
                'I don\'t know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.',
        ],
    ];
@endphp
<section class="bg-white dark:bg-gray-950">
    <div class="mx-auto max-w-7xl px-6 py-16 sm:py-32 lg:px-8 lg:py-32">
        <div class="mx-auto max-w-4xl divide-y divide-white/10">
            <div class="mx-auto max-w-2xl text-center">
                <h2 data-aos="fade-up" data-aos-delay="100" id="section-title"
                    class="text-4xl font-bold tracking-tight text-black dark:text-gray-100 sm:text-6xl">
                    FAQs
                </h2>
                <p data-aos="fade-up" data-aos-delay="200" class="mt-2 text-lg leading-8 text-black dark:text-gray-200">
                    Réponses aux questions les plus fréquemment posées.
                </p>
            </div>
            @foreach ($faqs as $faq)
                <dl data-aos="fade-right" data-aos-delay="300" class="mt-10 space-y-6 divide-y divide-white/10">
                    <div class="pt-6" x-data="{ open: false }">
                        <dt>
                            <button type="button"
                                class="flex w-full items-start justify-between text-left text-black dark:text-white"
                                aria-controls="faq-0" aria-expanded="false" @click="open = !open">
                                <span class="text-base font-semibold leading-7">{{ $faq['question'] }}</span>
                                <span class="ml-6 flex h-7 items-center">

                                    <template x-if="open">
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                                        </svg>
                                    </template>
                                    <template x-if="!open">
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                        </svg>
                                    </template>

                                </span>
                            </button>
                        </dt>
                        <dd x-show="open" x-transition @click.away="open = !open" class="mt-2 pr-12" id="faq-0">
                            <p class="text-base leading-7 text-black dark:text-gray-300">
                                {{ $faq['answer'] }}
                            </p>
                        </dd>
                    </div>
                </dl>
            @endforeach
        </div>
    </div>
</section>
