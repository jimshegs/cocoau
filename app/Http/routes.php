<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@home');

Route::get('/home', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('contact', 'ContactController@showForm');

Route::post('contact', 'ContactController@sendContactInfo');

Route::get('/index', 'PagesController@index');

Route::get('/gallery', 'PagesController@gallery');

Route::get('/sermons', 'PagesController@sermons');

Route::get('/donate', 'DonateController@donate');

Route::post('/donate', 'DonateController@pay');

Route::get('/stewards', 'Admin\StewardController@stewards');

Route::get('/steward/{name?}', 'Admin\StewardController@show');

Route::get('/blog', 'BlogController@index');

Route::get('/blog/{slug?}', 'BlogController@show');

Route::post('/comment', 'CommentsController@newComment');

Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager'), function() {
	Route::get('/users', ['as' => 'admin.user.index', 'uses' => 'UsersController@index']);
	Route::get('roles', 'RolesController@index');
	Route::get('roles/create', 'RolesController@create');
	Route::post('roles/create', 'RolesController@store');
	Route::get('users/{id?}/edit', 'UsersController@edit');
	Route::post('users/{id?}/edit', 'UsersController@update');
	Route::get('/', 'PagesController@home');
	Route::resource('steward', 'StewardController', ['except' => 'show']);
	Route::resource('post', 'PostsController', ['except' => 'show']);
	Route::get('categories', 'CategoriesController@index');
	Route::get('categories/create', 'CategoriesController@create');
	Route::post('categories/create', 'CategoriesController@store');
	Route::get('upload', 'UploadController@index');
	Route::post('upload/file', 'UploadController@uploadFile');
	Route::delete('upload/file', 'UploadController@deleteFile');
	Route::post('upload/folder', 'UploadController@createFolder');
	Route::delete('upload/folder', 'UploadController@deleteFolder');
	Route::resource('tag', 'TagController', ['except' => 'show']);
	Route::get('message', 'MessageController@index');
	Route::get('message/{id?}/viewmessage', 'MessageController@show');
	Route::get('message/{id?}', 'MessageController@reply');
	Route::post('message/{id?}', 'MessageController@sendMessage');
	
	



});

Route::auth();

//Route::get('/home', 'HomeController@index');
