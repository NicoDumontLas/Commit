<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

//Get route
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');


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
