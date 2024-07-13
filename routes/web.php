<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;


Route::get('/', function () {
    $blog = Blog::all();
    dd($blog);
});

Route::get('/blog/{yale}', function ($yale) {
    if (Blog::find($yale)) {
        return view(
            'blog',
            [
                'yale' => $yale,
                'blog' => Blog::all()
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
