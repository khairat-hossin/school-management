<?php

use App\Http\Controllers\Student\StudentController;
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
});

route::get('/hello', function()
{
return "Hello world";
});
Route::get('/students', [StudentController::class, 'index'])->name('student');
Route::get('/students/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/students/store', [StudentController::class, 'store'])->name('student.store');
Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('/students/update/{id}', [StudentController::class, 'update'])->name('student.update');
Route::get('/students/delete/{id}', [StudentController::class, 'destroy'])->name('student.delete');


Route::get('/classes', [ClassController::class, 'index'])->name('class');
Route::get('/classes/create', [ClassController::class, 'create'])->name('class.create');
Route::post('/classes/store', [ClassController::class, 'store'])->name('class.store');
Route::get('/classes/edit/{id}', [ClassController::class, 'edit'])->name('class.edit');
Route::post('/classes/update/{id}', [ClassController::class, 'update'])->name('class.update');
Route::get('/classes/delete/{id}', [ClassController::class, 'destroy'])->name('class.delete');