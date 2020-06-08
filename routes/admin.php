<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/


Route::namespace('Admin')->group(function () {

	// 后台登陆页面
	Route::get('/', 'LoginController@showLoginForm');

	// 登陆
	Route::post('login', 'LoginController@login')->name('admin.login');

	// 首页
	Route::get('index', 'IndexController@index');

});