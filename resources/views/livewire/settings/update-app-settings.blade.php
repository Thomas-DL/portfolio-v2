<div>
    <h2 class="text-base font-semibold leading-7 text-gray-900 dark:text-white">Paramètres de l'application</h2>
    <p class="mt-1 text-sm leading-6 text-gray-500 dark:text-gray-200">Ces information sont essentiel pour le
        référencement du site.</p>

    <dl
        class="mt-6 space-y-6 divide-y divide-gray-100 dark:divide-gray-800 border-t border-gray-200 dark:border-gray-800 text-sm leading-6">
        <div class="pt-6 sm:flex">
            <dt class="font-medium text-gray-900 dark:text-white sm:w-64 sm:flex-none sm:pr-6">Nom du site</dt>
            <dd class="mt-1 gap-x-6 sm:mt-0 sm:flex-auto" x-data="{ showInput: false }">
                <form wire:submit="editName" class="flex justify-between">
                    <div x-show="!showInput" class="text-gray-900 dark:text-white">{{ $app_name }}</div>
                    <input x-show="showInput" type="text" name="app_name" id="app_name" wire:model="app_name"
                        class="block rounded-md border-0 py-1.5 text-gray-900 dark:text-white dark:bg-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                    <button x-show="!showInput" type="button"
                        class="font-semibold text-indigo-600 hover:text-indigo-500"
                        @click="showInput = !showInput">Modifier</button>
                    <button x-show="showInput" type="submit"
                        class="font-semibold text-indigo-600 hover:text-indigo-500"
                        @click="showInput = !showInput">Confirmer</button>
                </form>
            </dd>
        </div>
        <div class="pt-6 sm:flex">
            <dt class="font-medium text-gray-900 dark:text-white sm:w-64 sm:flex-none sm:pr-6">URL du site</dt>
            <dd class="mt-1 gap-x-6 sm:mt-0 sm:flex-auto" x-data="{ showInput: false }">
                <form wire:submit="editUrl" class="flex justify-between">
                    <div x-show="!showInput" class="text-gray-900 dark:text-white">{{ $app_url }}</div>
                    <input x-show="showInput" type="text" name="app_url" id="app_url" wire:model="app_url"
                        class="block rounded-md border-0 py-1.5 text-gray-900 dark:text-white dark:bg-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                    <button x-show="!showInput" type="button"
                        class="font-semibold text-indigo-600 hover:text-indigo-500"
                        @click="showInput = !showInput">Modifier</button>
                    <button x-show="showInput" type="submit"
                        class="font-semibold text-indigo-600 hover:text-indigo-500"
                        @click="showInput = !showInput">Confirmer</button>
                </form>
            </dd>
        </div>
        <div class="pt-6 sm:flex">
            <dt class="font-medium text-gray-900 dark:text-white sm:w-64 sm:flex-none sm:pr-6">Description</dt>
            <dd class="mt-1 gap-x-6 sm:mt-0 sm:flex-auto" x-data="{ showInput: false }">
                <form wire:submit="editDescription" class="flex justify-between">
                    <div x-show="!showInput" class="text-gray-900 dark:text-white">
                        {{ substr($app_description, 0, 24) }}{{ strlen($app_description) >= 24 ? '...' : '' }}</div>
                    <textarea x-show="showInput" wire:model="app_description" rows="4" name="app_description" id="app_description"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-white dark:bg-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-800 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>


                    <button x-show="!showInput" type="button"
                        class="font-semibold text-indigo-600 hover:text-indigo-500"
                        @click="showInput = !showInput">Modifier</button>
                    <button x-show="showInput" type="submit"
                        class="font-semibold text-indigo-600 hover:text-indigo-500"
                        @click="showInput = !showInput">Confirmer</button>
                </form>
            </dd>
        </div>
    </dl>
</div>