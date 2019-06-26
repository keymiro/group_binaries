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



Route::get('/','IndexController@index' );
Route::get('/nosotros','IndexController@nosotros' );
Route::get('/productos','IndexController@productos' );
Route::get('/servicios','IndexController@servicios' );
Route::get('/cotizar','IndexController@cotizar' );
Route::get('/circuitocerrado','IndexController@circuitocerrado' );


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
