<?php

Route::get('/', 'HomeController@index');

Route::get('video', 'VideoController@show');

Route::get('video/:id', ['as' => 'video.detail', 'uses' => 'VideoController@detail']);

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


//Route::group(array('prefix' => 'admin', 'before' => 'auth', 'namespace' => 'Backend'), function()
Route::group(array('prefix' => 'admin', 'namespace' => 'Backend'), function()
{
    Route::get('/', ['as' => 'dashboard.home', 'uses' => 'DashboardController@show']);

    Route::get('user/profile', function()
    {
        // Has Auth Filter
    });
});

