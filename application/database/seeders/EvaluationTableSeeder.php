<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\evaluations;

class EvaluationTableSeeder extends Seeder
{
    public function run()
    {
        evaluations::create(["titre"=>'DS1', "date"=>'2021-01-01',"coefficient"=>1, "module_id"=>1]);
        evaluations::create(["titre"=>'DS2', "date"=>'2021-01-02',"coefficient"=>1, "module_id"=>1]);
        evaluations::create(["titre"=>'DS2', "date"=>'2021-02-01',"coefficient"=>2, "module_id"=>2]);
        evaluations::create(["titre"=>'DS3', "date"=>'2021-03-01',"coefficient"=>3, "module_id"=>3]);
        evaluations::create(["titre"=>'DS4', "date"=>'2021-04-01',"coefficient"=>4, "module_id"=>4]);
        evaluations::create(["titre"=>'DS5', "date"=>'2021-05-01',"coefficient"=>5, "module_id"=>1]);
        }
}
