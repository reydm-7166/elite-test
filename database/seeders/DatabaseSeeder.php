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
            'username' => 'adminadmin',
            'is_admin' => 1,
            'password' => Hash::make('password123'),
        ]);
         \App\Models\Crew::factory(100)->create();
         \App\Models\Details::factory(100)->create();
         \App\Models\Document::create([
             'code' => '123456789',
             'crew_id' => 1,
             'name' => fake()->name(),
             'number' => 1,
             'date_issued' => fake()->date(),
             'date_expired' => fake()->date(),
             'remarks' => 'remarks1',

         ]);
    }
}
