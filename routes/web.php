<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Models\User;
use App\Models\Post;
Route::get('hello','HelloController@index');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('starter', function () {
    $posts = factory(Post::class, 10)
        ->make()
        ->toArray();
        return view('starter', [
            'posts' => $posts
        ]);
});