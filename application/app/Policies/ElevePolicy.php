<?php

namespace App\Policies;

use App\Models\User;
use App\Models\eleve;
use Illuminate\Auth\Access\Response;

class ElevePolicy
{
   
    public function view(User $user, Eleve $eleve)
{
    // L'utilisateur connecté peut voir les informations uniquement s'il est associé à cet élève
    return $user->email === $eleve->email;
}
   
}
