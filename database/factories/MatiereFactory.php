<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matiere>
 */
class MatiereFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date_debut' => $this->faker->date(),
            'date_fin' => $this->faker->date(),
            'id_unite_enseignements' => $this->faker->numberBetween(1, 4),
            'libelle' => $this->faker->randomElement(['Mathematiques', 'Physiques', 'Chimie', 'Anglais', 'Histoire','Géographie','SVT']),
        ];
    }
}
