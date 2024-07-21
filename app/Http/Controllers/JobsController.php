<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if (Auth::guest()) {
            return redirect('/login');
        }

        return view('jobs.create');
    }


    public function store()
    {
        $x = request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
            'employer_id' => ['required', 'numeric'],
        ]);

        Job::create($x);

        return redirect('/jobs');
    }

    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job,
        ]);
    }

    public function edit(Job $job)
    {
        // if (Auth::guest()) {
        //     return redirect('/login');
        // }

        // if ($job->employer->user->isNot(Auth::user())) {
        //     abort(403);
        // }

        return view('jobs.edit', [
            'job' => $job,
        ]);
    }

    public function update(Job $job)
    {
        $x = request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        $jobs = $job;

        $job->update($x);

        return redirect('/jobs/' . $jobs->id);
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs');
    }
}
