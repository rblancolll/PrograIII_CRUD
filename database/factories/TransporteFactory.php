<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransporteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'nombre'=> $this->faker->company,
            'razon_social'=> $this->faker->company,
        ];
    }
}
