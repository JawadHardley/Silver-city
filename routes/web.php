<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::with('employer')->paginate(3),
    ]);
});

Route::get('/jobs/create', function () {
    dd('hello there');
});

Route::get('/jobs/{yale}', function ($yale) {
    if (Job::findBlog($yale)) {
        return view(
            'job',
            [
                'job' => Job::find($yale),
            ]
        );
    }
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
