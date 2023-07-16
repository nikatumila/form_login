<?php

use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;

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

Route::controller(Home::class)->group(function () {
    Route::get('/', 'index')->middleware('auth')->name('home');
    Route::get('/service', 'service')->name('Services');
    Route::get('/schedule', 'Schedule')->name('Schedule');
    Route::get('/cars', 'cars')->name('Cars');
    Route::get('/contact', 'contact')->name('Contact');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
