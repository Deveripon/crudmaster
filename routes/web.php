<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('student',[StudentController::class,'index']) -> name('student.index');
Route::get('student-create',[StudentController::class,'create']) -> name('student.create');
Route::post('student',[StudentController::class,'store']) -> name('student.store');
Route::get('student-show/{id}',[StudentController::class,'show']) -> name('student.show');
Route::get('student-edit/{id}',[StudentController::class,'edit']) -> name('student.edit');
Route::post('student-update/{id}',[StudentController::class,'update']) -> name('student.update');
Route::get('student-delete/{id}',[StudentController::class,'destroy']) -> name('student.destroy');

