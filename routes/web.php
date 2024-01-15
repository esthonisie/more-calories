<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaloriesController; 
use App\Http\Controllers\SubjectsController;

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

Route::get(
    '/subjects', [SubjectsController::class, 'index']
)->name('subjects.index');

Route::get(
    '/subjects/create', [SubjectsController::class, 'create']
)->name('subjects.create');

Route::get(
    '/subjects/calories/{subject}/create', [SubjectsController::class, 'createCalories']
)->name('calories.create');

Route::post(
    '/subjects', [SubjectsController::class, 'store']
)->name('subjects.store');

Route::get(
    '/subjects/{subject}/edit', [SubjectsController::class, 'edit']
)->name('subjects.edit');

Route::patch(
    '/subjects/{subject}', [SubjectsController::class, 'update']
)->name('subjects.update');

Route::delete(
    '/subjects/{subject}', [SubjectsController::class, 'destroy']
)->name('subjects.destroy');

// Calorie

Route::post(
    '/calories', [CaloriesController::class, 'store']
)->name('calories.store');

Route::get(
    '/calories/{calorie}/edit', [CaloriesController::class, 'edit']
)->name('calories.edit');

Route::patch(
    '/calories/{calorie}', [CaloriesController::class, 'update']
)->name('calories.update');

Route::delete(
    '/calories/{calorie}', [CaloriesController::class, 'destroy']
)->name('calories.destroy');

// Redirect

Route::redirect('/', '/subjects');
