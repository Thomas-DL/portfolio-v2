<x-auth-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Actualités') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="p-6 text-gray-900 dark:text-gray-100">
            <livewire:get-posts postsCount="3" showLoadMore="1" showSearch="0" showFilters="0" />
        </div>
    </div>
</x-auth-layout>
