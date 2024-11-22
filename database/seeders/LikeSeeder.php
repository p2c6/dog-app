<?php

namespace Database\Seeders;

use App\Models\Like;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $likes = [
            [
                'id' => 1,
                'user_id' => 1,
                'dog_id' => 1,
                'created_at' => now()
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'dog_id' => 2,
                'created_at' => now()
            ],
            [
                'id' => 3,
                'user_id' => 2,
                'dog_id' => 3,
                'created_at' => now()
            ],
            [
                'id' => 4,
                'user_id' => 2,
                'dog_id' => 4,
                'created_at' => now()
            ],
        ];

        Like::insert($likes);
    }
}
