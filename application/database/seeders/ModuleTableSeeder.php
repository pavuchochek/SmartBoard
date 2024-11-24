<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\module;

class ModuleTableSeeder extends Seeder
{
    public function run()
    {
        Module::create(["code"=>'MATHS', "nom"=>'Mathématiques', "coefficient"=>4]);
        Module::create(["code"=>'PHYS', "nom"=>'Physique', "coefficient"=>3]);
        Module::create(["code"=>'INFO', "nom"=>'Informatique', "coefficient"=>2]);
        Module::create(["code"=>'CHIM', "nom"=>'Chimie', "coefficient"=>3]);
        Module::create(["code"=>'ANGL', "nom"=>'Anglais', "coefficient"=>2]);
        }
}
