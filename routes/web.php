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

/*Route::get('/', function () {
    return view('principal');
});*/

Route::get('/', 'ShowPostsController@index')->name('principal');

Route::get('/category/{id}', 'ShowPostsController@getPostsCategory')->name('category');

Route::get('/post/{id}', 'ShowPostsController@showPost')->name('post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'PostController');

Route::resource('categories', 'CategoryController');