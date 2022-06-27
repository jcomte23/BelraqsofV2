<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Nombres'=>$this->faker->firstName(),
            'Apellidos'=>$this->faker->lastName(),
            'Rol'=>$this->faker->randomElement([1,2,3]),
            'TipoDocumento'=>$this->faker->randomElement([1,2,3]),
            'Documento'=>$this->faker->numberBetween(10000000, 1099999999),
            'Correo'=>$this->faker->email(),
            'FechaExpedicion'=>$this->faker->date('Y-m-d', 'now'),
            'Direccion'=>$this->faker->address(),
            'Telefonos'=>$this->faker->biasedNumberBetween($min = 3000000000, $max = 3400000000, $function = 'sqrt'),
            'Ciudad_Municipio'=>$this->faker->city(),
            'Estado'=>$this->faker->randomElement([0,1])
        ];
    }
}
