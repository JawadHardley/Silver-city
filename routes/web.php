<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\JobsController;


Route::view('/contact', 'contact');
Route::view('/', 'welcome');
Route::view('/about', 'about');

// For Jobs
Route::controller(JobsController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create');
    Route::get('/jobs/{jobs}', 'show');
    Route::post('/jobs', 'store');
    Route::get('/jobs/{jobs}/edit', 'edit');
    Route::patch('/jobs/{jobs}', 'update');
    Route::delete('/jobs/{jobs}', 'destroy');
});

// Route::resource('jobs', JobsController::class, [
//     'only' => [
//         'index',
//         'create',
//         'edit',
//         'show',
//         'update',
//         'destroy',
//         'store',
//     ]
// ]);

