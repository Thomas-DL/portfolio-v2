<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="flex min-h-full flex-col justify-center py-24 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full">
        <a href="/" class="flex justify-center" wire:navigate>
            <x-application-logo class="h-12 w-auto hidden dark:block" theme="light" />
            <x-application-logo class="h-12 w-auto block dark:hidden" theme="dark" />
        </a>
        <h2 class="mt-6 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900 dark:text-white">
            Créer votre compte
        </h2>
    </div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-[480px]">
        <div class="bg-white dark:bg-white/5 px-6 py-12 shadow sm:rounded-lg sm:px-12">
            <form class="space-y-6" wire:submit="register">

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Prénom')" />
                    <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text"
                        name="name" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')"
                        class="block text-sm font-medium leading-6 text-gray-900" />
                    <x-text-input wire:model="form.email" id="email" class="block mt-1 w-full" type="email"
                        name="email" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Mot de passe')" />

                    <x-text-input wire:model="password" id="password" class="block mt-1 w-full" type="password"
                        name="password" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirmer mot de passe')" />

                    <x-text-input wire:model="password_confirmation" id="password_confirmation"
                        class="block mt-1 w-full" type="password" name="password_confirmation" required
                        autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-full bg-gradient-to-r from-primary to-secondary px-3 py-2.5 text-sm font-semibold leading-6 text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                        S'inscrire
                    </button>
                </div>
            </form>

        </div>

        <p class="mt-10 text-center text-sm text-gray-500 dark:text-gray-300">
            Déjà inscrit ?
            <a href="{{ route('login') }}"
                class="font-semibold leading-6 bg-gradient-to-r from-primary to-secondary text-transparent bg-clip-text">
                Se connecter
            </a>
        </p>
    </div>
</div>
