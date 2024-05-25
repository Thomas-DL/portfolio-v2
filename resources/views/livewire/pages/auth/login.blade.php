<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>
<div class="flex min-h-full flex-col justify-center py-24 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full">
        <a href="/" class="flex justify-center" wire:navigate>
            <x-application-logo class="h-12 w-auto hidden dark:block" theme="light" />
            <x-application-logo class="h-12 w-auto block dark:hidden" theme="dark" />
        </a>
        <h2 class="mt-6 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900 dark:text-white">
            Connectez-vous à votre compte
        </h2>
    </div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-[480px]">
        <div class="bg-white dark:bg-white/5 px-6 py-12 shadow sm:rounded-lg sm:px-12">
            <form class="space-y-6" wire:submit="login">
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')"
                        class="block text-sm font-medium leading-6 text-gray-900" />
                    <x-text-input wire:model="form.email" id="email"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6"
                        type="email" name="email" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Mot de passe')"
                        class="block text-sm font-medium leading-6 text-gray-900" />

                    <x-text-input wire:model="form.password" id="password"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6"
                        type="password" name="password" required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox"
                            class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary">
                        <label for="remember-me" class="ml-3 block text-sm leading-6 text-gray-900 dark:text-white">Se
                            souvenir de
                            moi</label>
                    </div>

                    @if (Route::has('password.request'))
                        <div class="text-sm leading-6">
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                href="{{ route('password.request') }}" wire:navigate>
                                {{ __('Mot de passe oublié') }}
                            </a>
                        </div>
                    @endif
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-full bg-gradient-to-r from-primary to-secondary px-3 py-2.5 text-sm font-semibold leading-6 text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                        Connexion
                    </button>
                </div>
            </form>
        </div>

        <p class="mt-10 text-center text-sm text-gray-500 dark:text-gray-300">
            Pas encore inscrit ?
            <a href="{{ route('register') }}"
                class="font-semibold leading-6 bg-gradient-to-r from-primary to-secondary text-transparent bg-clip-text">
                Créer un compte
            </a>
        </p>
    </div>
</div>
