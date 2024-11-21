<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserList extends Component
{
    public $users = [];

    public function getOtherUsers()
    {
        $this->users = User::whereNot('id', auth()->user()->id)->get(['id', 'name']);
    }
    
    public function mount()
    {
        $this->getOtherUsers(); 
    }

    public function render()
    {
        return view('livewire.user-list');
    }
}
