<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

class PersonasFactory extends Factory
{
        /**
         * Define the model's default state.
         *
         * @return array
         */
        public function definition(): array
    {
        return [
            'nombre'=> $this->faker->name,
            'paterno'=> $this->faker->name,
            'materno'=> $this->faker->name,
            'fecha_nacimiento'=> $this->faker->date,
        ];
    }
}
