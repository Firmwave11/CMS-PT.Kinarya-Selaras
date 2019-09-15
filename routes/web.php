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
Route::get('/', 'HomeController@login')->name('login');
Route::get('/kinarya', 'KinaryaController@index');
Route::get('/kinarya/hotel', 'KinaryaController@hotel');
Route::get('/home', 'UserController@index');
Route::post('/loginPost', 'UserController@loginPost');
Route::get('/logout', 'UserController@logout');
Route::get('/search','TourlistController@search');
Route::get('/search1','HotelController@search');
Route::get('/search2','TestimoniController@search');
Route::get('/search3','TopdealsController@search');
Route::resource('/explore','ExploreController');
Route::resource('/hotel','HotelController');
Route::resource('/tour', 'TourlistController');
Route::resource('/testimoni', 'TestimoniController');
Route::resource('/promo', 'PromoController');
Route::resource('/contactus', 'ContactusController');
Route::resource('/topdeals', 'TopdealsController');
Route::resource('/tentang', 'TentangController');
Route::resource('/background', 'BackgroundController');


