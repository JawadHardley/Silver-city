<?php

use Illuminate\Support\Facades\Route;
use App\Models\blog;


Route::get('/', function () {
    return view('welcome', [
        'blog' => blog::all(),
    ]);
});

Route::get('/blog/{yale}', function ($yale) {
    if (Blog::findBlog($yale)) {
        return view(
            'blog',
            [
                'yale' => $yale,
                'blog' => blog::all()
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
