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

//Show Edit a job
Route::get('/jobs/{id}/edit', function ($id) {
    return view('jobs.edit', [
        'job' => Job::find($id),
    ]);
});

//Edit a job
Route::patch('/jobs/{id}', function ($id) {

    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    $job = Job::find($id);

    $job->update([
        'title' => request('title'),
        'Salary' => request('salary'),
    ]);

    return redirect('/jobs/' . $job->id);

});

//Delete/destroy a job
Route::delete('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id);
    $job->delete();
    return redirect('/jobs');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
