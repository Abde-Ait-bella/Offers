<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('roles')->insert([
            ['name' => 'admin', 'description' => 'Administrateur'],
            ['name' => 'candidat', 'description' => 'Candidat'],
            ['name' => 'recruteur', 'description' => 'Recruteur'],
        ]);
    }
}
