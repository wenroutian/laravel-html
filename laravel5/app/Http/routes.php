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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('article', 'ArticleController');
//得到两个参数的时候进行确认对应的文章的评论的路由
Route::resource('article.comments','ArticleController');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::resource('post', 'PostController');
Route::get('blade', function () {
    return view('test.child');
});