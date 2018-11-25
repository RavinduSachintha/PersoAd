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

//Route::get('/product-details', 'PagesController@product_details');

Route::get('/user-account', 'UserController@index')->name('user-account');

Route::get('/adds_creating', 'AdvertisementsController@index');
Route::post('/adds_creating', 'AdvertisementsController@store');
Route::get('/', 'AdvertisementsController@show');
Route::get('/product-details/{id}', 'AdvertisementsController@view')->name('product-details');

Route::get('/admin', 'AdminController@index');
Route::get('users', 'AdminController@user');
Route::get('advertisement', 'AdminController@adver');
Route::get('category', 'AdminController@category');
Route::get('/delete/{id}','AdminController@destroy')->name('delete');
Route::get('/deletead/{id}','AdminController@deletead')->name('deletead');
Route::get('createcategory','AdminController@create');
Route::post('createCat','AdminController@createcat');
Route::get('/deletecat/{id}','AdminController@deletecat')->name('deletecat');
