<?php

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use Faker\Generator as Faker;
use Illuminate\Http\Request;

Route::group([
    'prefix' => 'users',
    'middleware' => 'check_admin_role',
    
    
], function () {
    Route::get('/','UserController@index')->name('users.index');
    Route::get('/create','UserController@create')->name('users.create');
    Route::get('/{id}','UserController@show')->name('users.show');
    Route::post('/store','UserController@store')->name('users.store'); //store lưu dữ liệu
    Route::post('/update','UserController@update')->name('users.update'); //update để save
    Route::get('/edit/{id}','UserController@edit')->name('users.edit'); //edit để show form
    Route::post('/delete/{id}','UserController@destroy')->name('users.delete');
});
Route::group([
    'prefix' => 'posts',
    'middleware' => 'check_admin_role',
    
], function () {
    Route::get('/','PostController@index')->name('posts.index');
    Route::get('/create','PostController@create')->name('posts.create');
    Route::get('/{id}','PostController@show')->name('posts.show');
    Route::post('/store','PostController@store')->name('posts.store'); //store lưu dữ liệu
    Route::post('/update','PostController@update')->name('posts.update'); //update để save
    Route::get('/edit/{id}','PostController@edit')->name('posts.edit'); //edit để show form
    Route::post('/delete/{id}','PostController@destroy')->name('posts.delete');
});
Route::group([
    'prefix' => 'categories',
    'middleware' => 'check_admin_role',
    
], function () {
    Route::get('/','CategoryController@index')->name('categories.index');
    Route::get('/create','CategoryController@create')->name('categories.create');
    Route::get('/{id}','CategoryController@show')->name('categories.show');
    Route::post('/store','CategoryController@store')->name('categories.store'); //store lưu dữ liệu
    Route::post('/update','CategoryController@update')->name('categories.update'); //update để save
    Route::get('/edit/{id}','CategoryController@edit')->name('categories.edit'); //edit để show form
    Route::post('/delete/{id}','CategoryController@destroy')->name('categories.delete');
});
Route::group([
    'prefix' => 'comments',
    'middleware' => 'check_admin_role',
], function () {
    Route::get('/','CommentController@index')->name('comments.index');
    Route::get('/create','CommentController@create')->name('comments.create');
    Route::get('/{id}','CommentController@show')->name('comments.show');
    Route::post('/store','CommentController@store')->name('comments.store'); //store lưu dữ liệu
    Route::post('/update','CommentController@update')->name('comments.update'); //update để save
    Route::get('/edit/{id}','CommentController@edit')->name('comments.edit'); //edit để show form
    Route::post('/delete/{id}','CommentController@destroy')->name('comments.delete');
});
Route::get('login','AuthController@getLoginForm')->name('auth.login-form');
Route::post('login','AuthController@login')->name('auth.login');
Route::post('logout','AuthController@logout')->name('auth.logout');
Route::get('register','AuthController@getRegisterForm')->name('auth.register');
Route::post('save','AuthController@register')->name('auth.save');

Route::group([
    'prefix' => 'general',
], function () {
    Route::get('/','GeneralController@index')->name('general.index')->middleware('check_user_status');
    Route::get('/detail/{id}','GeneralController@show')->name('general.show');
    Route::post('/store','CommentController@store')->name('comments.store');
    Route::get('/posts','GeneralController@posts')->name('general.posts');
});
