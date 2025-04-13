<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

class Legal extends Component
{
    #[Title('Mentions légales | Pierre Bultez - Développeur Web & Hébergement - Vaucluse')]
    public function render()
    {
        return view('livewire.pages.legal');
    }
}
