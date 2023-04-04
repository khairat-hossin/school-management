<?php

use App\Http\Controllers\Subject\SubjectController;
use App\Http\Controllers\Student\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentController::class, 'index'])->name('student');
Route::get('/students/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/students/store', [StudentController::class, 'store'])->name('student.store');
Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('/students/update/{id}', [StudentController::class, 'update'])->name('student.update');


//// Author: Ruhul Amin
Route::get('/subjects', [SubjectController::class, 'index'])->name('sub.index');
Route::get('/subjects/create', [SubjectController::class, 'create'])->name('sub.create');
Route::post('/subjects/store', [SubjectController::class, 'store'])->name('sub.store');
Route::get('/subjects/edit/{id}', [SubjectController::class, 'edit'])->name('sub.edit');
Route::post('/subjects/update/{id}', [SubjectController::class, 'update'])->name('sub.update');
Route::get('/subjects/destroy/{id}', [SubjectController::class, 'destroy'])->name('sub.destroy');