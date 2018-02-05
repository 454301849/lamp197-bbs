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

// Route::get('/', function () {
//     return view('home/index');
// });
  
    //前台根路由
Route::get('/', 'Homes\IndexController@index');
    //前台帖子详情路由
Route::get('/post/{id}', 'Homes\PostController@show');
    //分类表详情
Route::get('/classm/{id}', 'Homes\ClassmController@list');
    //板块列表
Route::get('/plate/{id}', 'Homes\PlateController@list');
    //发帖,这里需要是一个资源路由
Route::get('/posting', 'Homes\PostingController@index');