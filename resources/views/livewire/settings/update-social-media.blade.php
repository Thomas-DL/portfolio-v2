<div x-data="{ addLink: false }">
    <h2 class="text-base font-semibold leading-7 text-gray-900 dark:text-white">Réseaux sociaux</h2>
    <p class="mt-1 text-sm leading-6 text-gray-500 dark:text-gray-200">Ajouter un lien vers vos réseaux sociaux.</p>

    @if (!empty($links))
        @foreach ($links as $index => $link)
            <ul role="list"
                class="mt-6 divide-y divide-gray-100 dark:divide-gray-800 border-t border-gray-200 dark:border-gray-800 text-sm leading-6">
                <li class="flex justify-between gap-x-6 py-6">
                    <div class="font-medium text-gray-900 dark:text-white">@svg($link['network'], 'w-6 h-auto text-gray-900 dark:text-white')</div>
                    <div class="font-medium text-gray-900 dark:text-white">{{ $link['url'] }}</div>
                    <div class="flex space-x-4 items-center">
                        <button type="button" wire:click="removeLink({{ $index }})"
                            class="font-semibold text-red-600 hover:text-red-500">
                            <x-heroicon-o-trash class="w-4 h-auto" />
                        </button>
                        <button type="button"
                            class="font-semibold text-indigo-600 hover:text-indigo-500">Modifier</button>
                    </div>
                </li>
            </ul>
        @endforeach
    @endif
    <form wire:submit="saveUrl" x-show="addLink">
        @csrf
        <ul role="list"
            class="divide-y divide-gray-100 dark:divide-gray-800 border-t border-gray-200 dark:border-gray-800 text-sm leading-6">
            <li class="flex justify-between gap-x-6 py-6">
                <select id="network" name="network" wire:model="network"
                    class="block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 dark:text-white dark:bg-gray-900 ring-1 ring-inset ring-gray-300 dark:ring-gray-700 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <option value="fab-behance">Choisir un réseau social</option>
                    <option value="fab-behance">Behance</option>
                    <option value="fab-codepen">CodePen</option>
                    <option value="fab-dribbble">Dribbble</option>
                    <option value="fab-facebook">Facebook</option>
                    <option value="fab-github">Github</option>
                    <option value="fab-gitlab">GitLab</option>
                    <option value="fab-instagram">Instagram</option>
                    <option value="fab-linkedin">LinkedIn</option>
                    <option value="fab-medium">Medium</option>
                    <option value="fab-pinterest">Pinterest</option>
                    <option value="fab-reddit">Reddit</option>
                    <option value="fab-snapchat">Snapchat</option>
                    <option value="fab-stack-overflow">Stack Overflow</option>
                    <option value="fab-telegram">Telegram</option>
                    <option value="fab-threads">Threads</option>
                    <option value="fab-tumblr">Tumblr</option>
                    <option value="fab-x-twitter">Twitter</option>
                    <option value="fab-whatsapp">WhatsApp</option>
                    <option value="fab-youtube">Youtube</option>
                </select>
                <input type="text" name="url" id="url" wire:model="url"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-white dark:bg-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    placeholder="https://...">

                <button type="submit" class="font-semibold text-indigo-600 hover:text-indigo-500">Ajouter</button>
            </li>
        </ul>
    </form>

    <div class="flex border-t border-gray-100 dark:border-gray-800 pt-6">
        <button x-show="!addLink" type="button"
            class="text-sm font-semibold leading-6 text-indigo-600 hover:text-indigo-500"
            @click="addLink = !addLink"><span aria-hidden="true">+</span> Ajouter un autre lien</button>
        <button x-show="addLink" type="button"
            class="text-sm font-semibold leading-6 text-indigo-600 hover:text-indigo-500"
            @click="addLink = !addLink">Annuler</button>
    </div>
</div>
