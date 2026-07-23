<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

//Get route
Route::get('/', function () {
    return view('home');
});

//parameters using routes
Route::get('/dashboard', function () {
    return view('dashboard');
});


//named routes
Route::get('/register', function () {
    return view('register');
})->name('registerpage');

//named routes
Route::get('/login', function () {
    return view('Auth.login');
})->name('loginpage');



//post route example
Route::post("/formsubmitted", function (Request $request) {

    $request->validate([
        'name' => 'required|min:3|max:30',
        'email' => 'required|email|min:3|max:30',
    ]);

    $name = $request->input("name");
    $email = $request->input("email");

    return "Your name is : {$request->input("name")} , and email is : $email";
})->name('formsubmitted');
