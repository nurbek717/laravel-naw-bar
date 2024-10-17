<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/users', function () {

    $users = [
        [   'id' => 1 ,
            'title' => "Director",
            'salary' => "50.000$"
        ],
        [   'id'  => 2 ,
            'title' => "Programmer",
            'salary' => "35.000$"
        ],
        [    'id' =>3,
            'title' => "Teacher",
            'salary' => "40.000$"
        ],
    ];

    return view('/users' , [
        'users' => $users ,
    ]);
});



Route::get('/user/{id}', function ($id) {


    $users = [
        [   'id' => 1 ,
            'title' => "Director",
            'salary' => "50.000$"
        ],
        [   'id'  => 2 ,
            'title' => "Programmer",
            'salary' => "35.000$"
        ],
        [    'id' =>3,
            'title' => "Teacher",
            'salary' => "40.000$"
        ],
    ];


    foreach ($users as $user) {
        if ($user['id'] == $id) {
            return view ('user',[
                'user' => $user
            ]);
        }
    }
});



Route::get('/contact', function () {
    return view('contact');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

