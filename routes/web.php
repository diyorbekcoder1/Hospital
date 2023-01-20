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
        Route::resource('/employees', App\Http\Controllers\Admin\EmployessController::class);
        Route::resource('/event', App\Http\Controllers\Admin\EventController::class);
        Route::resource('/page', App\Http\Controllers\Admin\PageController::class);
        Route::resource('/setting', App\Http\Controllers\Admin\SettingController::class);
        Route::resource('/usefullink', App\Http\Controllers\Admin\UsefullinkController::class);
        Route::resource('/category', App\Http\Controllers\Admin\CategoryController::class);
//        Route::get('/login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('login');
        Route::get('/register', [App\Http\Controllers\Admin\LoginController::class, 'register'])->name('register');
        Route::post('/register-user', [App\Http\Controllers\Admin\LoginController::class, 'store'])->name('create_user');
        Route::get('/logout', [App\Http\Controllers\Admin\LoginController::class, 'logout'])->name('logout');


        Route::group(['prefix'=>'admin/users'],function(){
                Route::get('/',[App\Http\Controllers\Admin\UsersController::class,'index']);
        });

    });





