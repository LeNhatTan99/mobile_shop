<?php

use Illuminate\Support\Facades\Route;



Auth::routes();



// Public
Route::get('/', 'App\Http\Controllers\Public\HomeController@index')->name('home');
Route::get('/home', 'App\Http\Controllers\Public\HomeController@index')->name('home');
Route::get('category/{slug}', 'App\Http\Controllers\Public\CategoryController@getListProduct')->name('get.list.product');
Route::get('product/{slug}', 'App\Http\Controllers\Public\ProductController@productDetail')->name('product.detail');
Route::get('brand/{slug}', 'App\Http\Controllers\Public\BrandController@getListProduct')->name('brand.product');
            //Cart
Route::get('addCart/{id}', 'App\Http\Controllers\Public\CartController@addCart')->name('add.cart');
Route::get('deleteItemCart/{id}', 'App\Http\Controllers\Public\CartController@deleteItemCart')->name('delete.cart');
Route::get('updateItemCart/{id}/{qty}', 'App\Http\Controllers\Public\CartController@updateItemCart')->name('update.cart');
Route::get('showCart', 'App\Http\Controllers\Public\CartController@showCart')->name('show.list.cart');

Route::get('cart/order', 'App\Http\Controllers\Public\OrderController@create')->name('order');
Route::get('cart/order/checkout', 'App\Http\Controllers\Public\OrderController@store')->name('checkout');
Route::get('cart/order/checkout-success', 'App\Http\Controllers\Public\OrderController@checkoutSuccess')->name('checkout.success');



//Member
Route::group(['middleware' => 'auth'], function() {
    Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    Route::put('feedback','App\Http\Controllers\Auth\FeedbackController@store')->name('feedback');
    Route::get('orderInfo','App\Http\Controllers\Auth\OrderController@orderInfo')->name('order.info');
});

//Admin
Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'role:admin']], function() {
    Route::resource('users','App\Http\Controllers\Admin\UserController');
    Route::resource('categories','App\Http\Controllers\Admin\CategoryController');
    Route::resource('brands','App\Http\Controllers\Admin\BrandController');
    Route::resource('products','App\Http\Controllers\Admin\ProductController');
    Route::resource('orders','App\Http\Controllers\Admin\OrderController');
    Route::resource('feedbacks','App\Http\Controllers\Admin\FeedbackController');
});


//Mail
Route::post('/resign-email', 'App\Http\Controllers\SendMailController@sendMail')->name('sendMail');
Route::post('cart/order/checkout-sendmail', 'App\Http\Controllers\Public\OrderController@sendMailCheckout')->name('sendMail.checkout');

