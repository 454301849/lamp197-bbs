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




//设置路由前缀
Route::group(['prefix' => 'admin'], function () {
	//设置后台主页
	Route::get('/', 'admin\indexController@index');
	//设置后台用户资源路由
    Route::resource('/user_admin' ,'admin\User_AdminController');
    //设置前台用户资源路由
    Route::resource('/user' ,'admin\UserController');
});