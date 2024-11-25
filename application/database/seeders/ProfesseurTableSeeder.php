<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\professeur;

class ProfesseurTableSeeder extends Seeder
{
    public function run()
    {
        Professeur::create(["prenom"=>'sofia',"nom"=>'blob',"date_naissance"=>'2000-01-01',"email"=>'sofia.blob@example.com']);
    }
}
