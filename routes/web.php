<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'Jobs' => [
            'name' => 'Killer',
            'age' => '12',
            'dif' => 'storm',
        ],
        [
            'name' => 'Honest',
            'age' => '52',
            'dif' => 'Thunder',
        ],
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
