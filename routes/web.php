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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::get('/posts', 'PostsController@index');
Route::get('/posts/{id}', 'PostsController@show');
Route::get('/create', 'PostsController@create');
Route::post('/store', 'PostsController@store');
Route::get('/posts/{id}/edit', 'PostsController@edit');
Route::post('/update/{id}', 'PostsController@update')->name('toUpdate');
Route::post('/destroy/{id}', 'PostsController@destroy');
