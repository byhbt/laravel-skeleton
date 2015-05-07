<?php

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::get('video', 'VideoController@index');

Route::get('import', 'VideoController@show');
Route::post('import', ['as' => 'video.submit', 'uses' => 'VideoController@store']);

Route::controllers([
    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
