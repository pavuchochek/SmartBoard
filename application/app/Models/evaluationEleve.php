<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evaluationEleve extends Model
{
    use HasFactory;
    #champ note
    protected $fillable = ['note', 'eleve_id', 'evaluation_id'];

    #relation entre la table eleve et la table evaluation
    public function eleve()
    {
        return $this->belongsTo(eleve::class, 'eleve_id');
    }
    public function evaluation()
    {
        return $this->belongsTo(evaluations::class, 'evaluation_id');
    }
}

