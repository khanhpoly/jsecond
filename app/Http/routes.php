<?php

use App\Auth\AuthController;
use App\Auth\PasswordController;
use App\Admin\PostsController;
use App\PagesController;
use App\Post;
Route::get('/', function () {
    return view('home');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('admin/posts', 'Admin\\PostsController');
Route::resource('admin', 'Admin\PostsController');

Route::get('/hello','PagesController@he');
Route::group(['prefix' => 'api', 'namespace' => 'Api'], function () {
    Route::get('posts', 'PostsController@index');
Route::resource('home', 'Post@');    
});
Route::get('/','PagesController@index');

Route::resource('/posts/{slug}', 'PagesController@showposts');    