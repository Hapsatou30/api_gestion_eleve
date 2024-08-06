<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;

    protected $guarded = []; // Aucun attribut n'est protégé, tous les attributs peuvent être remplis de manière massive

    public function ue()
    {
        return $this->belongsTo(UniteEnseignement::class, 'id_unite_enseignements');
    }
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class, 'id_matiere');
    }
}
