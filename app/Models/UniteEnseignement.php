<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniteEnseignement extends Model
{
    use HasFactory;

    protected $guarded = []; // Aucun attribut n'est protégé, tous les attributs peuvent être remplis de manière massive

    public function matieres()
    {
        return $this->hasMany(Matiere::class, 'id_unite_enseignements');
    }
}
