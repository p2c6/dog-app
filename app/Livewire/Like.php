<?php

namespace App\Livewire;

use Livewire\Component;

class Like extends Component
{
    public $dog;
    
    public function render()
    {
        return view('livewire.like');
    }
}
