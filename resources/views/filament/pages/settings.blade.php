<x-filament-panels::page>
    <main class="py-16 lg:flex-auto lg:py-20">
        <div class="max-w-2xl space-y-16 sm:space-y-20 lg:mx-0 lg:max-w-none">

            {{-- APP SETTINGS --}}

            <livewire:settings.update-app-settings />

            {{-- SOCIAL MEDIA URLS --}}

            <livewire:settings.update-social-media />

            {{-- CALL LINK --}}

            <livewire:settings.update-call-link />

        </div>
    </main>
</x-filament-panels::page>
