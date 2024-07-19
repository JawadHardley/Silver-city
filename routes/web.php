<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\JobsController;


Route::view('/contact', 'contact');
Route::view('/', 'welcome');
Route::view('/about', 'about');

//For Jobs
Route::get('/jobs', [JobsController::class, 'index']);
Route::get('/jobs/create', [JobsController::class, 'create']);
Route::post('/jobs', [JobsController::class, 'store']);
Route::get('/jobs/{jobs}', [JobsController::class, 'show']);
Route::get('/jobs/{jobs}/edit', [JobsController::class, 'edit']);
Route::patch('/jobs/{jobs}', [JobsController::class, 'update']);
Route::delete('/jobs/{jobs}', [JobsController::class, 'destroy']);

