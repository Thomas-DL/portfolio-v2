<?php

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public string $email = '';

    /**
     * Send a password reset link to the provided email address.
     */
    public function sendPasswordResetLink(): void
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink($this->only('email'));

        if ($status != Password::RESET_LINK_SENT) {
            $this->addError('email', __($status));

            return;
        }

        $this->reset('email');

        session()->flash('status', __($status));
    }
}; ?>

<div class="py-24">

    <div class="sm:mx-auto sm:w-full">
        <a href="/" class="flex justify-center" wire:navigate>
            <x-application-logo class="h-12 w-auto hidden dark:block" theme="light" />
            <x-application-logo class="h-12 w-auto block dark:hidden" theme="dark" />
        </a>
        <h2 class="mt-6 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900 dark:text-white">
            Mot de passe oublié ?
        </h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-[480px]">
        <div class="bg-white dark:bg-white/5 px-6 py-12 shadow sm:rounded-lg sm:px-12">
            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __("Mot de passe oublié ? Pas de problème. Indiquez-nous simplement votre adresse e-mail et nous vous enverrons un lien de réinitialisation de mot de passe qui vous permettra d'en choisir un nouveau.") }}
            </div>
            <form wire:submit="sendPasswordResetLink">
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email"
                        name="email" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="w-full justify-center">
                        {{ __('Envoyer') }}
                    </x-primary-button>
                </div>
            </form>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
        </div>
    </div>
</div>
