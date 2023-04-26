<?php

namespace Database\Seeders;

use App\Models\Camion;
use App\Models\Transporte;
use App\Models\Personas;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Transporte::factory(100)->create();
        Camion::factory(100)->create();
        Personas::factory(100)->create();

    }
}
