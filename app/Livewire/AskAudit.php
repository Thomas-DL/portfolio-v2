<?php

namespace App\Livewire;

use App\Models\Audit;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Session;

class AskAudit extends Component
{
    #[Validate('required|url')]
    public string $website_url;
    #[Validate('required|email')]
    public string $email;

    public string $status = 'en attente';

    public function askAudit(): void
    {
        $this->validate();

        Audit::create(
            $this->only(['website_url', 'email', 'status'])
        );

        Session::flash('status', 'audit-sent');
    }

    public function render()
    {
        return view('livewire.ask-audit');
    }
}
