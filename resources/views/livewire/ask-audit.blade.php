<div data-aos="fade-up" data-aos-delay="300" x-data="{ url: '' }">
    <div class="sm:inline-block mt-10 hidden  w-full p-[2px] bg-gradient-to-r from-[#FF007A] to-[#FF7A00] rounded-full">
        <div class="p-4 flex justify-between bg-gray-950 rounded-full">
            <input type="text" placeholder="https://url-de-votre-site.com" x-model="url"
                class="w-full bg-gray-950 border-none rounded-full focus:ring-0 text-white">
            <button type="button" x-data="" x-on:click.prevent="$dispatch('open-modal', 'ask-audit')"
                class="rounded-full min-w-fit bg-gray-50 p-4 text-md font-semibold text-black shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">
                Demander mon audit gratuit
            </button>
        </div>
    </div>
    <div class="sm:hidden mt-10 flex flex-wrap space-y-6">
        <input type="text" placeholder="https://url-de-votre-site.com"
            class="w-full bg-gray-950 border border-primary p-4 rounded-full focus:ring-0 focus:border-secondary text-white">
        <button type="button" x-data="" x-on:click.prevent="$dispatch('open-modal', 'ask-audit')"
            class="rounded-full w-full bg-gray-50 p-4 text-md font-semibold text-black shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">
            Demander mon audit gratuit
        </button>
    </div>
    <x-audit-modal name="ask-audit" :show="$errors->isNotEmpty()" focusable>
        <form wire:submit="askAudit" class="p-6">

            <h2 class="text-2xl font-bold tracking-tight text-gray-100 sm:text-3xl">Merci de votre <span
                    class="bg-gradient-to-r from-primary to-secondary text-transparent bg-clip-text">
                    confiance !
                </span>
            </h2>

            @if (session()->has('status'))
                <div>
                    <p class="mt-6 text-sm leading-8 text-gray-300">Votre demande à bien été prise en compte.</p>
                </div>
            @else
                <p class="mt-6 text-sm leading-8 text-gray-300">Laissez-moi un moyen de vous recontacter 🙃</p>
                <div class="space-y-6 text-left">
                    <div>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <x-heroicon-o-globe-alt class="w-4 h-auto" />
                            </div>
                            <input type="text" name="url" id="url" x-model="url" wire:model="website_url"
                                class="block w-full rounded-full border-0 py-2 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6"
                                placeholder="https://url-de-votre-site.com">
                        </div>
                        <div class="mt-2">
                            @error('website_url')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <x-heroicon-o-envelope class="w-4 h-auto" />
                            </div>
                            <input type="email" name="email" id="email" wire:model="email"
                                class="block w-full rounded-full border-0 py-2 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6"
                                placeholder="exemple@email.com">
                        </div>
                        <div class="mt-2">
                            @error('email')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="rounded-full w-full flex justify-center bg-gradient-to-r from-primary to-secondary px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:scale-105 transition ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Demander mon audit gratuit
                        </button>
                    </div>
                </div>
            @endif

        </form>
    </x-audit-modal>
    <p class="mt-6 text-sm leading-8 text-gray-300">
        Comptez un délai de 24h à 72h pour recevoir votre audit gratuit. 🚀
    </p>
</div>
