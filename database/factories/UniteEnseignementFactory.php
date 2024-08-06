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
        $startDate = now()->format('Y-m-d');
        $endDate = '2025-12-31';

         // Générer la date de début et la date de fin dans la plage spécifiée
         $dateDebut = $this->faker->dateTimeBetween($startDate, $endDate)->format('Y-m-d');
         $dateFin = $this->faker->dateTimeBetween($dateDebut, $endDate)->format('Y-m-d');
 
        return [
            'libelle' => $this->faker->randomElement(['Algebre', 'Science Physique', 'Science de la Terre', 'Histoire-Géographie']),
            'date_debut' => $dateDebut,
            'date_fin' => $dateFin,
            'coef' => $this->faker->numberBetween(1, 8),
        ];
    }
}
