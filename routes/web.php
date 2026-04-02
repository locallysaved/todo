<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/results', function () {
    return view('results');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/why', function () {
    return view('why');
});
