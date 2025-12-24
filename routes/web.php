<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\Users\EngineerController;
use Illuminate\Support\Facades\Route;

Route::prefix('engineers')->name('engineers.')->controller(EngineerController::class)->group(function () {
    Route::get('/','index')->name('index');
    Route::get('/about','about')->name('about');
    Route::get('/browseProjects','browseProjects')->name('browseProjects');
    Route::get('/contact','contact')->name('contact');
    Route::get('/prices','prices')->name('prices');
    Route::get('/product','product')->name('product');
    Route::get('/services','services')->name('services');
    Route::get('/account','account')->name('account');
});
Route::prefix('controlPage')->name('controlPage.')->controller(EngineerController::class)->group(function(){
    Route::get('/','dashboard')->name('dashboard');
});
Route::prefix('/')->name('account.')->controller(FormController::class)->group(function(){
    Route::post('/register','register')->name('register');
    Route::post('/login','login')->name('login');
});
