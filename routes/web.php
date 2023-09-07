<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\ContactController;

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

/* Route::get('/index', function () {
    return view('index');
}); */

Route::get('/index', [HomeController::class, 'index'])->name('home.index');
Route::get('/availability-check', [HomeController::class, 'availabilityCheck'])->name('home.availabilityCheck');

Route::get('/about', function () {
    return view('about');
});

Route::get('/rooms', [RoomsController::class, 'index']);

Route::get('/room-details/{id}', [RoomController::class, 'show'])->name('room.details');

Route::get('/offers', [OffersController::class, 'index'])->name('offers.index');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');