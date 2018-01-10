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

Route::get('/', 'Home@index');
Route::get('/article/create', 'Home@create');
Route::get('/article/read/{id}', 'Home@show');
Route::get('/article/edit/{id}', 'Home@edit');
Route::get('/article/delete/{id}', 'Home@destroy');
Route::post('/article/update/{id}', 'Home@update');
Route::post('/article/store', 'Home@store');
