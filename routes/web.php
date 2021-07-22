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
Route::get('/', 'PostController@index')->name('post');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::post('/create', 'PostController@createPost')->name('create');
    Route::post('/like/{id}', 'PostController@likePost')->name('like');
    Route::post('/unlike/{id}', 'PostController@unlikePost')->name('unlike');
    
});

Auth::routes();
