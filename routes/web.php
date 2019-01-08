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



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'home\HomeController@index');
Route::get('/about', 'home\AboutController@index');
Route::get('/shoplist', 'home\ShoplistController@index');
Route::get('/single', 'home\SingleController@index');
Route::get('/contact', 'home\ContactController@index');









Route::get('/admin1','Admin\AdminController@index');



Route::get('/admin', 'Admin\AdminController@index');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
