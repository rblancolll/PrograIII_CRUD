<?php

namespace Database\Factories;

use App\Models\Predio;
use Illuminate\Database\Eloquent\Factories\Factory;
class PredioFactory extends Factory
{
    protected $predio=Predio::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_predio'=>$this->faker->text(5),
            'direccion'=>$this->faker->text(5),

        ];
    }
}
