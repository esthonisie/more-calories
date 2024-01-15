<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Subject;
use App\Models\Calorie;

class SubjectsController extends Controller
{ 
    public function index()
        {   
            $caloriesSubtotal = 0;
            $caloriesTotal = 0;
            $caloriesDay = 0;
            $subjects = Subject::all();

            return view('subjects/index', 
            compact('caloriesSubtotal', 'caloriesTotal', 'caloriesDay', 'subjects'));
        }
    
    public function create()
        {
            return view('subjects/create', ['categories' => Category::all()]);
        }

    public function createCalories(Subject $subject)
        {
            $calories = Calorie::all();
            return view('calories/create', compact('subject', 'calories'));
        }
    
    public function store()
        {
            $attributes = request()->validate([
                'body' => ['required', 'min:2', 'max:255', 'unique:subjects'],
                'category_id' => ['required']
            ]);
            
            Subject::create($attributes);

            $subject_id = Subject::where('body', $attributes['body'])->first()->id;
          
            return redirect(route('subjects.index', '#' . $subject_id));
        }

    public function edit(Subject $subject)
        { 
            $categories = Category::all();

            return view('subjects/edit', compact('categories', 'subject'));
        }

    public function update(Subject $subject)
        {
            $attributes = request()->validate([
                'body' => ['required', 'min:2', 'max:255'],
                'category_id' => ['required']
            ]);

            $subject->update($attributes);

            return redirect(route('subjects.index', '#' . $subject->id));
        }

    public function destroy(Subject $subject)
        {
            $subject->delete();

            return redirect(route('subjects.index'));
        }
}
