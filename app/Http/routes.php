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

Route::get('/',['uses'=>'Index@getIndex']);
Route::Controller('test','Test');

// 欢迎页
Route::Controller('index','indexController');

// 时钟特效
Route::get('/shouye','indexController@shouye');

//前台的主页显示
Route::get('/index','indexController@index');

//后台首页的路由
Route::get('/admin','AdminController@index');

//后台的用户管理
Route::controller('/admin/user','UserController');


