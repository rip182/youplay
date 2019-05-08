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

Route::get('/','IndexController@index');
Route::get('/video/upload','VideoController@create');
Route::post('/video/upload/file','VideoController@store');
Route::get('watch/video','VideoController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


