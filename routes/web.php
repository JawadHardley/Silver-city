<?php

use App\Http\Controllers\JobsController;
use App\Http\Controllers\RegisterUserController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::view('/contact', 'contact');
Route::view('/', 'welcome');
Route::view('/about', 'about');

// For Jobs
// Route::controller(JobsController::class)->group(function () {
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create', 'create');
//     Route::post('/jobs', 'store');
//     Route::get('/jobs/{job}', 'show');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}', 'destroy');
// });

Route::resource('jobs', JobsController::class);

Route::get('/register', [RegisterUserController::class, 'create']);

