<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ElevesTableSeeder::class,
            ModuleTableSeeder::class,
            EvaluationTableSeeder::class,
            EvaluationEleveTableSeeder::class
        ]);
    }
}
