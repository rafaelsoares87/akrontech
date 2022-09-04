<?php

use App\Http\Controllers\EditSiteController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\formSentController;
use App\Http\Controllers\FormsPageCobtroller;
use App\Http\Controllers\googleAdsController;
use App\Http\Controllers\landingPageController;
use App\Http\Controllers\storeController;
use App\Http\Controllers\WebSiteController;
use App\Http\Controllers\websitePageController;
use Illuminate\Support\Facades\Route;

//Admin Web site settings


Route::get('/dashboard/admin/create', [WebSiteController::class, 'create'])->name('admin-create');
Route::post('/dashboard/admin/create', [WebSiteController::class, 'store'])->name('admin-store');
Route::get('/dashboard/admin/edit/{id}', [WebSiteController::class, 'edit'])->name('admin-edit');
Route::patch('/dashboard/admin/{id}', [WebSiteController::class, 'update'])->name('admin-update');




// Route::get('/', [FormsPageCobtroller::class, 'index'])->name('home');
Route::delete('/dashboard/{id}', [FormController::class, 'destroy'])->name('dashboard-destroy');
Route::get('/', [FormsPageCobtroller::class, 'create'])->name('home');
Route::post('/', [FormsPageCobtroller::class, 'store'])->name('home');

Route::get('/service/landingpages', [landingPageController::class, 'index'])->name('landingpage');
Route::get('/service/website', [websitePageController::class, 'index'])->name('website');
Route::get('/service/store', [storeController::class, 'index'])->name('store');
Route::get('/service/googleads', [googleAdsController::class, 'index'])->name('googleads');



// Route::get('/service/googleads', function () {
//     return view('googleads');
// })->name('googleads');
Route::get('/contato/formulario-enviado', [formSentController::class, 'index'])->name('form-sent');
// Route::get('/contato/formulario-enviado', function () {
//     return view('form-sent');
// })->name('form-sent');



// Route::get('/', [WebSiteController::, 'index'])->name('website');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard/admin', [FormController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/{id}', [FormController::class, 'show'])->name('dashboard-show');
});
