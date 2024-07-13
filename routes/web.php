<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('welcome', [
        'blog' => Job::all()
    ]);
});

Route::get('/blog/{yale}', function ($yale) {
    if (Job::findBlog($yale)) {
        return view(
            'blog',
            [
                'yale' => $yale,
                'blog' => Job::all()
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
