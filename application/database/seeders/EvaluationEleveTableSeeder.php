<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\evaluationEleve;

class EvaluationEleveTableSeeder extends Seeder
{
    public function run()
    {
        evaluationEleve::create(["note"=>8, "eleve_id"=>1, "evaluation_id"=>1]);
        evaluationEleve::create(["note"=>5, "eleve_id"=>1, "evaluation_id"=>2]);
        evaluationEleve::create(["note"=>15, "eleve_id"=>1, "evaluation_id"=>3]);
        evaluationEleve::create(["note"=>2, "eleve_id"=>1, "evaluation_id"=>4]);
        evaluationEleve::create(["note"=>17, "eleve_id"=>1, "evaluation_id"=>5]);

        //eleve2
        evaluationEleve::create(["note"=>1, "eleve_id"=>2, "evaluation_id"=>1]);
        evaluationEleve::create(["note"=>14, "eleve_id"=>2, "evaluation_id"=>2]);
        evaluationEleve::create(["note"=>10, "eleve_id"=>2, "evaluation_id"=>3]);
        evaluationEleve::create(["note"=>16, "eleve_id"=>2, "evaluation_id"=>4]);
        evaluationEleve::create(["note"=>6, "eleve_id"=>2, "evaluation_id"=>5]);
         //eleve3
            evaluationEleve::create(["note"=>5, "eleve_id"=>3, "evaluation_id"=>1]);
            evaluationEleve::create(["note"=>14, "eleve_id"=>3, "evaluation_id"=>2]);
            evaluationEleve::create(["note"=>6, "eleve_id"=>3, "evaluation_id"=>3]);
            evaluationEleve::create(["note"=>16, "eleve_id"=>3, "evaluation_id"=>4]);

    }
}
