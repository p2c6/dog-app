<?php

namespace App\Livewire;

use Livewire\Component;

class LikeList extends Component
{
    public $dogs;
    
    public function render()
    {
        return view('livewire.like-list');
    }
}
