<?php

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');
Route::get('video', 'VideoController@index');

Route::get('import', ['as' => 'video.list', 'uses' => 'VideoController@show']);
Route::post('import', ['as' => 'video.submit', 'uses' => 'VideoController@store']);

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('facebook', 'Auth\AuthController@facebookRedirect');
Route::get('account/facebook', 'Auth\AuthController@facebook');

Route::get('backend', function () {
    return '';
});
