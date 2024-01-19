<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Calorie;

class SubjectsCaloriesController extends Controller
{
    public function create(Subject $subject)
        {
            $calories = Calorie::all();
            return view('calories/create', compact('subject', 'calories'));
        }
}
