<?php

namespace App\Livewire\Settings;

use App\Models\Setting;
use Livewire\Component;
use Livewire\Attributes\Validate;


class UpdateSocialMedia extends Component
{
    public array $links;
    #[Validate('required|string|max:255')]
    public string $network;
    #[Validate('required|url')]
    public string $url;

    public function mount()
    {
        $this->loadExistingLinks();
    }

    public function loadExistingLinks()
    {
        $setting = Setting::find(1);
        $this->links = $setting->social_links ? json_decode($setting->social_links, true) : [];
    }

    public function __construct()
    {
        $this->network = '';
        $this->url = '';
    }

    public function saveUrl(): void
    {
        $this->validate();

        $this->links[] = [
            'network' => $this->network,
            'url' => $this->url,
        ];
        $this->saveLinks();

        // Reset the input fields
        $this->network = '';
        $this->url = '';
    }


    public function removeLink($index)
    {
        // Remove the link from the array
        unset($this->links[$index]);

        // Reindex the array to avoid gaps
        $this->links = array_values($this->links);

        // Save the updated links to the database
        $this->saveLinks();
    }

    public function saveLinks()
    {
        $setting = Setting::find(1);
        $setting->social_links = json_encode($this->links);
        $setting->save();
    }

    public function render()
    {
        return view('livewire.settings.update-social-media');
    }
}
