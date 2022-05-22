<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Nombre(s)'=>$this->faker->firstName(),
            'Apellido(s)'=>$this->faker->lastName(),
            'TipoDocumento'=>$this->faker->randomElement([1,2,3]),
            'Documento'=>$this->faker->numberBetween(10000000, 1099999999),
            'Correo'=>$this->faker->email(),
            'FechaNacimiento'=>$this->faker->date('Y-m-d', 'now'),
            'Direccion'=>$this->faker->address(),
            'Telefono(s)'=>$this->faker->biasedNumberBetween($min = 3000000000, $max = 3400000000, $function = 'sqrt'),
            'Ciudad_Municipio'=>$this->faker->city(),
            'Estado'=>$this->faker->randomElement([0,1])
        ];
    }
}
