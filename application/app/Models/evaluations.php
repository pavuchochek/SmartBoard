<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evaluations extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'titre', 'coefficient', 'module_id'];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    #obtenir toutes les notes d'une evaluation
    public function evaluationEleves()
    {
        return $this->hasMany(evaluationEleve::class, 'evaluation_id');
    }
}

