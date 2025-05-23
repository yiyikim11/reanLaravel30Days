<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

//define jobs arr once and reuse :)
$jobs  = [
    [
        'id' => 1,
        'title' => 'director', 
        'salary' => '$50,000',
    ],
    [
        'id' => 2,
        'title' => 'programmer',
        'salary' => '$10,000'
    ],
    [
        'id' => 3,
        'title' => 'teacher',
        'salary' => '$40,000'
    ]
    ];

Route::get('/', function () {
    return view('home');
});



Route::get('/jobs', function() use ($jobs){
    return view('jobs', ['jobs' => $jobs]);
});

// laravel will know that if this wrap in a curly braces then its a wild card
Route::get('/jobs/{id}', function($id) use($jobs){
    
        // this loop over the arr above
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
        // dd($jobs);

    return view('job', ['job' => $job]);
});


Route::get('/contact', function(){
    return view('contact');
});

