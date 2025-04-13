<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

class Privacy extends Component
{
    public $activeTab = 'cookies';

    public function changeTab($tabName)
    {
        $this->activeTab = $tabName;
    }

    #[Title('Confidentialité | Pierre Bultez - Développeur Web & Hébergement - Vaucluse')]
    public function render()
    {
        return view('livewire.pages.privacy');
    }
}
