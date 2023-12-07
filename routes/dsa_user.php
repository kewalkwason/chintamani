<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\DsaLoginController;


Route::get('dsa/login', [DsaLoginController::class, 'showLoginForm'])->name('dsa.login');
Route::prefix('dsa')->as('dsa.')->group(function () {
    // Route::get('home', 'Home\EmployeeHomeController@index')->name('home');
    Route::namespace('Auth\Login')->group(function () {        
        Route::get('dashboard', [DsaLoginController::class, 'index'])->name('home');
        Route::post('login', [DsaLoginController::class, 'login'])->name('login');
        Route::get('logout', [DsaLoginController::class, 'logout'])->name('logout');
    });
});
