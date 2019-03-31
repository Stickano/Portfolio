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

Route::get('/', 'IndexController@index');
Route::get('/about', 'AboutController@index');
Route::get('/projects', 'ProjectsController@index');
Route::get('/news', 'NewsController@index');
Route::get('/login', 'LoginController@index');
Route::get('/contact', 'ContactController@index');

