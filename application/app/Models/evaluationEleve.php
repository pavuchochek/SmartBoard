<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evaluationEleve extends Model
{
    use HasFactory;

    #relation entre la table eleve et la table evaluation
    public function eleve()
    {
        return $this->belongsTo(eleve::class);
    }
    public function evaluation()
    {
        return $this->belongsTo(evaluations::class);
    }
}

