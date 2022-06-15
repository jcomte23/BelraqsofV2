<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Existencia>
 */
class ExistenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Nombre'=>$this->faker->name(),
            'Marca'=>$this->faker->name(),
            'Stock'=>$this->faker->biasedNumberBetween($min = 2, $max = 200, $function = 'sqrt'),
            'ValorUnitario'=>$this->faker->biasedNumberBetween($min = 2000, $max = 50000, $function = 'sqrt'),
            'PrecioDedal'=>$this->faker->biasedNumberBetween($min = 2300, $max = 55000, $function = 'sqrt'),
            'PrecioMayor'=>$this->faker->biasedNumberBetween($min = 2500, $max = 60000, $function = 'sqrt'),
            'Estado'=>$this->faker->randomElement([0,1])
        ];
    }
}
