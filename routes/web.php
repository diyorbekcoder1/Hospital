<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
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
Auth::routes();

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('homes');


    Route::group(['namespace' => 'Admin', 'middleware' => ['auth:web'], 'prefix' => 'admin'],function () {
        Route::get('/home', [DashboardController::class, 'index'])->name('home');
        Route::resource('/contact', ContactController::class);
        Route::resource('/blog', BlogController::class);
//        Route::get('/login', [LoginController::class, 'login'])->name('login');
        Route::get('/register', [LoginController::class, 'register'])->name('register');
        Route::post('/register-user', [LoginController::class, 'store'])->name('create_user');
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    });





