<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController; 

Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', StudentController::class);

Route::get('students/{student}/destroy', [StudentController::class, 'destroy'])->name('students.destroy');