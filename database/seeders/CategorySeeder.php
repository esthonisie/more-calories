<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}
