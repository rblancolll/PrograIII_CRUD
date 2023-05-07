<?php

namespace Database\Factories;

use App\Models\Tipo_mercancia;
use Illuminate\Database\Eloquent\Factories\Factory;

class Tipo_mercanciaFactory extends Factory
{
    protected $tipo_mercancia=Tipo_mercancia::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descripcion'=>$this->faker->text(10),
        ];
    }
}
