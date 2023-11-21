<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/tasks', function () {
    return view('tasks');
});

Route::get('/moduleoption', function () {
    return view('moduleoption');
});

Route::get('/olympus', function () {
    return view('olympus');
});

Route::get('/olympus2', function () {
    return view('olympus2');
});
Route::get('/olympus2video', function () {
    return view('olympus2video');
});

Route::get('/firemusic', function () {
    return view('firemusic');
});

Route::get('/tasks/create', function () {
    return view('createtask');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
