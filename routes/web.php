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
Auth::routes();

Route::get('/', 'HomeController@user_list');
Route::get('/user-list', 'HomeController@user_list');

// Edit|View|Remove
Route::get('/user/{method}/{id}', 'HomeController@user');
Route::post('/user/edit/{id}', 'HomeController@user_edit');

// Create users
Route::get('/create_user', 'HomeController@create_user');
