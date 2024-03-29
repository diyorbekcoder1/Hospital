<?php


use Illuminate\Support\Facades\Auth;
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
Route::get('/appointment', [\App\Http\Controllers\Front\AppointmentController::class, 'index'])->name('appointment-view');
//Route::get('/page', ['as' => 'dashboard.page', 'uses' => '\App\Http\Controllers\Front\PageController@index']);
Route::get('/page/{slug}', [App\Http\Controllers\Front\PageController::class,'show'])->name('page.show');

// contact
Route::get('/contacts', array('as' => 'dashboard.contact', 'uses' => '\App\Http\Controllers\Front\ContactController@getContact'));

Route::post('/contacts', array('as' => 'contact.post', 'uses' => '\App\Http\Controllers\Front\ContactController@postContact', ), array('before' => 'csrf'));


//'namespace' => 'Admin'
Route::group(['middleware' => ['auth:web'], 'as' => 'admin.', 'prefix' => 'admin',], function () {
    Route::get('/home', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('home');
    Route::resource('/contacts', App\Http\Controllers\Admin\ContactController::class);

    Route::resource('/post', \App\Http\Controllers\Admin\PostController::class);


    Route::resource('/article', '\App\Http\Controllers\Admin\ArticleController', array('before' => 'hasAccess:article'));
    Route::get('/article/{id}/delete', array('as' => 'article.delete','uses' => '\App\Http\Controllers\Admin\ArticleController@confirmDestroy', ))->where('id', '\d+');
//   Route::get('/article', array('as' => 'dashboard.article', 'uses' => '\App\Http\Controllers\Admin\ArticleController@index'));
//   Route::get('/article/{slug}', array('as' => 'dashboard.article.show', 'uses' => '\App\Http\Controllers\Admin\ArticleController@show'));


    Route::resource('/interactive_services', \App\Http\Controllers\Admin\InteractiveServiceController::class);
    Route::resource('/interactive', \App\Http\Controllers\Admin\InteractiveController::class);

    /*        Route::get('/article', array('as' => 'dashboard.article', 'uses' => 'ArticleController@index'));
            Route::get('/article/{slug}', array('as' => 'dashboard.article.show', 'uses' => 'ArticleController@show'));*/
    Route::resource('/members', App\Http\Controllers\Admin\MemberController::class);
    Route::resource('/galereya', App\Http\Controllers\Admin\PhotoGalleryController::class);
    Route::resource('/event', App\Http\Controllers\Admin\EventController::class);
    Route::resource('/page', App\Http\Controllers\Admin\PageController::class);
    Route::resource('/setting', App\Http\Controllers\Admin\SettingController::class);
    Route::resource('/usefullink', App\Http\Controllers\Admin\UsefullinkController::class);
    Route::resource('/category', App\Http\Controllers\Admin\CategoryController::class);


//        Route::group(['prefix'=>'menus'], function() {
    Route::post('menus/save', [App\Http\Controllers\Admin\MenuController::class, 'save'])->name('menus.save');
    Route::post('menus/{id}/toggle-publish', [App\Http\Controllers\Admin\MenuController::class, 'togglePublish'])->name('admin.menus.toggle-publish')->where('id', '[0-9]+');
    Route::resource('/menus', App\Http\Controllers\Admin\MenuController::class);
//        });

//        Route::get('/login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('login');
    Route::get('/register', [App\Http\Controllers\Admin\LoginController::class, 'register'])->name('register');
    Route::post('/register-user', [App\Http\Controllers\Admin\LoginController::class, 'store'])->name('create_user');
    Route::get('/logout', [App\Http\Controllers\Admin\LoginController::class, 'logout'])->name('logout');


//   FF0F0000     Route::get('/login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('login')->middleware('throttle:3,3');
    Route::resource('/sliders', App\Http\Controllers\Admin\SliderController::class);
//        Route::group(['prefix' => '/sliders','as'=>'sliders.', ['middleware' => 'can:manage_user']], function () {
//        Route::resource('/', App\Http\Controllers\Admin\SliderController::class);
//        Route::get('/create', [App\Http\Controllers\Admin\SliderController::class, 'create'])->name('create');
//        Route::post('/store', [App\Http\Controllers\Admin\SliderController::class, 'store'])->name('store');
//        Route::get('/{id}/edit',[App\Http\Controllers\Admin\SliderController::class, 'edit'])->name('edit');
//        Route::get('/{id}/delete',[App\Http\Controllers\Admin\SliderController::class, 'confirmDestroy'])->name('delete')->where('id', '[0-9]+');
//        Route::post('/update',[App\Http\Controllers\Admin\SliderController::class, 'update'])->name('update');
//        Route::delete('/destroy',[App\Http\Controllers\Admin\SliderController::class, 'destroy'])->name('destroy');
//        Route::post('/upload/{id}', ['as' => 'admin.slider.upload.image','uses' => 'SliderController@upload'])->where('id', '[0-9]+');
//        Route::patch('/slider-delete-image', ['as' => 'admin.slider.delete.image','uses' => 'SliderController@deleteImage']);
//    });

    Route::group(['prefix' => '/users', ['middleware' => 'can:manage_user']], function () {
        Route::get('/', [App\Http\Controllers\Admin\UsersController::class, 'index']);
        Route::get('get-list', [App\Http\Controllers\Admin\UsersController::class, 'getUserList'])->name('get-list');
        Route::get('/create', [App\Http\Controllers\Admin\UsersController::class, 'create']);
        Route::post('/create', [App\Http\Controllers\Admin\UsersController::class, 'store'])->name('create-user');
        Route::get('/user/{id}', [App\Http\Controllers\Admin\UsersController::class, 'edit']);
        Route::post('/update', [App\Http\Controllers\Admin\UsersController::class, 'update']);
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\UsersController::class, 'delete']);
    });
//        'middleware' => 'can:manage_role|manage_user'
    Route::group(['prefix' => 'roles'], function () {
        Route::get('/', [App\Http\Controllers\Admin\RolesController::class, 'index']);
        Route::get('/get-list', [App\Http\Controllers\Admin\RolesController::class, 'getRoleList']);
        Route::post('/create', [App\Http\Controllers\Admin\RolesController::class, 'create']);
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\RolesController::class, 'edit']);
        Route::post('/update', [App\Http\Controllers\Admin\RolesController::class, 'update']);
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\RolesController::class, 'delete']);
    });
//        ,'middleware' => 'can:manage_permission|manage_user'
    Route::group(['prefix' => 'permission'], function () {
        Route::get('/', [App\Http\Controllers\Admin\PermissionController::class, 'index']);
        Route::get('/get-list', [App\Http\Controllers\Admin\PermissionController::class, 'getPermissionList']);
        Route::post('/create', [App\Http\Controllers\Admin\PermissionController::class, 'create']);
        Route::get('/update', [App\Http\Controllers\Admin\PermissionController::class, 'update']);
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\PermissionController::class, 'delete']);
    });


});





