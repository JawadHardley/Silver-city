<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', );
});

Route::get('/home/{yale}', function ($yale) {
    return view('welcome', [
        'yale' => $yale
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
