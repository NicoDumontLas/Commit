<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

//ROUTE UNE FOIS LOG

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/matieres', function () {
    return view('subjects.index');
})->middleware('auth')->name('subjects');

Route::get('/projets', function () {
    return view('projects.index');
})->middleware('auth')->name('projects');

Route::get('/planning', function () {
    return view('planning.index');
})->middleware('auth')->name('planning');

Route::get('/objectifs', function () {
    return view('goals.index');
})->middleware('auth')->name('goals');

Route::get('/parametres', function () {
    return view('settings.index');
})->middleware('auth')->name('settings');

Route::get('/profile', function () {
    return view('profile.edit');
})->middleware('auth')->name('profile');

//Post route

Route::post('logout', function(){
    Auth::guard('web')->logout();

    Session::invalidate();
    Session::regenerateToken();

    return redirect('/');
})->name('logout');

Route::post('login', LoginController::class)
    ->middleware('throttle:5,1')//times by minutes per ip
    ->name('login.attempt');


Route::post('register', RegisterController::class) ->name('register.store');
