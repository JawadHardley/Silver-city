<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('welcome');
});

//show all jobs
Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => Job::with('employer')->latest()->paginate(3),
    ]);
});

//Create Jobs
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

//store jobs in DB
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

//Show a single job
Route::get('/jobs/{jobs}', function (Job $jobs) {
    if (Job::findBlog($jobs)) {
        return view(
            'jobs.show',
            [
                'job' => $jobs,
            ]
        );
    }
});

//Show Edit a job
Route::get('/jobs/{jobs}/edit', function (Job $jobs) {
    return view('jobs.edit', [
        'job' => $jobs,
    ]);
});

//Edit a job
Route::patch('/jobs/{jobs}', function (Job $jobs) {

    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    $job = $jobs;

    $job->update([
        'title' => request('title'),
        'Salary' => request('salary'),
    ]);

    return redirect('/jobs/' . $jobs->id);

});

//Delete/destroy a job
Route::delete('/jobs/{jobs}', function (Job $jobs) {
    $jobs->delete();
    return redirect('/jobs');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
