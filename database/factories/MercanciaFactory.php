<?php

namespace Database\Factories;

use App\Models\mercancia;
use Illuminate\Database\Eloquent\Factories\Factory;

class MercanciaFactory extends Factory
{
    protected $mercancia=mercancia::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->text(10),
            'mercancia_id'=>$this->faker->unique()->numberBetween(1,100),
        ];
    }
}
