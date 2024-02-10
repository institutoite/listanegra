<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persona>
 */
class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellidos' => $this->faker->lastName,
            'carnet' => $this->faker->unique()->regexify('[A-Z0-9]{10}'),
            'direccion' => $this->faker->address,
            'foto' => null, // Si no hay una lógica específica para la foto, deja esto como null
            'fechanacimiento' => $this->faker->date(),
            'telefono' => $this->faker->phoneNumber,
        ];
    }
}
