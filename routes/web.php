<?php
//chaqirib olish 
use Illuminate\Support\Facades\Route;
use App\Models\Student;


Route::get('/', function () {
    return view('home');
});


//users da modellar bilanishlash

Route::get('/users', function () {
    $users = Student::all();
    return view('/users' , [
        'users' => $users ,
    ]);
});



Route::get('/user/{id}', function ($id) {
    $user = Student::find($id);
    return view ('user', ['user' => $user]);
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

