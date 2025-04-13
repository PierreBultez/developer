<?php

namespace App\Livewire;

use Livewire\Component;

class ProjectCard extends Component
{
    // Propriétés du projet
    public $project;
    public $isFlipped = false;

    // Bascule l'état de la carte (retournement)
    public function flipCard()
    {
        $this->isFlipped = !$this->isFlipped;
    }

    public function render()
    {
        return view('livewire.project-card');
    }
}
