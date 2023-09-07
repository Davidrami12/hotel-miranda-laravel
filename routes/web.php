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
    return view('welcome');
});

// add index too

Route::get('/about', function () {
    return view('about');
});

Route::get('/rooms', function () {
    return view('rooms');
});

Route::get('/room-details', function () {
    return view('room-details');
});

Route::get('/offers', function () {
    return view('offers');
});

Route::get('/contact', function () { // should be POST ?
    return view('contact');
});