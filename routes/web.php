<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/adds_creating', 'AdvertisementsController@create');
Route::post('/adds_creating', 'AdvertisementsController@store');

Route::get('/index', function () {
    return view('index');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/product-details', function () {
    return view('product-details');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
