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

Route::get('/', function () {
    return view('welcome');
});
// 管理员的增删改查
Route::prefix('admin')->group(function(){
    Route::get('create','AdminController@create');
    Route::post('store','AdminController@store');
    Route::get('/','AdminController@index');
    Route::get('edit/{id}','AdminController@edit');
    Route::post('update/{id}','AdminController@update');
    Route::get('destroy/{id}','AdminController@destroy');
});
// 登录
Route::get('login/create','LoginController@create');
Route::post('login/store','LoginController@store');