<?php

Route::get('/', 'MainController@index');
Route::get('/posts/{post}', 'MainController@post');