<?php

use App\Http\Controllers\Subject\SubjectController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\CName\ClassController;
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
})->name('home');

route::get('/hello', function()
{
return "Hello world";
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
Route::get('/students/delete/{id}', [StudentController::class, 'destroy'])->name('student.delete');

Route::get('/teachers', [TeacherController::class, 'index'])->name('teacher');
Route::get('/teachers/create', [TeacherController::class,'create'])->name('teacher.create');
Route::post('/teachers/store',[TeacherController::class,'store'])->name('teacher.store');
Route::get('/teachers/edit/{id}',[TeacherController::class,'edit'])->name('teacher.edit');
Route::post('teachers/update/{id}', [TeacherController::class,'update'])->name('teacher.update');
Route::get('teachers/destroy/{id}', [TeacherController::class,'destroy'])->name('teacher.destroy');

Route::get('/classes', [ClassController::class, 'index'])->name('class');
Route::get('/classes/create', [ClassController::class, 'create'])->name('class.create');
Route::post('/classes/store', [ClassController::class, 'store'])->name('class.store');
Route::get('/classes/edit/{id}', [ClassController::class, 'edit'])->name('class.edit');
Route::post('/classes/update/{id}', [ClassController::class, 'update'])->name('class.update');
Route::get('/classes/delete/{id}', [ClassController::class, 'destroy'])->name('class.delete');
