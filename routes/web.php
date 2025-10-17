<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get("/jobs", function () {
    return view('jobs', [
        "jobs" => Job::all()
    ]);
});

Route::get("/jobs/{jobId}", function ($jobId) {
    $job = Job::find($jobId);

    return view("job", [
        "job" => $job,
    ]);
});

Route::get("/contact", function () {
    return view("contact");
});
