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

Route::get('/blog/posts/', 'blogController@posts')->name('blog.posts');

Route::resource('blog','blogController');

Route::get('/tag/create', 'TagController@create');

Route::post('/tag', 'TagController@store');

Route::post('/blog/{blog}/tag', 'TagController@addTag');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

