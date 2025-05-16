<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;

Route::apiResource('student', StudentsController::class);
Route::apiResource('teacher', TeachersController::class);
