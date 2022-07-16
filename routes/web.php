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

Route::get('/home', [App\Http\Controllers\HomeController::class])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade');
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons');
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});



Route::group(['prefix' => 'admin','middleware' => ['auth','role:admin']], function () {
    Route::get('/', function () {
        return view('layouts.app');
    });
    Route::resource('users','App\Http\Controllers\UserController');
    Route::resource('categories','App\Http\Controllers\CategoryController');
    Route::resource('brands','App\Http\Controllers\BrandController');
    Route::resource('products','App\Http\Controllers\ProductController');
    Route::resource('images','App\Http\Controllers\ProductImageController');
    Route::resource('orders','App\Http\Controllers\OrderController');
    Route::resource('feedbacks','App\Http\Controllers\FeedbackController');
});
//  Product detail
Route::get('/detail', 'App\Http\Controllers\ProductController@detail')->name('detail');
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/cart', 'App\Http\Controllers\ProductController@cart')->name('cart');
Route::get('/add-to-cart/{id}', 'App\Http\Controllers\ProductController@addToCart')->name('addToCart');


