<?php

namespace App\Livewire\Settings;

use App\Models\Setting;
use Livewire\Component;
use Livewire\Attributes\Validate;

class UpdateAppSettings extends Component
{

    #[Validate('required')]
    public string $app_name;

    #[Validate('required')]
    public string $app_url;

    #[Validate('required|max:255')]
    public string $app_description;

    public function mount()
    {
        $this->app_name = Setting::select('app_name')->get()->first()->app_name ?? getenv('APP_NAME');
        $this->app_url = Setting::select('app_url')->get()->first()->app_url ?? getenv('APP_URL');
        $this->app_description = Setting::select('app_description')->get()->first()->app_description ?? '';
    }

    public function editName(): void
    {
        $this->validate();

        Setting::where('id', 1)->update([
            'app_name' => $this->app_name
        ]);
    }

    public function editUrl(): void
    {
        $this->validate();

        Setting::where('id', 1)->update([
            'app_url' => $this->app_url
        ]);
    }

    public function editDescription(): void
    {
        $this->validate();

        Setting::where('id', 1)->update([
            'app_description' => $this->app_description
        ]);
    }

    public function render()
    {
        return view('livewire.settings.update-app-settings');
    }
}
