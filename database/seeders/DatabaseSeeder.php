<?php

namespace Database\Seeders;

use App\Models\mercancia;
use App\Models\Predio;
use App\Models\Tipo_mercancia;
use Illuminate\Database\Seeder;


use App\Models\Camion;
use App\Models\Transporte;
use App\Models\Personas;
use Database\Factories\Tipo_mercanciaFactory;


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
        Transporte::factory(100)->create();
        Camion::factory(100)->create();
        Personas::factory(100)->create();
        Predio::factory(100)->create();
        Tipo_mercancia::factory(100)->create();
        mercancia::factory(100)->create();


    }
}
