<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::view('/','home');
Route::view('/contact','contact');
Route::resource('jobs', JobController::class);  // resource to use all routes

//Route::resource('jobs', JobController::class,[
//    'only' => ['index','create','store','edit','update','destroy'] // only specific routes
//]);

//Route::controller(JobController::class)->group(function () {
//    Route::get('/jobs', 'index');
//    Route::get('/jobs/create', 'create');
//    Route::post('/jobs', 'store');
//    Route::get('/jobs/{job}', 'show');
//    Route::get('/jobs/{job}/edit', 'edit');
//    Route::patch('/jobs/{job}', 'update');
//    Route::delete('/jobs/{job}', 'destroy');
//});

