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
//ruta index
Route::get('/', 'RegisterController@index');
Route::get('/directory', 'RegisterController@index');

//ruta crud user
Route::get('/users/{id}', 'RegisterController@show');
Route::patch('/users/{user}', 'RegisterController@update');
Route::post('/register', 'RegisterController@store');

//ruta filtros
Route::get('/directory/{value}', 'RegisterController@fillTable');
