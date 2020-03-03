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


//1.分类增删改查
Route::prefix('category')->group(function(){
Route::get('create','CategoryController@create');
Route::post('store','CategoryController@store');
Route::get('/','CategoryController@index');
Route::get('edit/{id}','CategoryController@edit');
Route::post('update/{id}','CategoryController@update');
Route::get('destroy/{id}','CategoryController@destroy');
});