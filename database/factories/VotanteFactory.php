<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Votante>
 */
class VotanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombres'=>$this->faker->firstName,
            'apellidos'=>$this->faker->lastName,
            'numero_documento'=>$this->faker->numberBetween(1000000,99999999),
            'complemento'=>$this->faker->randomElement(['','1A','2B','3C']),
            'email'=>$this->faker->email,
            'telefono'=>$this->faker->phoneNumber,
        ];
    }
}
