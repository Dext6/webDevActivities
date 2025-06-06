<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {return view('welcome');});
Route::get('/students', [StudentController::class, 'index']);   //view
Route::get('/students/create', [StudentController::class, 'create']); //Show form
Route::post('/students', [StudentController::class, 'store']);        //save student
Route::get('/students/{id}/edit', [StudentController::class, 'edit']);
Route::put('/students/{id}', [StudentController::class, 'update']);
Route::delete('/students/{id}', [StudentController::class, 'destroy']);