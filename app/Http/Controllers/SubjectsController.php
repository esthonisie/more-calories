<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subject;

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
    
    public function store(StoreSubjectRequest $request): RedirectResponse
        {
            $attributes = $request->validated();
            
            $subject = Subject::create($attributes);
          
            return redirect(route('subjects.index', '#' . $subject->id));
        }

    public function edit(Subject $subject)
        { 
            $categories = Category::all();

            return view('subjects/edit', compact('categories', 'subject'));
        }

    public function update(Subject $subject, UpdateSubjectRequest $request): RedirectResponse
        {
            $attributes = $request->validated();

            $subject->update($attributes);

            return redirect(route('subjects.index', '#' . $subject->id));
        }

    public function destroy(Subject $subject)
        {
            $subject->delete();

            return redirect(route('subjects.index'));
        }
}
