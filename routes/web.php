<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/contact', 'contact');

// Route::controller(JobController::class)->group(function () {
//     Route::get("/jobs", 'index');
//     Route::get("/jobs/create", 'create');
//     Route::post("/jobs", 'store');
//     Route::patch("/jobs/{job}", 'update');
//     Route::delete("/jobs/{job}", 'delete');
//     Route::get("/jobs/{job}", 'show');
//     Route::get("/jobs/{job}/edit", 'edit');
// });

Route::resource('jobs', JobController::class);
