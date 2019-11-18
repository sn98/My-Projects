<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/operational', function () {
    return view('operational');
});

Route::get('/denotational', function () {
    return view('denotational');
});

Route::get('/axiomatic', function () {
    return view('axiomatic');
});