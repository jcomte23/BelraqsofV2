<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venta>
 */
class VentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Codigo'=>$this->faker->numerify('VT-####'),
            'Fecha'=>$this->faker->date('Y-m-d', 'now'),
            'Cliente'=>$this->faker->numberBetween(1, 50),
            'CantidadProductos'=>$this->faker->biasedNumberBetween($min = 2, $max = 25, $function = 'sqrt'),
            'Total'=>$this->faker->biasedNumberBetween($min = 30000, $max = 999999, $function = 'sqrt'),
            'Estado'=>$this->faker->randomElement([0,1])
        ];
    }
}
