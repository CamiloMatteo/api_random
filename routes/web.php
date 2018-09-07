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

Route::get('/', 'registerController@index');
Route::get('/directory', 'registerController@index');
Route::post('/register', 'registerController@store');
Route::get('/users/{id}', 'registerController@show');
Route::patch('/users/{num_worker}', 'registerController@update');
