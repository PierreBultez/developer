<?php

namespace App\Livewire\Components;

use Livewire\Component;

class CookieBanner extends Component
{
    public $showBanner = true;

    public function mount()
    {
        // Vérifier si le consentement est déjà enregistré
        if (session()->has('cookie-consent')) {
            $this->showBanner = false;
        }
    }

    public function acceptMinimal()
    {
        session()->put('cookie-consent', 'minimal');
        $this->showBanner = false;
    }

    public function acceptAll()
    {
        session()->put('cookie-consent', 'all');
        $this->showBanner = false;
    }

    public function render()
    {
        return view('livewire.components.cookie-banner');
    }
}
