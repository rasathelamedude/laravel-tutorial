<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    // Get all jobs;
    public function index()
    {
        $jobs = Job::with('employer')->latest()->paginate(3); // Eager loading with "with" method;

        return view('jobs.index', ["jobs" => $jobs]);
    }

    // Show one job
    public function show(Job $job)
    {
        return view("jobs.show", ["job" => $job]);
    }

    // Create form
    public function create()
    {
        return view("jobs.create");
    }

    // Store created job
    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        Job::create([
            "title" => request('title'),
            "salary" => request('salary'),
            "employer_id" => 100,
        ]);

        return redirect("/jobs");
    }

    // Return edit form
    public function edit(Job $job)
    {
        return view("jobs.edit", ["job" => $job]);
    }

    // Update a job
    public function update(Job $job)
    {
        // Validate input;
        request()->validate([
            "title" => ['required', "min:5"],
            "salary" => ["required"],
        ]);

        // Authorize; "Does the user have permission to update?"

        $job->update(["title" => request('title'), "salary" => request("salary")]);
        $job->save();

        // Redirect to the job page;
        return redirect("/jobs/{$job->id}");
    }

    // Delete a job
    public function delete(Job $job)
    {
        // authorize

        $job->delete();
        return redirect("/jobs");
    }
}
