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

Route::get('/','PostsController@index')->name('home');
Route::get('/post/create','PostsController@create');
Route::get('/post/{post}','PostsController@show');
Route::post('/posts','PostsController@store');

Route::post('/posts/{post}/comments','CommentsController@store');

Route::get('/posts/tags/{tag}', 'TagsController@index');
Route::get('/post/{post}/edit','PostsController@edit')->name('post.edit');
Route::post('/post/{post}/edit', 'PostsController@update')->name('post.update');

Route::delete('/post/{post}/del','PostsController@destroy')->name('post.delete');
Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store')->name('register');
Route::get('/login', 'SessionsController@create');
Route::post('/login','SessionsController@store')->name('login');
Route::get('/logout','SessionsController@destroy')->name('logout');