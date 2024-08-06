<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Etudiant extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = []; // Aucun attribut n'est protégé, tous les attributs peuvent être remplis de manière massive

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class, 'id_etudiant');
    }
}
