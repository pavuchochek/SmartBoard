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
        return $this->hasMany(evaluationEleve::class, 'eleve_id');
    }

    #obtenir la moyenne d'un eleve
    public function moyenne()
    {
        $notes = $this->evaluations;
        $somme = 0;
        $coefficient = 0;
        foreach ($notes as $note) {
            $somme += $note->note * $note->evaluation->coefficient;
            $coefficient += $note->evaluation->coefficient;
        }
        if ($coefficient == 0) {
            return 0;
        }
        return $somme / $coefficient;
    }
}
