<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobsController extends Controller
{
    public function index()
    {
        return view('jobs.index', [
            'jobs' => Job::with('employer')->latest()->paginate(3),
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }


    public function store()
    {
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
    }

    public function show(Job $jobs)
    {
        return view(
            'jobs.show',
            [
                'job' => $jobs,
            ]
        );
    }

    public function edit(Job $jobs)
    {
        return view('jobs.edit', [
            'job' => $jobs,
        ]);
    }

    public function update(Job $jobs)
    {
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
    }

    public function destroy(Job $jobs)
    {
        $jobs->delete();
        return redirect('/jobs');
    }
}
