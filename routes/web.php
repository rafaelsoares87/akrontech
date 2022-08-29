<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\FormsPageCobtroller;
use Illuminate\Support\Facades\Route;



Route::get('/', [FormsPageCobtroller::class, 'index'])->name('home');
Route::delete('/dashboard/{id}', [FormController::class, 'destroy'])->name('dashboard-destroy');
Route::get('/', [FormsPageCobtroller::class, 'create'])->name('home');
Route::post('/', [FormsPageCobtroller::class, 'store'])->name('home');


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
Route::get('/contato/formulario-enviado', function () {
    return view('form-sent');
})->name('form-sent');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    
    
    Route::get('/dashboard', [FormController::class, 'index'])->name('dashboard');
    
    Route::get('/dashboard/{id}', [FormController::class, 'show'])->name('dashboard-show');
    
    
    
});
