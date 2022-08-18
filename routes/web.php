<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/service/landingpages', function () {
    return view('landingpage');
})->name('landingpage');

Route::get('/service/website', function () {
    return view('website');
})->name('website');

Route::get('/service/store', function () {
    return view('store');
})->name('store');

Route::get('/service/googleads', function () {
    return view('googleads');
})->name('googleads');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
