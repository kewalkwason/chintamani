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


require __DIR__ . '/dsa_user.php';

Route::get('/mandate-registration', function () {
	return view('frontend.mandate-registration');
})->name('mandate-registration');

Route::get('/pay-now', function () {
	return view('frontend.pay-now');
})->name('pay-now');

Route::get('/dsa-registration', function () {
	return view('frontend.dsa-registration');
})->name('dsa-registration');

Route::get('/', [App\Http\Controllers\Frontend\CustomerController::class, 'index'])->name('home');
Route::get('about-us', [App\Http\Controllers\Frontend\CustomerController::class, 'aboutus'])->name('about-us');
Route::get('why-choose', [App\Http\Controllers\Frontend\CustomerController::class, 'whychooseus'])->name('why-choose');
Route::get('contact-us', [App\Http\Controllers\Frontend\CustomerController::class, 'contactus'])->name('contact-us');
Route::get('blog', [App\Http\Controllers\Frontend\CustomerController::class, 'blog'])->name('blog');
Route::get('blogdetails/{id}', [App\Http\Controllers\Frontend\CustomerController::class, 'blogdetails'])->name('blogdetails');
Route::get('insurancedetails/{id}', [App\Http\Controllers\Frontend\CustomerController::class, 'insurancedetails'])->name('insurancedetails');
Route::get('insurance', [App\Http\Controllers\Frontend\CustomerController::class, 'insurance'])->name('insurance');
Route::get('careers', [App\Http\Controllers\Frontend\CustomerController::class, 'careers'])->name('careers');
Route::get('loans/{id}', [App\Http\Controllers\Frontend\CustomerController::class, 'loans'])->name('loans');
Route::get('loandetail/{id}', [App\Http\Controllers\Frontend\CustomerController::class, 'loandetail'])->name('loandetail');


Route::group(['prefix' => 'admin'], function () {
	Auth::routes();
});

require __DIR__ . '/admin.php';