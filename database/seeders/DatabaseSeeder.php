<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Mohamed Nader',
            'email' => 'httpsnader@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make(123),
            'remember_token' => Str::random(10),
        ]);
        User::factory(100)->create();
    }
}
