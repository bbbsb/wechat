<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function(){
   return view('welcome');
});
Route::any('/wechat', "WechatController@index");

Route::get('test', function(){
   return 'test';
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/home/createArticle', "HomeController@createArticle");
Route::post('/home/createArticleHandler', 'HomeController@createArticleHandler');
Route::get('/home/articleList', 'HomeController@articleList');

