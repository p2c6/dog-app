<?php

namespace App\Livewire;

use App\Models\Profile;
use App\Models\User;
use Livewire\Component;

class UserList extends Component
{
    public $users = [];
    public $otherUser;

    public function getOtherUsers()
    {
        if($this->otherUser) {
            $this->users = Profile::where('user_id', '!=', auth()->user()->id)
                            ->where('user_id', '!=', $this->otherUser->user_id)
                            ->get(['id', 'user_id', 'name']);
            return;
        }

        $this->users = Profile::whereNot('user_id', auth()->user()->id)->get(['id', 'user_id', 'name']);
    }
    
    public function mount()
    {
        $this->getOtherUsers(); 
    }

    public function render()
    {
        return view('livewire.user-list')->layout('layouts.base');
    }
}
