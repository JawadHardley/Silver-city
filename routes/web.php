<?php

use App\Http\Controllers\JobsController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\RegisterUserController;
use App\Mail\JobPost;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::view('/contact', 'contact');
Route::view('/', 'welcome');
Route::view('/about', 'about');

// For Jobs
Route::controller(JobsController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create')->middleware('auth');
    Route::post('/jobs', 'store')->middleware('auth');
    Route::get('/jobs/{job}', 'show');
    Route::get('/jobs/{job}/edit', 'edit')->middleware('auth')->can('edit', 'job');
    Route::patch('/jobs/{job}', 'update');
    Route::delete('/jobs/{job}', 'destroy');
});

// Route::resource('jobs', JobsController::class)->except(['index', 'show'])->middleware('auth');

//Auth
Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [SessionsController::class, 'create'])->name('login');
Route::post('/login', [SessionsController::class, 'store']);
Route::post('/logout', [SessionsController::class, 'destroy']);
