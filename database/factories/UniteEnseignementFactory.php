<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UniteEnseignement>
 */
class UniteEnseignementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'libelle' => $this->faker->randomElement(['Algebre', 'Science Physique', 'Science de la Terre', 'Histoire-Géographie']),
            'date_debut' => $this->faker->date(),
            'date_fin' => $this->faker->date(),
            'coef' => $this->faker->numberBetween(1, 8),
        ];
    }
}
