<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'blog' => [
            [
                'id' => 0,
                'title' => 'Blog Post 1',
                'body' => 'This is the body of the blog post 1',
            ],
            [
                'id' => 1,
                'title' => 'Blog Post 2',
                'body' => 'This is the body of the blog post 2',
            ]
        ]
    ]);
});

Route::get('/blog/{yale}', function ($yale) {
    return view('blog', [
        'yale' => $yale,
        'blog' => [
            [
                'id' => 1,
                'title' => 'Blog Post 1',
                'body' => 'This is the body of the blog post 1',
            ],
            [
                'id' => 2,
                'title' => 'Blog Post 2',
                'body' => 'This is the body of the blog post 2',
            ]
        ]
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
