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

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', 'IndexController')->name('main.index');
});

Route::group(['namespace' => 'Main', 'prefix' => 'main'], function () {
        Route::get('/blog', 'BlogController')->name('main.blog');
    });

Route::group(['namespace' => 'Main', 'prefix' => 'main'], function () {
    Route::get('/contact', 'ContactController')->name('main.contact');
});

Route::group(['namespace' => 'Main', 'prefix' => 'main'], function () {
    Route::get('/instructors', 'InstructorsController')->name('main.instructors');

});

    Route::group(['namespace' => 'Main', 'prefix' => 'main'], function () {
        Route::get('/courses', 'CoursesController')->name('main.courses');

});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController');
    });
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Category' , 'prefix' => 'categories'], function () {
        Route::get('/', 'IndexController')->name('category.index');
    });
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Category' , 'prefix' => 'category'], function () {
        Route::get('/create', 'CreateController')->name('admin.category.create');
    });
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Category' , 'prefix' => 'categories'], function () {
        Route::post('/', 'StoreController')->name('admin.category.store');
    });
});

Auth::routes();

