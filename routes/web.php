<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {return view('welcome');});
Route::get('/students', [StudentController::class, 'index']);   //view
Route::get('/students/create', [StudentController::class, 'create']); //Show form
Route::post('/students', [StudentController::class, 'store']);        //save student