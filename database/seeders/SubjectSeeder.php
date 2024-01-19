<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}
