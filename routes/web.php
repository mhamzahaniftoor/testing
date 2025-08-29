<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


//class Job{
//    public static function all(){
//        return [
//            [
//                'id'=> 1,
//                'title'=>'PHP',
//                'salary'=>'500000$'
//            ],
//            [
//                'id'=> 2,
//                'title'=>'Javascript',
//                'salary'=>'50000$'
//            ],
//            [
//                'id'=> 3,
//                'title'=>'AI/ML',
//                'salary'=>'200000$'
//            ]
//        ];
//    }
//}

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id)  {
    $job = Job::findOrFail($id);
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});

//Route::get('/home', [HomeController::class, 'index']);
