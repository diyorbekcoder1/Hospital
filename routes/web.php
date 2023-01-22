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


//'namespace' => 'Admin'
    Route::group([ 'middleware' => ['auth:web'], 'as' => 'admin.', 'prefix' => 'admin',],function () {
        Route::get('/home', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('home');
        Route::resource('/contact', App\Http\Controllers\Admin\ContactController::class);
        Route::resource('/blog', App\Http\Controllers\Admin\BlogController::class);
        Route::resource('/employees', App\Http\Controllers\Admin\EmployessController::class);
        Route::resource('/event', App\Http\Controllers\Admin\EventController::class);
        Route::resource('/page', App\Http\Controllers\Admin\PageController::class);
        Route::resource('/setting', App\Http\Controllers\Admin\SettingController::class);
        Route::resource('/usefullink', App\Http\Controllers\Admin\UsefullinkController::class);
        Route::resource('/category', App\Http\Controllers\Admin\CategoryController::class);


//        Route::group(['prefix'=>'menus'], function() {
            Route::post('menus/save', [App\Http\Controllers\Admin\MenuController::class,'save'])->name('menus.save');
            Route::post('menus/{id}/toggle-publish', [App\Http\Controllers\Admin\MenuController::class,'togglePublish'])->name('admin.menus.toggle-publish')->where('id', '[0-9]+');
            Route::resource('/menus', App\Http\Controllers\Admin\MenuController::class);
//        });

//        Route::get('/login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('login');
        Route::get('/register', [App\Http\Controllers\Admin\LoginController::class, 'register'])->name('register');
        Route::post('/register-user', [App\Http\Controllers\Admin\LoginController::class, 'store'])->name('create_user');
        Route::get('/logout', [App\Http\Controllers\Admin\LoginController::class, 'logout'])->name('logout');

        Route::group(['prefix'=>'/users',['middleware' => 'can:manage_user']],function(){
                Route::get('/',[App\Http\Controllers\Admin\UsersController::class,'index']);
                Route::get('get-list',[App\Http\Controllers\Admin\UsersController::class,'getUserList'])->name('get-list');
                Route::get('/create', [App\Http\Controllers\Admin\UsersController::class,'create']);
                Route::post('/create', [App\Http\Controllers\Admin\UsersController::class,'store'])->name('create-user');
                Route::get('/user/{id}', [App\Http\Controllers\Admin\UsersController::class,'edit']);
                Route::post('/update', [App\Http\Controllers\Admin\UsersController::class,'update']);
                Route::get('/delete/{id}', [App\Http\Controllers\Admin\UsersController::class,'delete']);
        });
//        'middleware' => 'can:manage_role|manage_user'
        Route::group(['prefix'=>'/roles'], function(){
            Route::get('/', [App\Http\Controllers\Admin\RolesController::class,'index']);
            Route::get('/get-list', [App\Http\Controllers\Admin\RolesController::class,'getRoleList']);
            Route::post('/create', [App\Http\Controllers\Admin\RolesController::class,'create']);
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\RolesController::class,'edit']);
            Route::post('/update', [App\Http\Controllers\Admin\RolesController::class,'update']);
            Route::get('/delete/{id}', [App\Http\Controllers\Admin\RolesController::class,'delete']);
        });
//        ,'middleware' => 'can:manage_permission|manage_user'
        Route::group(['prefix'=>'/permission'], function(){
            Route::get('/', [App\Http\Controllers\Admin\PermissionController::class,'index']);
            Route::get('/get-list', [App\Http\Controllers\Admin\PermissionController::class,'getPermissionList']);
            Route::post('/create', [App\Http\Controllers\Admin\PermissionController::class,'create']);
            Route::get('/update', [App\Http\Controllers\Admin\PermissionController::class,'update']);
            Route::get('/delete/{id}', [App\Http\Controllers\Admin\PermissionController::class,'delete']);
        });


    });





