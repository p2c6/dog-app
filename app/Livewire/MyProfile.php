<?php

namespace App\Livewire;

use Livewire\Component;

class MyProfile extends Component
{
    public $profile;

    public $name = '';

    public $address = '';

    public $dob = '';

    public $gender = '';

    public $description = '';


    public function mount()
    {
        $user = auth()->user();
        $this->profile = $user->profile;
        $this->name = $this->profile->name;
        $this->address = $this->profile->address;
        $this->dob = $this->profile->dob;
        $this->gender = $this->profile->gender;
        $this->description = $this->profile->description;
    }

    public function updateProfile()
    {
        $this->validate([
            'name' => ['required'],
        ]);

        auth()->user()->profile()->update([
            'name' => $this->name,
            'address' => $this->address,
            'dob' => $this->dob,
            'gender' => $this->gender,
        ]);

        return redirect('my-profile')->with('message', 'Successfully Updated Profile.');
    }

    public function updateAboutMe()
    {
        auth()->user()->profile()->update([
            'description' => $this->description,
        ]);

        return redirect('my-profile')->with('message', 'Successfully Updated About Me.');
    }

    public function render()
    {
        return view('livewire.my-profile')->layout('layouts.app');
    }
}
