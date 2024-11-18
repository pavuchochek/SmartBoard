<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eleve extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'date_naissance','email', 'numero_etudiant', 'image'];

    #obtenir les notes d'un eleve
    public function evaluations()
    {
        return $this->hasMany(evaluationEleve::class);
    }
}
