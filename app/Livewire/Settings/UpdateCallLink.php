<?php

namespace App\Livewire\Settings;

use App\Models\Setting;
use Livewire\Component;
use Livewire\Attributes\Validate;

class UpdateCallLink extends Component
{
    #[Validate('required|url')]
    public string $callLink;

    public function mount()
    {
        $this->callLink = Setting::find(1)->call_url ?? '';
    }

    public function editCall(): void
    {
        $this->validate();

        $setting = Setting::find(1);
        $setting->call_url = $this->callLink;
        $setting->save();
    }

    public function render()
    {
        return view('livewire.settings.update-call-link');
    }
}
