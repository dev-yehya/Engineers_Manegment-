<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\EngineerController;


Route::prefix('engineers')->name('engineers.')->controller(FormController::class)->group(function () {
    Route::post('/','subscribe')->name('subscribe');
    Route::post('/index_contact','index_contact')->name('index_contact');
});
Route::prefix('services')->name('services.')->controller(FormController::class)->group(function () {
    Route::post('/contact','services_contact')->name('services_contact');
});
Route::prefix('prices')->name('prices.')->controller(FormController::class)->group(function () {
    Route::post('/contact','prices_contact')->name('prices_contact');
});


