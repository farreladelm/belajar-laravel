<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', [StudentController::class, 'index']);
Route::get('/student/create', [StudentController::class, 'create']);
Route::post('/student/create', [StudentController::class, 'store'])->name('studentStore');
Route::delete('/student/delete/{student}', [StudentController::class, 'destroy']);
Route::get('/student/edit/{student}', [StudentController::class, 'edit']);
Route::put('/student/edit/{student}', [StudentController::class, 'update']);
