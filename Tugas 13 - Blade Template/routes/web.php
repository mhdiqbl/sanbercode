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


Route::get('/cast','CastController@index');
Route::get('/cast/create','CastController@create');
Route::post('/cast','CastController@store');
Route::get('/cast/{cast_id}','CastController@show');
Route::get('/cast/{cast_id}/edit','CastController@edit');
Route::put('/cast/{cast_id}','CastController@update');
Route::delete('/cast/{cast_id}','CastController@destroy');


Route::get('/','HomeController@index');
Route::get('/register','AuthController@register');
Route::post('/kirim','AuthController@kirim');
Route::view('/data-table','table.data-table');
Route::view('/table','table.table');
// Route::view('/admin2','layouts.admin');
// Route::view('/register','register');
// Route::view('/welcome','welcome');
// Route::get('/','');
