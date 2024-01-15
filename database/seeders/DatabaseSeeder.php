<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Subject;
use App\Models\Calorie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            'name' => 'Breakfast'
        ]);

        Category::create([
            'name' => 'Elevenses'
        ]);

        Category::create([
            'name' => 'Lunch'
        ]);

        Category::create([
            'name' => 'Brunch'
        ]);

        Category::create([
            'name' => 'Appetizer'
        ]);

        Category::create([
            'name' => 'Dinner'
        ]);

        Category::create([
            'name' => 'Dessert'
        ]);

        Category::create([
            'name' => 'Light Meal'
        ]);

        Category::create([
            'name' => 'Healthy Snack'
        ]);

        Category::create([
            'name' => 'Snack'
        ]);

        Category::create([
            'name' => 'Beverages'
        ]);

        Category::create([
            'name' => 'Tea Time'
        ]);

        Category::create([
            'name' => 'Coffee Time'
        ]);

        Category::create([
            'name' => 'Other'
        ]);


        // SUBJECT

        Subject::create([
            'category_id' => 1,
            'body' => 'Mijn standaard muesli ontbijt.'
        ]);

        Subject::create([
            'category_id' => 2,
            'body' => 'Trail mix, zelf samengesteld.'
        ]);

        Subject::create([
            'category_id' => 3,
            'body' => 'Mijn lunch op werk.'
        ]);


        // CALORIE

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
