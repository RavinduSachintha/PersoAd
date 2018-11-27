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

//linked pages
Route::get('/', 'PagesController@index');
Route::get('/shop', 'PagesController@shop');
Route::get('/search', 'PagesController@shop1');
Route::get('/cart', 'PagesController@cart');
Route::get('/checkout', 'PagesController@checkout');
Route::get('/searching', 'PagesController@search');

//Public user dashboard
Route::get('/user-account', 'CategoriesController@show')->middleware('is_normal_user')->name('user-account');
Route::post('/user-account', 'AdvertisementsController@store')->middleware('is_normal_user')->name('user-account');
Route::get('/adds_table', 'AdvertisementsController@view');



//Detailed view of an advertisement
Route::get('/product-details/{id}', 'PagesController@view')->name('product-details');

//Admin panel
Route::get('/admin', 'AdminController@index')->middleware('is_admin')->name('admin');

//Users controlling in admin panel
Route::get('/users', 'AdminController@user');
Route::get('/delete/{id}','AdminController@destroy')->name('delete');

//Advertisement controlling in admin panel
Route::get('advertisement', 'AdminController@adver');
Route::get('/deletead/{id}','AdminController@deletead')->name('deletead');

//Category controlling in admin panel
Route::get('category', 'AdminController@category');
Route::get('createcategory','AdminController@create');
Route::post('createCat','AdminController@createcat');
Route::get('/deletecat/{id}','AdminController@deletecat')->name('deletecat');

//Notification controlling in admin panel
Route::get('notification', 'AdminController@index');
Route::get('/notify/{id}','AdminController@notify')->name('notify');
Route::get('preview/{id}', 'AdminController@check')->name('check');
Route::get('/back', 'AdminController@back')->name('back');

//Payment related
Route::post('/charge', 'CheckoutController@charge');