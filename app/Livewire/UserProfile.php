<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Http\Client\Pool;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class UserProfile extends Component
{
    public $user;
    public $dogs;

    protected $apiUrl = 'https://dog.ceo';
    

    public function fetchDogByUser()
    {
        try {           
            $dogIds = $this->getUserLikes($this->user);

            $response = Http::get("$this->apiUrl/api/breeds/list/all");
            $breeds = isset($response->json()['message']) ? $response->json()['message'] : null;

            $allDogs = [];
            
            $responses = Http::pool(fn (Pool $pool) => collect($breeds)->flatMap(function ($value, $key) use ($pool) {
                if (count($value) > 0) {
                    return collect($value)->map(function ($subBreed) use ($pool, $key) {
                        return $pool->get("https://dog.ceo/api/breed/$key/$subBreed/images/random");
                    });
                }

                return [
                    $pool->get("https://dog.ceo/api/breed/$key/images/random")
                ];
            }));

            $index = 0;
            $id = 1;
            foreach ($breeds as $key => $value) {
                if (count($value) > 0) {
                    foreach ($value as $subBreed) {
                        $isLike = false;

                        if (in_array($id, $dogIds)) {
                            $isLike = true;

                            $url = $responses[$index]->json()['message'];
                            $allDogs[] = [
                                'id' => $id,
                                'breed' => $key,
                                'subBreed' => $subBreed,
                                'displayBreed' => ucwords($subBreed . ' ' .  $key),
                                'imageUrl' => $url,
                                'isLike' => $isLike
                            ];
                        }

                        
                        $index++;
                    }
                } else {
                    $isLike = false;

                    if (in_array($id, $dogIds)) {
                        $isLike = true;
                        $url = $responses[$index]->json()['message'];
                        $allDogs[] = [
                            'id' => $id,
                            'breed' => $key,
                            'subBreed' => null,
                            'displayBreed' => ucwords($key),
                            'imageUrl' => $url,
                            'isLike' => $isLike
                        ];
                    }

                    
                    $index++;
                }
                $id++;
            }
            $this->dogs = $allDogs;
            
        } catch (\Exception $e) {
            // Handle error
            info("Error fetching data: " . $e->getMessage());
        }
    }

    public function getUserLikes($user): array
    {
        $user = User::where('id', $user->id)->first();
        $likeByUser = $user->likes();
        $pluckDogId = $likeByUser->pluck('dog_id')->toArray();

        return $pluckDogId;
    }
    
    public function getUser()
    {
        $this->user = User::where('id', $this->user)->first();
    }

    public function mount()
    {
        $this->getUser();
        $this->fetchDogByUser();
    }

    public function render()
    {
        return view('livewire.user-profile')->layout('layouts.base');
    }
}
