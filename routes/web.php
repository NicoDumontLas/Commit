<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotionController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SubjectNotionController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
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




//ROUTE RESSOURCES TODO : AJOUTER LES NOTIONS ET AUTRES TABLES DE LA BDD

Route::middleware('auth')->group(function () {
    Route::resource('subjects', SubjectController::class);
    Route::resource('sections', SectionController::class);
    Route::resource('subjects.notions', NotionController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('projects.tasks', TaskController::class);
});
