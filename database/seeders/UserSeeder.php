<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id' => 1,
                'email' => 'jdoe@test.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'email' => 'jcarey@test.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'email' => 'kmarx@test.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'created_at' => now(),
            ],
        ];

        User::insert($users);

        $profiles = [
            [
                'id' => 1,
                'user_id' => 1,
                'name' => 'John Doe',
                'address' => 'Quezon City',
                'dob' => '1995-05-06',
                'gender' => 'Male',
                'description' => 'All I want are dogs.',
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'name' => 'Janna Carey',
                'address' => 'Paranaque City',
                'dob' => '1995-06-08',
                'gender' => 'Female',
                'description' => 'I love dogs. They are my family.',
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'name' => 'Karl Marx',
                'address' => 'Cebu City',
                'dob' => '1992-04-08',
                'gender' => 'Male',
                'description' => 'Dogs are my happiness.',
                'created_at' => now(),
            ],
        ];

        Profile::insert($profiles);
    }
}
