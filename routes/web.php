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
// Route::get('/home', [App\Http\Controllers\HomeController::class])->name('home');
// Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');


Auth::routes();



// Public
Route::get('/', 'App\Http\Controllers\Public\HomeController@index')->name('home');
Route::get('category/{slug}', 'App\Http\Controllers\Public\CategoryController@getListProduct')->name('get.list.product');
Route::get('product/{slug}', 'App\Http\Controllers\Public\ProductController@productDetail')->name('product.detail');
Route::get('brand/{slug}', 'App\Http\Controllers\Public\BrandController@getListProduct')->name('brand.product');
            //Cart
Route::get('addCart/{id}', 'App\Http\Controllers\Public\CartController@addCart')->name('add.cart');
Route::get('deleteItemCart/{id}', 'App\Http\Controllers\Public\CartController@deleteItemCart')->name('delete.cart');
Route::get('updateItemCart/{id}/{qty}', 'App\Http\Controllers\Public\CartController@updateItemCart')->name('update.cart');
Route::get('showCart', 'App\Http\Controllers\Public\CartController@showCart')->name('show.list.cart');

//Member
Route::group(['middleware' => 'auth'], function() {
    Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    Route::put('feedback','App\Http\Controllers\Auth\FeedbackController@store')->name('feedback');
});

//Admin
Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('/', function () {
        return view('layouts.app');
    });
    Route::resource('users','App\Http\Controllers\Admin\UserController');
    Route::resource('categories','App\Http\Controllers\Admin\CategoryController');
    Route::resource('brands','App\Http\Controllers\Admin\BrandController');
    Route::resource('products','App\Http\Controllers\Admin\ProductController');
    Route::resource('orders','App\Http\Controllers\Admin\OrderController');
    Route::resource('feedbacks','App\Http\Controllers\Admin\FeedbackController');
});
