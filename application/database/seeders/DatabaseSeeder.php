<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            ProfesseurTableSeeder::class,
            ElevesTableSeeder::class,
            ModuleTableSeeder::class,
            EvaluationTableSeeder::class,
            EvaluationEleveTableSeeder::class
        ]);
    }
}
