<?php

namespace App\Livewire;

use Illuminate\Http\Client\Pool;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class CardList extends Component
{
    public $dogs;

    protected $apiUrl = 'https://dog.ceo';
    

    public function callApi()
    {
        try {
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
                        $url = $responses[$index]->json()['message'];
                        $allDogs[] = [
                            'id' => $id,
                            'breed' => $key,
                            'subBreed' => $subBreed,
                            'displayBreed' => ucwords($subBreed . ' ' .  $key),
                            'imageUrl' => $url
                        ];
                        $index++;
                    }
                } else {
                    $url = $responses[$index]->json()['message'];
                    $allDogs[] = [
                        'id' => $id,
                        'breed' => $key,
                        'subBreed' => null,
                        'displayBreed' => ucwords($key),
                        'imageUrl' => $url
                    ];
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


    public function render()
    {
        $this->callApi();

        return view('livewire.card-list');
    }
}