<?php

Route::get('/', 'MainController@index');
Route::get('/posts/{post}', 'MainController@post');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
