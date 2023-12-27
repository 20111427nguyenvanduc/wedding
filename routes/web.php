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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/photo-album', 'HomeController@album')->name('album');

Route::get('/thiep-moi', 'HomeController@thiepMoi')->name('thiepMoi');

Route::get('/thiep-moi-{slug}', 'HomeController@thiepMoiDetail')->name('thiepMoiDetail');

Route::post('/wish', 'HomeController@wish')->name('wish');
