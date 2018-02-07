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
Route::get('/', 'Home\IndexController@index');
    //前台帖子详情路由
Route::get('/post/{id}', 'Home\PostController@show');
    //分类表详情
Route::get('/classm/{id}', 'Home\ClassmController@list');
    //板块列表
Route::get('/plate/{id}', 'Home\PlateController@list');
    //发帖,这里需要是一个资源路由
Route::get('/posting', 'Home\PostingController@index');
    //登录的路由
Route::get('/login', 'Home\LoginController@index');



Route::group(['prefix' => 'home'], function(){
	// 个人中心
	Route::resource('/geren', 'home\Gerencontroller');
	// 我回复的帖子消息
	Route::get('/reply', 'home\Replycontroller@reply');
	// 我发帖的消息
	Route::get('/release', 'home\Releasecontroller@release');
});


//-------------------------------------------------------------------------------
//后台登陆
Route::group(['prefix'=>'admin', 'namespace'=>'admin'],function () {
    Route::match(['get','post'], '/login', 'LoginController@login');
});


//设置路由前缀
Route::group(['prefix' => 'admin', 'namespace'=>'admin'], function () {

    //后台登录路由
    Route::get('/login', 'LoginController@index');
	//设置后台主页
	Route::get('/index', 'indexController@index');
    //设置前台用户资源路由
    Route::resource('/user' ,'UserController');
	//设置后台用户资源路由
    Route::resource('/user_admin' ,'User_AdminController');

    //后台类别
    Route::resource('/class' ,'ClassController');
    //后台模块
    Route::resource('/plate' ,'PlateController');
    //后台帖子
    Route::resource('/posts' ,'PostsController');
	//后台恢复
    Route::resource('/reply' ,'ReplyController');//报错求老师指点！！！
	//投诉详情
    Route::resource('/complain' ,'ComplainController');
	//投诉处理
    Route::resource('/problem' ,'ProblemController');
});
