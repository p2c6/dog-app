<?php

namespace App\Livewire;

use App\Models\Like;
use Livewire\Component;

class Card extends Component
{
    public $dog;

    public function likeOrUnlikeDog()
    {
        try {
            if($this->userDoneReacting()) {
                $this->unLike();
                return redirect('dashboard');
            }

            if($this->alreadyLikedThreeDogs()) {
                return redirect('dashboard')->with('message', 'You can like up to 3 dogs only.');
            }
            
            $this->like();

            return redirect('dashboard');
        } catch(\Exception $e) {
            info('Error like or unlike dog: ' . $e->getMessage());
        }
    }

    public function userDoneReacting()
    {
        $isUserDoneReacting = false;

        $check = Like::where('user_id', auth()->user()->id)
                    ->where('dog_id', $this->dog['id'])
                    ->first();

        if ($check) {
            $isUserDoneReacting = true;
        }

        return $isUserDoneReacting;
    }

    public function alreadyLikedThreeDogs()
    {
        $alreadyLikedThreeDogs = false;

        $count = Like::where('user_id', auth()->user()->id)->count();

        if ($count == 3) {
            $alreadyLikedThreeDogs = true;
        }

        return $alreadyLikedThreeDogs;
    } 

    public function like()
    {
        try {
            Like::create([
                'user_id' => auth()->user()->id,
                'dog_id' => $this->dog['id']
            ]);

            return redirect('dashboard');
        } catch(\Exception $e) {
            info('Error liking dog: ' . $e->getMessage());
        }
    }

    public function unLike()
    {
        try {
            Like::where('user_id', auth()->user()->id)
                ->where('dog_id', $this->dog['id'])
                ->delete();

            return redirect('dashboard');
        } catch(\Exception $e) {
            info('Error unliking dog: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.card');
    }
}
