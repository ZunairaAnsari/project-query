<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [studentController::class, 'index']);