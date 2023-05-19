<?php

namespace Database\Factories;

use App\Models\mercancia;
use Illuminate\Database\Eloquent\Factories\Factory;

class MercanciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition():array
    {
        return [
            'nombre'=>$this->faker->text(10),
            'mercancias_id'=>$this->faker->unique(true)->numberBetween(1,200),
        ];
    }
}
