<?php

namespace App\Livewire;

use Livewire\Component;

class MyProfile extends Component
{
    public $profile;

    public function mount()
    {
        $this->profile = auth()->user();
    }

    public function render()
    {
        return view('livewire.my-profile')->layout('layouts.base');
    }
}
