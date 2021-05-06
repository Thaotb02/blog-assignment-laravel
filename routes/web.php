<?php

use Illuminate\Support\Facades\Route;
use App\Model\User;
use App\Model\Post;

Route::get('/homepage','PostController@homepage')->name('layout-users.users.index');
Route::get('/single-post/{id}','PostController@singlePost')->name('layout-users.users.single-post');

Route::group([
	'prefix' =>'profile',
	'middleware' =>'CheckAuth',

],function(){

	Route::get('/{id}','UserController@profile')->name('layout-users.users.profile');
	Route::get('/edit/{id}','UserController@editProfile')->name('layout-users.users.edit-profile');
	Route::post('/update/{id}', 'UserController@updateProfile')->name('layout-users.users.update-profile');

});


Route::get('/create-post','PostController@createPost')->name('layout-users.users.create-post');
Route::post('create-post/store','PostController@storePost')->name('layout-users.users.store-post');
Route::get('/show-post/{id}','PostController@showPost')->name('layout-users.users.show-post');
Route::post('/comment/{id}','CommentController@updateComment')->name('layout-users.users.comment');
Route::post('destroy/{post}','PostController@Postdestroy')->name('layout-users.users.post.destroy');
Route::get('edit-post/{id}','PostController@editPost')->name('layout-users.users.edit-post');
Route::post('update-post/{id}', 'PostController@updatePost')->name('layout-users.users.update-post');
//User 
Route::group(['prefix' =>'users','middleware' =>'CheckAuth',],function(){Route::group(['middleware' =>'CheckAdmin',],function(){

			//Hiển thị user ra màn hình
		Route::get('/index','UserController@index')->name('users.index');

		Route::get('show/{id}','UserController@show')->name('users.show');
// Create user 
		Route::get('create','UserController@create')->name('users.create');
//Lưu user vào db
		Route::post('store','UserController@store')->name('users.store');
//Update user 
		Route::get('edit/{id}','UserController@edit')->name('users.edit');
//xử lý form update
		Route::post('update/{id}', 'UserController@update')->name('users.update');
//Xử lý xóa
		Route::post('destroy/{user}','UserController@destroy')->name('users.destroy');
		//inport 



	});


});
		Route::post('/export-csv','UserController@export_csv');
		Route::post('/import-csv','UserController@import_csv');

//Post
Route::group([
	'prefix' =>'posts',
	'middleware' =>'CheckAuth',

],function(){

	Route::group([
		'middleware' =>'CheckAdmin',

	],function(){

		Route::get('/index','PostController@index')->name('posts.index');
		Route::get('create','PostController@create')->name('posts.create');
		Route::post('store','PostController@store')->name('posts.store');
		Route::get('edit/{id}','PostController@edit')->name('posts.edit');
		Route::post('update/{id}', 'PostController@update')->name('posts.update');
		Route::post('destroy/{post}','PostController@destroy')->name('posts.destroy');
	});


});

//Category
Route::group([
	'prefix' =>'category',
	'middleware' =>'CheckAuth',

],function(){

	Route::group([
		'middleware' =>'CheckAdmin',

	],function(){

		Route::get('/index','CategoryController@index')->name('categories.index');
		Route::get('create','CategoryController@create')->name('categories.create');
		Route::post('store','CategoryController@store')->name('categories.store');
		Route::get('edit/{id}','CategoryController@edit')->name('categories.edit');
		Route::post('update/{id}', 'CategoryController@update')->name('categories.update');
		Route::post('destroy/{cate}','CategoryController@destroy')->name('categories.destroy');

	});
});



//Comment
Route::group([
	'prefix' =>'comment',
	'middleware' =>'CheckAuth',

],function(){

	Route::group([
		'middleware' =>'CheckAdmin',

	],function(){
		Route::get('/index','CommentController@index')->name('comments.index');
		Route::get('create','CommentController@create')->name('comments.create');
		Route::post('store','CommentController@store')->name('comments.store');
		Route::get('edit/{id}','CommentController@edit')->name('comments.edit');
		Route::post('update/{id}', 'CommentController@update')->name('comments.update');
		Route::post('destroy/{comment}','CommentController@destroy')->name('comments.destroy');
	});
});


//Login
Route::get('login','AuthController@showLoginForm')->name('auth.showLoginForm');;
Route::post('login','AuthController@login')->name('auth.login');
Route::get('logout','AuthController@logout')->name('logout');


