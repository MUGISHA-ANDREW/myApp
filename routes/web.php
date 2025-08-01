<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\FacultyController;

// Route::get('/resources/views', function () {
//     return view('index');
// });


Route::get('students', [StudentController::class, 'index']);
Route::resource('students', StudentController::class);

//Route::get('lecturers', [LecturerController::class, 'index']);
Route::resource('lecturers', LecturerController::class);


// Route::get('faculties', [FacultyController::class, 'index']);
Route::resource('faculties', FacultyController::class);



