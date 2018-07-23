<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    public function run(){
        \App\Models\Module::truncate();
        $faker =  \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++){
            \App\Models\Module::create([
                'name' => $faker->name,
                'is_correct' => $faker->boolean,
            ]);
        }
    }
}