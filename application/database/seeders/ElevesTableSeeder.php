<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Eleve;

class ElevesTableSeeder extends Seeder
{
    public function run()
    {
        Eleve::create(['nom' => 'Dupont','prenom'=>"Jean", 'email' => 'jean.dupont@example.com',"date_naissance"=>"2000-01-01","numero_etudiant"=>"123456"]);
        Eleve::create(['nom' => 'Martin', 'prenom' => "Paul", 'email' => 'paul.martin@example.com', 'date_naissance' => "2001-02-02", 'numero_etudiant' => "123457"]);
        Eleve::create(['nom' => 'Bernard', 'prenom' => "Marie", 'email' => 'marie.bernard@example.com', 'date_naissance' => "2002-03-03", 'numero_etudiant' => "123458"]);
        Eleve::create(['nom' => 'Dubois', 'prenom' => "Luc", 'email' => 'luc.dubois@example.com', 'date_naissance' => "2003-04-04", 'numero_etudiant' => "123459"]);
        Eleve::create(['nom' => 'Durand', 'prenom' => "Sophie", 'email' => 'sophie.durand@example.com', 'date_naissance' => "2004-05-05", 'numero_etudiant' => "123460"]);
        Eleve::create(['nom' => 'Lefevre', 'prenom' => "Pierre", 'email' => 'pierre.lefevre@example.com', 'date_naissance' => "2005-06-06", 'numero_etudiant' => "123461"]);
    }
}
