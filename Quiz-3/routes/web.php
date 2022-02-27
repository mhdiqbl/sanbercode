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
Route::view('/', 'layouts.master');
Route::get('/soal1', 'BukuController@soal1');
Route::get('/buku','BukuController@index');
Route::get('/buku/create','BukuController@create');
Route::post('/buku','BukuController@store');
Route::get('/buku/{buku_id}','BukuController@show');
Route::get('/buku/{buku_id}/edit','BukuController@edit');
Route::put('/buku/{buku_id}','BukuController@update');
Route::delete('/buku/{buku_id}','BukuController@destroy');

// Route::get('/buku','index');
// Route::get('/buku/create','');
