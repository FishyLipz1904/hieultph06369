<?php

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use Faker\Generator as Faker;
use Illuminate\Http\Request;

Route::group([
    
    
], function () {
    Route::get('/','UserController@index')->name('website.index');
});
Route::group([
    'prefix' => 'admin',
    'middleware' => 'check_admin_role',
], function () {
    Route::get('/','admin\WebsiteController@index')->name('index');
});
Route::group([
    
], function () {
    Route::get('login','AuthController@getLoginForm')->name('auth.login-form');
Route::post('login','AuthController@login')->name('auth.login');
Route::post('logout','AuthController@logout')->name('auth.logout');
Route::get('register','AuthController@getRegisterForm')->name('auth.register');
Route::post('save','AuthController@register')->name('auth.save');
});

Route::group([
    'prefix' => 'users',
    'middleware' =>'check_admin_role'
], function () {
    Route::get('/','admin\UserController@index')->name('users.index');
    Route::get('/create','admin\UserController@create')->name('users.create');
    Route::get('/{id}','admin\UserController@show')->name('users.show');
    Route::post('/store','admin\UserController@store')->name('users.store'); //store lưu dữ liệu
    Route::post('/update','admin\UserController@update')->name('users.update'); //update để save
    Route::get('/edit/{id}','admin\UserController@edit')->name('users.edit'); //edit để show form
    Route::post('/delete/{id}','admin\UserController@destroy')->name('users.delete');
});
Route::group([
    'prefix' => 'posts',
    'middleware' => 'check_admin_role',
    
], function () {
    Route::get('/','admin\PostController@index')->name('posts.index');
    Route::get('/create','admin\PostController@create')->name('posts.create');
    Route::get('/{id}','admin\PostController@show')->name('posts.show');
    Route::post('/store','admin\PostController@store')->name('posts.store'); //store lưu dữ liệu
    Route::post('/update','admin\PostController@update')->name('posts.update'); //update để save
    Route::get('/edit/{id}','admin\PostController@edit')->name('posts.edit'); //edit để show form
    Route::post('/delete/{id}','admin\PostController@destroy')->name('posts.delete');
});
Route::group([
    'prefix' => 'categories',
    'middleware' => 'check_admin_role',

    
], function () {
    Route::get('/','admin\CategoryController@index')->name('categories.index');
    Route::get('/create','admin\CategoryController@create')->name('categories.create');
    Route::get('/{id}','admin\CategoryController@show')->name('categories.show');
    Route::post('/store','admin\CategoryController@store')->name('categories.store'); //store lưu dữ liệu
    Route::post('/update','admin\CategoryController@update')->name('categories.update'); //update để save
    Route::get('/edit/{id}','admin\CategoryController@edit')->name('categories.edit'); //edit để show form
    Route::post('/delete/{id}','admin\CategoryController@destroy')->name('categories.delete');
});
Route::group([
    'prefix' => 'comments',
    'middleware' => 'check_admin_role',

], function () {
    Route::get('/','admin\CommentController@index')->name('comments.index');
    Route::get('/create','admin\CommentController@create')->name('comments.create');
    Route::get('/{id}','admin\CommentController@show')->name('comments.show');
    Route::post('/store','admin\CommentController@store')->name('comments.store'); //store lưu dữ liệu
    Route::post('/update','admin\CommentController@update')->name('comments.update'); //update để save
    Route::get('/edit/{id}','admin\CommentController@edit')->name('comments.edit'); //edit để show form
    Route::post('/delete/{id}','admin\CommentController@destroy')->name('comments.delete');
});
Route::group([
    'prefix' => 'blogs',
    'middleware' => 'check_admin_role',

], function () {
    Route::get('/','admin\BlogController@index')->name('blogs.index');
    Route::get('/create','admin\BlogController@create')->name('blogs.create');
    Route::post('/store','admin\BlogController@store')->name('blogs.store');
    Route::post('/delete/{id}','admin\BlogController@destroy')->name('blogs.delete');
    Route::post('/update','admin\BlogController@update')->name('blogs.update');
    Route::get('/edit/{id}','admin\BlogController@edit')->name('blogs.edit');
});
//feedback, blogs
Route::post('/store','admin\ContactController@store')->name('contact.store'); //store lưu dữ liệu
Route::group([
    'prefix' => 'contacts',
    'middleware' => 'check_admin_role',

], function () {
    Route::get('/','admin\ContactController@index')->name('contacts.index');
    Route::post('/contacts/{id}','admin\ContactController@destroy')->name('contacts.delete');
});
Route::group([
    'prefix' => 'settings',
    'middleware' => 'check_admin_role',

], function () {
    Route::get('/','admin\SettingController@index')->name('settings.index');
    // Route::post('/contacts/{id}','admin\SettingController@destroy')->name('contacts.delete');
});

