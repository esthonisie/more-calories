<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Calorie;
use App\Models\Subject;

class CaloriesController extends Controller
{   
    public function store()
        {
            $attributes = request()->validate([
                'product' => ['required', 'min:2', 'max:255'],
                'subject_id' => ['required'],
                'kcal_per_100' => ['required', 'numeric', 'integer', 'min:1', 'max:1000'],
                'weight_g_ml' => ['required', 'numeric', 'min:1', 'max:1000']
            ]);
            
            Calorie::create($attributes);

            $subject_id = $attributes['subject_id'];
          
            return redirect(route('subjects.index', '#' . $subject_id));
        }

    public function edit(Calorie $calorie)
        { 
            $subjects = Subject::all();

            return view('calories/edit', compact('calorie', 'subjects'));
        }

    public function update(Calorie $calorie)
        {
            $attributes = request()->validate([
                'product' => ['required', 'min:2', 'max:255'],
                'subject_id' => ['required'],
                'kcal_per_100' => ['required', 'numeric', 'integer', 'min:1', 'max:1000'],
                'weight_g_ml' => ['required', 'numeric', 'min:1', 'max:1000']
            ]);

            $calorie->update($attributes);

            $subject_id = $calorie->subject_id;

            return redirect(route('subjects.index', '#' . $subject_id));
        }

    public function destroy(Calorie $calorie)
        {
            $calorie->delete();

            $subject_id = $calorie->subject_id;

            return redirect(route('subjects.index', '#' . $subject_id));
        }
}
