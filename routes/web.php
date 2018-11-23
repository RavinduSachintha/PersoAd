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

Auth::routes();

Route::get('/', 'PagesController@index');

Route::get('/shop', 'PagesController@shop');

Route::get('/cart', 'PagesController@cart');

Route::get('/checkout', 'PagesController@checkout');

Route::get('/product-details', 'PagesController@product_details');

Route::get('/user-account', 'UserController@index')->name('user-account');

Route::get('/adds_creating', 'AdvertisementsController@create');
Route::post('/adds_creating', 'AdvertisementsController@store');

Route::get('/admin', 'AdminController@index');
Route::get('users', 'AdminController@user');
Route::get('advertisement', 'AdminController@adver');
