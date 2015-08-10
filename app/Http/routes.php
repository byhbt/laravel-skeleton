<?php

/**
 * Frontend route
 */
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('video', ['as' => 'video.list', 'uses' => 'VideoController@index']);
Route::get('video/{slug}', ['as' => 'video.detail', 'uses' => 'VideoController@viewDetail']);
Route::get('tin-tuc', ['as' => 'post.list', 'uses' => 'PostController@index']);
Route::get('tin-tuc/{slug}', ['as' => 'post.detail', 'uses' => 'PostController@viewDetail']);
Route::get('dia-diem', ['as' => 'court.list', 'uses' => 'CourtController@index']);

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('facebook', 'Auth\AuthController@facebookRedirect');
Route::get('account/facebook', 'Auth\AuthController@facebook');

/**
 * Backend route
 */
Route::group(array('prefix' => 'admin', 'namespace' => 'Backend'), function () {
    Route::get('/', ['as' => 'dashboard.home', 'uses' => 'DashboardController@show']);

    Route::get('video/list', ['as' => 'backend.video.list', 'uses' => 'VideoController@index']);
    Route::get('video', ['as' => 'backend.video.create', 'uses' => 'VideoController@create']);
    Route::post('video', ['as' => 'backend.video.store', 'uses' => 'VideoController@store']);
    Route::get('video/{id}', ['as' => 'backend.video.edit', 'uses' => 'VideoController@edit']);
    Route::post('video/{id}', ['as' => 'backend.video.update', 'uses' => 'VideoController@update']);
    Route::post('video/delete/{id}', ['as' => 'backend.video.delete', 'uses' => 'VideoController@destroy']);
    Route::get('video-crawler', ['as' => 'backend.video.crawler', 'uses' => 'VideoController@showCrawler']);

    Route::get('post/list', ['as' => 'backend.post.list', 'uses' => 'PostController@index']);
    Route::get('post', ['as' => 'backend.post.create', 'uses' => 'PostController@create']);
    Route::post('post', ['as' => 'backend.post.store', 'uses' => 'PostController@store']);
    Route::get('post/{id}', ['as' => 'backend.post.edit', 'uses' => 'PostController@edit']);
    Route::post('post/{id}', ['as' => 'backend.post.update', 'uses' => 'PostController@update']);
    Route::post('post/delete/{id}', ['as' => 'backend.post.delete', 'uses' => 'PostController@destroy']);

    Route::get('court/list', ['as' => 'backend.court.list', 'uses' => 'CourtController@index']);
    Route::get('court', ['as' => 'backend.court.create', 'uses' => 'CourtController@create']);
    Route::post('court', ['as' => 'backend.court.store', 'uses' => 'CourtController@store']);
    Route::get('court/{id}', ['as' => 'backend.court.edit', 'uses' => 'CourtController@edit']);
    Route::post('court/{id}', ['as' => 'backend.court.update', 'uses' => 'CourtController@update']);
    Route::post('court/delete/{id}', ['as' => 'backend.court.delete', 'uses' => 'CourtController@destroy']);

    Route::get('event/list', ['as' => 'backend.event.list', 'uses' => 'EventController@index']);
    Route::get('event', ['as' => 'backend.event.create', 'uses' => 'EventController@create']);
    Route::post('event', ['as' => 'backend.event.store', 'uses' => 'EventController@store']);
    Route::get('event/{id}', ['as' => 'backend.event.edit', 'uses' => 'EventController@edit']);
    Route::post('event/{id}', ['as' => 'backend.event.update', 'uses' => 'EventController@update']);
    Route::post('event/delete/{id}', ['as' => 'backend.event.delete', 'uses' => 'EventController@destroy']);

    Route::get('invitation/list', ['as' => 'backend.invitation.list', 'uses' => 'InvitationController@index']);
    Route::get('invitation', ['as' => 'backend.invitation.create', 'uses' => 'InvitationController@create']);
    Route::post('invitation', ['as' => 'backend.invitation.store', 'uses' => 'InvitationController@store']);
    Route::get('invitation/{id}', ['as' => 'backend.invitation.edit', 'uses' => 'InvitationController@edit']);
    Route::post('invitation/{id}', ['as' => 'backend.invitation.update', 'uses' => 'InvitationController@update']);
    Route::post('invitation/delete/{id}', ['as' => 'backend.invitation.delete', 'uses' => 'InvitationController@destroy']);

    Route::get('post/category/list', ['as' => 'backend.post.category.list', 'uses' => 'PostCategoryController@index']);
    Route::get('post/category/create', ['as' => 'backend.post.category.create', 'uses' => 'PostCategoryController@create']);
    Route::post('post/category/create', ['as' => 'backend.post.category.store', 'uses' => 'PostCategoryController@store']);
    Route::get('post/category/edit/{id}', ['as' => 'backend.post.category.edit', 'uses' => 'PostCategoryController@edit']);
    Route::post('post/category/edit/{id}', ['as' => 'backend.post.category.update', 'uses' => 'PostCategoryController@update']);
    Route::post('post/category/delete/{id}', ['as' => 'backend.post.category.delete', 'uses' => 'PostCategoryController@destroy']);

    Route::get('video/category/list', ['as' => 'backend.video.category.list', 'uses' => 'VideoCategoryController@index']);
    Route::get('video/category/create', ['as' => 'backend.video.category.create', 'uses' => 'VideoCategoryController@create']);
    Route::post('video/category/create', ['as' => 'backend.video.category.store', 'uses' => 'VideoCategoryController@store']);
    Route::get('video/category/edit/{id}', ['as' => 'backend.video.category.edit', 'uses' => 'VideoCategoryController@edit']);
    Route::post('video/category/edit/{id}', ['as' => 'backend.video.category.update', 'uses' => 'VideoCategoryController@update']);
    Route::post('video/category/delete/{id}', ['as' => 'backend.video.category.delete', 'uses' => 'VideoCategoryController@destroy']);

    Route::get('user/list', ['as' => 'backend.user.list', 'uses' => 'UserController@index']);
    Route::get('user', ['as' => 'backend.user.create', 'uses' => 'UserController@create']);
    Route::post('user', ['as' => 'backend.user.store', 'uses' => 'UserController@store']);
    Route::get('user/{id}', ['as' => 'backend.user.edit', 'uses' => 'UserController@edit']);
    Route::post('user/{id}', ['as' => 'backend.user.update', 'uses' => 'UserController@update']);
    Route::post('user/delete/{id}', ['as' => 'backend.user.delete', 'uses' => 'UserController@destroy']);
});
