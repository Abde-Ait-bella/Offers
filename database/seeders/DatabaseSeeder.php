<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\OfferFactory;
use Illuminate\Database\Seeder;
use UserFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $this->call(
            RoleSeeder::class,
            OfferSeeder::class
        );
        
        \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'amine@gmail.com',
        //     "password"=> "amine"
        // ]);
    }
}
