<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelCrud;
use App\Http\Controllers\StudentController;
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

Route::get('/student', function () {
    return view('student');
});
Route::get('/', function () {
    return view('index');
});


Route::post('studentController', [App\Http\Controllers\StudentController::class, 'store'])->name('store');
// Route::get('index', [App\Http\Controllers\StudentController::class, 'store'])->name('store');

Route::get('/',[StudentController::class,'show']);
Route::get('delete/{id}',[StudentController::class,'delete']);
Route::POST('edit-student/{id}',[StudentController::class,'edit']);