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
Route::get('/','SiswaController@home');
Route::get('/daftar','SiswaController@daftar');
Route::post('/daftar/store','SiswaController@store');
Route::get('/pendaftar','SiswaController@pendaftar');
Route::get('/pendaftar/edit/{id}','SiswaController@edit');
Route::post('/pendaftar/edit/{id}/update','SiswaController@update');
Route::get('/pendaftar/hapus/{id}','SiswaController@hapus');
