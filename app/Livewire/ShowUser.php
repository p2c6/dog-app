<?php

namespace App\Livewire;

use Livewire\Component;

class ShowUser extends Component
{
    public $user;
    
    public function render()
    {
        return view('livewire.show-user');
    }
}
