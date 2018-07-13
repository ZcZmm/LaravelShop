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

// 首先设置路由Route::传递类型(‘访问的url’，‘控制器@方法’);

Route::get('/','AdminUsersController@login')->name('login');
