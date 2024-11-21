<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class FetchDogWithImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $breeds;

    // Constructor to accept breeds data
    public function __construct($breeds)
    {
        $this->breeds = $breeds;
    }

    public function handle()
    {
        $allDogs = [];

        // Loop through the breeds and fetch the data
        foreach ($this->breeds as $key => $value) {
            if (count($value) > 0) {
                foreach ($value as $subBreed) {
                    // Fetch the image URL for each breed/sub-breed
                    $subBreedResponse = Http::get("https://dog.ceo/api/breed/$key/$subBreed/images/random");
                    $url = $subBreedResponse->json()['message'];

                    $allDogs[] = [
                        'breed' => $key,
                        'subBreed' => $subBreed,
                        'imageUrl' => $url
                    ];
                }
            } else {
                $allDogs[] = [
                    'breed' => $key,
                    'subBreed' => $value,
                    'imageUrl' => "https://dog.ceo/api/breed/$key/images/random"
                ];
            }
        }

        // Store the result in cache or database
        Cache::put('all_dogs', $allDogs, now()->addMinutes(10)); // Store for 10 minutes
    }
}
