<x-app-layout>

    <x-section.hero />

    <x-section.about />

    <x-section.projects />

    <x-section.process />

    <x-section.pricing />

    <x-section.testimonials />

    <x-section.faqs />

    {{-- Posts section --}}
    <section class="bg-white dark:bg-gray-950 pb-16 pt-12 sm:pt-16">
        <div class="container mx-auto">
            <div class="mx-auto max-w-2xl text-center">
                <h2 data-aos="fade-up" data-aos-delay="100" id="section-title"
                    class="text-4xl font-bold tracking-tight text-black dark:text-gray-100 sm:text-6xl">
                    Blog
                </h2>
                <p data-aos="fade-up" data-aos-delay="200" class="mt-2 text-lg leading-8 text-black dark:text-gray-200">
                    Découvrez mes derniers articles.
                </p>
            </div>
            <livewire:get-posts postsCount="3" showLoadMore="0" showSearch="0" showFilters="0" />
        </div>
    </section>

</x-app-layout>
