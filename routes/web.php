<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\JobListing;


Route::get('/', function () {
    $jobs = JobListing::all();
    dd($jobs[0]->title);

    // return view('home');
});



Route::get('/jobs', function () {
    return view('jobs', ['jobs' => JobListing::all()]);
});

// laravel will know that if this wrap in a curly braces then its a wild card
Route::get('/jobs/{id}', function ($id) {
    $job = JobListing::find($id);
    if (!$job) {
        abort(404, 'Job not found');
    }
    return view('job', ['job' => $job]);
});


Route::get('/contact', function () {
    return view('contact');
});
