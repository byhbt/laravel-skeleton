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


//Route::group(array('prefix' => 'admin', 'before' => 'auth', 'namespace' => 'Backend'), function()
Route::group(array('prefix' => 'admin', 'namespace' => 'Backend'), function()
{
    Route::get('/', ['as' => 'dashboard.home', 'uses' => 'DashboardController@show']);

    Route::get('video-list', ['as' => 'backend.video.list', 'uses' => 'VideoController@show']);

    Route::get('video', ['as' => 'backend.video.create', 'uses' => 'VideoController@create']);
    Route::post('video', ['as' => 'backend.video.store', 'uses' => 'VideoController@store']);
    Route::get('video/{id}', ['as' => 'backend.video.edit', 'uses' => 'VideoController@edit']);
    Route::post('video/{id}', ['as' => 'backend.video.update', 'uses' => 'VideoController@update']);

    Route::post('video/delete/{id}', ['as' => 'backend.video.delete', 'uses' => 'VideoController@destroy']);

    Route::get('video-category', ['as' => 'backend.video.category.list', 'uses' => 'VideoController@showCategory']);
    Route::post('video-category', ['as' => 'backend.video.category.save', 'uses' => 'VideoController@saveCategory']);

    Route::get('video-crawler', ['as' => 'backend.video.crawler', 'uses' => 'VideoController@showCrawler']);

    Route::get('post', ['as' => 'backend.post.create', 'uses' => 'PostController@create']);
    Route::post('post', ['as' => 'backend.post.store', 'uses' => 'PostController@store']);
    Route::get('post/{id}', ['as' => 'backend.post.edit', 'uses' => 'PostController@edit']);
    Route::post('post/{id}', ['as' => 'backend.post.update', 'uses' => 'PostController@update']);

    Route::get('post-category', ['as' => 'backend.post.category.list', 'uses' => 'PostController@showCategory']);
});