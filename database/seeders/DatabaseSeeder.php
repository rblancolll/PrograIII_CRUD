<?php

namespace Database\Seeders;

use App\Models\mercancia;
use App\Models\Predio;
use App\Models\Tipo_mercancia;
use Illuminate\Database\Seeder;


use App\Models\Camion;
use App\Models\Transporte;
use App\Models\Personas;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void

    {
        // User::factory(10)->create();
        Transporte::factory(200)->create();
        Camion::factory(200)->create();
        Personas::factory(200)->create();
        Predio::factory(200)->create();
        Tipo_mercancia::factory(200)->create();
        Mercancia::factory(200)->create();




    }
}
