<?php

namespace Database\Factories;

use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipo>
 */
class EquipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tipo_id' => rand(1, 13),
            'orden' => $this->faker->word,
            'marca' => $this->faker->word,
            'modelo' => $this->faker->word,
            'serie' => $this->faker->word,
            'nombre_equipo' => $this->faker->word,
            'ip' => $this->faker->ipv4,
            'no_contrato' => $this->faker->word,
            'nombre_app' => $this->faker->word,
            'so' => $this->faker->word,
            'office' => $this->faker->word,
            'clave' => $this->faker->word,
            // Otros campos si los tienes
        ];
    }
}
