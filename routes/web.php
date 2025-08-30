<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
//    $jobs = Job::all();
//    $jobs = Job::with('employer')->paginate(3);
//    $jobs = Job::with('employer')->simplePaginate(3);
    $jobs = Job::with('employer')->lastest->simplePaginate(3);


    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function ()  {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id)  {
    $job = Job::findOrFail($id);
    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function ()  {
   // validations

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' =>1
    ]);

    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});

//Route::get('/home', [HomeController::class, 'index']);
