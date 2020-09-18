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

Route::get('/', 'FrontController@index')->name('index');
Route::get('/service', 'FrontController@service')->name('service');

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('bisnis')->name('home');

// API
Route::get('/api/users', 'APIController@users')->name('api.users');
Route::get('/api/user/{id}', 'APIController@user')->name('api.user');
Route::get('/api/semua_transaksi', 'APIController@semua_transaksi')->name('api.semua_transaksi');
Route::get('/api/transaksi/{id}', 'APIController@transaksi')->name('api.transaksi');
Route::put('/api/transaksi/{id}', 'APIController@update_status_transaksi')->name('api.update_status_transaksi');
