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
Auth::routes();

Route::get('/', [\App\Http\Controllers\Front\IndexController::class, 'index'])->name('homes');


    Route::group(['middleware' => ['auth:web'], 'prefix' => 'admin'],function () {
        Route::get('/home', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('home');
        Route::resource('/contact', App\Http\Controllers\Admin\ContactController::class);
        Route::resource('/blog', App\Http\Controllers\Admin\BlogController::class);
//        Route::get('/login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('login');
        Route::get('/register', [App\Http\Controllers\Admin\LoginController::class, 'register'])->name('register');
        Route::post('/register-user', [App\Http\Controllers\Admin\LoginController::class, 'store'])->name('create_user');
        Route::get('/logout', [App\Http\Controllers\Admin\LoginController::class, 'logout'])->name('logout');


        Route::group(['namespace'=>'Admin','prefix'=>'admin/users','middleware'=>['auth:web']],function(){
                Route::get('/index',[App\Http\Controllers\Admin\UsersController::class,'index']);
        });

    });





