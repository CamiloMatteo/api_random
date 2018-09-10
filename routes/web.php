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

Route::get('/', 'RegisterController@index');
Route::get('/directory', 'RegisterController@index');
Route::post('/register', 'RegisterController@store');
Route::get('/users/{id}', 'RegisterController@show');
Route::patch('/users/{user}', 'RegisterController@update');

Route::get('/filter/{filter}', 'RegisterController@filter');
