<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCalorieRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\models\Calorie;
use App\Models\Subject;

class CaloriesController extends Controller
{   
    public function store(StoreCalorieRequest $request): RedirectResponse
    {
        $attributes = $request->validated();
        
        Calorie::create($attributes);
        
        return redirect(route('subjects.index', '#' . $attributes['subject_id']));
    }

    public function edit(Calorie $calorie)
        { 
            $subjects = Subject::all();

            return view('calories/edit', compact('calorie', 'subjects'));
        }

    public function update(Calorie $calorie, StoreCalorieRequest $request): RedirectResponse
        {
            $attributes = $request->validated();

            $calorie->update($attributes);

            return redirect(route('subjects.index', '#' . $calorie->subject_id));
        }

    public function destroy(Calorie $calorie)
        {
            $calorie->delete();

            return redirect(route('subjects.index', '#' . $calorie->subject_id));
        }
}
