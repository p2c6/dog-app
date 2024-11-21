<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public $cards = [
        ['id' => 1, 'title' => 'Card 1', 'description' => 'This is card 1'],
        ['id' => 2, 'title' => 'Card 2', 'description' => 'This is card 2'],
        ['id' => 3, 'title' => 'Card 3', 'description' => 'This is card 3'],
    ];
    
    public function render()
    {
        return view('livewire.dashboard', compact('cards'));
    }
}
