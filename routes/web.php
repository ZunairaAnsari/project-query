<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [studentController::class, 'index'])->name('home');
Route::get('/student/{id}', [studentController::class, 'singleStudent'])->name('view.studentView');
Route::get('/delete/{id}', [studentController::class, 'deleteStudent'])->name('studentDelete');