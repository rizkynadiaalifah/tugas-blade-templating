<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('tugas1.welcome');
});

Route::get('home', function () {
    return view('tugas1.home');
});

Route::get('form', function () {
    return view('tugas1.form');
});

Route::get('/', function () {
    return view('dashboard');
});

Route::get('icon', function () {
    return view('icon');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('notifications', function () {
    return view('notifications');
});

Route::get('user', function () {
    return view('user');
});

