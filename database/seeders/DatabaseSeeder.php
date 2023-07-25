<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Reymond Admin',
            'email_address' => 'admin@gmail.com',
            'is_admin' => 1,
            'password' => Hash::make('password'),
        ]);
         \App\Models\Crew::factory(100)->create();
         \App\Models\Details::factory(100)->create();
    }
}
