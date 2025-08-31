<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
// Welcome page
Route::get('/', function () {
    return view('home');
});

// Index
Route::get('/jobs', function () {
//    $jobs = Job::all();
//    $jobs = Job::with('employer')->paginate(3);
//    $jobs = Job::with('employer')->simplePaginate(3);
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return view('jobs.index', ['jobs' => $jobs
    ]);
});

// New
Route::get('/jobs/create', function ()  {
    return view('jobs.create');
});

// Show
Route::get('/jobs/{id}', function ($id)  {
    $job = Job::findOrFail($id);
    return view('jobs.show', ['job' => $job]);
});

// Create
Route::post('/jobs', function ()  {
   // validations
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' =>1
    ]);

    return redirect('/jobs');
});

// Edit
Route::get('/jobs/{id}/edit', function ($id)  {
    $job = Job::findOrFail($id);
    return view('jobs.edit', ['job' => $job]);
});

// Update
Route::patch('/jobs/{id}', function ($id)  {
    //validation
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    $job = Job::findOrFail($id);
    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);
    return view('jobs.show', ['job' => $job]);
});

// Delete
Route::delete('/jobs/{id}', function ($id)  {
    $job = Job::findOrFail($id);
    $job->delete();
    return redirect('/jobs');
});


Route::get('/contact', function () {
    return view('contact');
});

//Route::get('/home', [HomeController::class, 'index']);
