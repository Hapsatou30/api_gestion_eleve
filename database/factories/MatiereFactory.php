<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UniteEnseignement;

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
        // Récupérer une unité d'enseignement existante
        $uniteEnseignement = UniteEnseignement::inRandomOrder()->first();

        // Si aucune unité d'enseignement n'existe, retourner des valeurs par défaut
        if (!$uniteEnseignement) {
            return [
                'date_debut' => $this->faker->date(),
                'date_fin' => $this->faker->date(),
                'id_unite_enseignements' => 1,
                'libelle' => $this->faker->randomElement(['Mathematiques', 'Physiques', 'Chimie', 'Anglais', 'Histoire','Géographie','SVT']),
            ];
        }

        // Utiliser les dates de l'unité d'enseignement pour la matière
        $dateDebutUnite = $uniteEnseignement->date_debut;
        $dateFinUnite = $uniteEnseignement->date_fin;

        // Générer une date de début et une date de fin pour la matière
        $dateDebut = $this->faker->dateTimeBetween($dateDebutUnite, $dateFinUnite)->format('Y-m-d');
        $dateFin = $this->faker->dateTimeBetween($dateDebut, $dateFinUnite)->format('Y-m-d');

        return [
            'date_debut' => $dateDebut,
            'date_fin' => $dateFin,
            'id_unite_enseignements' => $uniteEnseignement->id,
            'libelle' => $this->faker->randomElement(['Mathematiques', 'Physiques', 'Chimie', 'Anglais', 'Histoire','Géographie','SVT']),
        ];
    }
}
