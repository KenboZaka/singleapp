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

Route::get('/post', 'PostController@index');
Route::post('post/confirm', 'PostController@confirm');
Route::post('post/create', 'PostController@create');
Route::post('post/delete{id}', 'PostController@delete');
Route::get('post/detail/{id}', 'PostController@detail');
Route::get('post/edit/{id}', 'PostController@edit');
Route::post('post/edit/{id}', 'PostController@update');
Route::post('comment/create', 'CommentController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
