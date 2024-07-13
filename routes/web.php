<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    $blog = Job::all();
    dd($blog);
});

Route::get('/blog/{yale}', function ($yale) {
    if (Job::find($yale)) {
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
