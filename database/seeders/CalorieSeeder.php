<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Calorie;

class CalorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Calorie::create([
            'subject_id' => 2,
            'product' => 'Rozijnen Blue thompson bio',
            'kcal_per_100' => 324,
            'weight_g_ml' => 5
        ]);

        Calorie::create([
            'subject_id' => 2,
            'product' => 'Pompoenpitten bio',
            'kcal_per_100' => 605,
            'weight_g_ml' => 10
        ]);

        Calorie::create([
            'subject_id' => 2,
            'product' => 'Notenmix ongebrand',
            'kcal_per_100' => 650,
            'weight_g_ml' => 25
        ]);

        Calorie::create([
            'subject_id' => 2,
            'product' => 'Kellogg\'s rice krispies',
            'kcal_per_100' => 389,
            'weight_g_ml' => 5
        ]);

        Calorie::create([
            'subject_id' => 2,
            'product' => 'Jordans granola noten',
            'kcal_per_100' => 446,
            'weight_g_ml' => 35
        ]);

        Calorie::create([
            'subject_id' => 1,
            'product' => 'Volle yoghurt bio',
            'kcal_per_100' => 62,
            'weight_g_ml' => 200
        ]);

        Calorie::create([
            'subject_id' => 1,
            'product' => 'Mix van Zonnatura en Bolletje muesli',
            'kcal_per_100' => 386,
            'weight_g_ml' => 80
        ]);
    }
}
