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

Route::group(['prefix' => 'administrator'], function () {
    Route::get('index', 'AdminController@index');

    Route::group(['prefix' => 'category'], function () {
       Route::get('list', ['as' => 'getListCate', 'uses' => 'Admin\CategoryController@getList']);
       Route::get('insert', ['as' => 'getInsertCate', 'uses' => 'Admin\CategoryController@getInsert']);
       Route::post('insert', ['as' => 'postInsertCate', 'uses' => 'Admin\CategoryController@postInsert']);
       Route::get('update/{id}', ['as' => 'getUpdateCate', 'uses' => 'Admin\CategoryController@getUpdate']);
       Route::post('update/{id}', ['as' => 'postUpdateCate', 'uses' => 'Admin\CategoryController@postUpdate']);
       Route::get('delete/{id}', ['as' => 'getDeleteCate', 'uses' => 'Admin\CategoryController@getDelete']);
    });

});