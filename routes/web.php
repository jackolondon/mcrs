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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('train/indexParDate/{date}', 'trainController@indexParDate')->name('train.indexParDate');
Route::resource('train', 'trainController');

Route::get('planeMetz/indexParDate/{date}', 'planeMetzController@indexParDate')->name('planeMetz.indexParDate');
Route::resource('planeMetz', 'planeMetzController');

Route::get('planeLux/indexParDate/{date}', 'planeLuxController@indexParDate')->name('planeLux.indexParDate');
Route::resource('planeLux', 'planeLuxController');

Route::get('room/indexParDate/{date}', 'roomController@indexParDate')->name('room.indexParDate');
Route::resource('room', 'roomController');
