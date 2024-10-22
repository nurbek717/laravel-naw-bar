<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/users', function () {

    $users = [
        [   'id' => 1 ,
        'name' => "Po'latjon",
        'age' => "21",
        'adres' => "Qashqadaryo",
        'workplace' => "Dasturchi"
    ],
    [   'id'  => 2 ,
        'name' => "Nurbek",
        'age' => "23",
        'adres' => "Jizzah",
        'workplace' => "O'qtuvchi"
    ],
    [    'id' =>3,
        'name' => "Otabek",
        'age' => "23",
        'adres' => "Samarqand",
        'workplace' => "Taxi"
    ],
    [    'id' =>4,
        'name' => "Sunnatulla",
        'age' => "22",
        'adres' => "Toshkent",
        'workplace' => "Dezainer"
    ],
    [    'id' =>5,
        'name' => "Mirjalol",
        'age' => "19",
        'adres' => "Buxoro",
        'workplace' => "Doctor"
    ],
    ];


    return view('/users' , [
        'users' => $users ,
    ]);
});



Route::get('/user/{id}', function ($id) {


    $users = [
        [   'id' => 1 ,
        'name' => "Po'latjon",
        'age' => "21",
        'adres' => "Qashqadaryo",
        'workplace' => "Dasturchi"
    ],
    [   'id'  => 2 ,
        'name' => "Nurbek",
        'age' => "23",
        'adres' => "Jizzah",
        'workplace' => "O'qtuvchi"
    ],
    [    'id' =>3,
        'name' => "Otabek",
        'age' => "23",
        'adres' => "Samarqand",
        'workplace' => "Taxi"
    ],
    [    'id' =>4,
        'name' => "Sunnatulla",
        'age' => "22",
        'adres' => "Toshkent",
        'workplace' => "Dezainer"
    ],
    [    'id' =>5,
        'name' => "Mirjalol",
        'age' => "19",
        'adres' => "Buxoro",
        'workplace' => "Doctor"
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

