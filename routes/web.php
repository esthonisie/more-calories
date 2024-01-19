<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\SubjectsCaloriesController;
use App\Http\Controllers\CaloriesController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Subject

Route::resource('subjects', SubjectsController::class);

// Subject/Calorie

Route::get(
    '/subjects/{subject}/calories/create', [SubjectsCaloriesController::class, 'create']
)->name('calories.create');

// Calorie

Route::resource('calories', CaloriesController::class, 
['parameters' => ['calories' => 'calorie'], 
'only' => ['store', 'edit', 'update', 'destroy']]);  

// Redirect

Route::redirect('/', '/subjects');
