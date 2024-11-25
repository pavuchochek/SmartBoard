<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
       User::create(['email' => 'jean.dupont@example.com', 'password' => '123456','role'=>"eleve"]);
       User::create(["email"=>'sofia.blob@example.com', 'password' => '123456','role'=>"professeur"]);
    }
}
