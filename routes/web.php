<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => Job::with('employer')->latest()->paginate(3),
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    Job::create([
        'title' => request('title'),
        'Salary' => request('salary'),
        'employer_id' => 2,
    ]);

    return redirect('/jobs');
});

Route::get('/jobs/{yale}', function ($yale) {
    if (Job::findBlog($yale)) {
        return view(
            'jobs.show',
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
