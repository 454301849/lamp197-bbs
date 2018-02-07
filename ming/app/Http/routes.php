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

Route::group(['prefix' => 'home'], function(){
	// 个人中心
	Route::resource('/geren', 'home\Gerencontroller');
	// 我回复的帖子消息
	Route::get('/reply', 'home\Replycontroller@reply');
	// 我发帖的消息
	Route::get('/release', 'home\Releasecontroller@release');
});
