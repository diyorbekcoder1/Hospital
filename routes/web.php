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
\Illuminate\Support\Facades\Auth::Routes();

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('homes');



Route::middleware(['auth:web'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/contact', \App\Http\Controllers\ContactController::class);

});
Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::get('/register', [App\Http\Controllers\LoginController::class, 'register'])->name('register');
Route::post('/register-user', [App\Http\Controllers\LoginController::class, 'store'])->name('create_user');
Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
