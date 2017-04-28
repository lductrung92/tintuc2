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

    Route::group(['prefix' => 'user'], function () {
        Route::get('list', ['as' => 'getListUser', 'uses' => 'Administrator\UserController@getList']);
        Route::get('insert', ['as' => 'getInsertUser', 'uses' => 'Administrator\UserController@getInsert']);
        Route::post('insert', ['as' => 'postInsertUser', 'uses' => 'Administrator\UserController@postInsert']);
        Route::get('update/{id}', ['as' => 'getUpdateUser', 'uses' => 'Administrator\UserController@getUpdate']);
        Route::post('update/{id}', ['as' => 'postUpdateUser', 'uses' => 'Administrator\UserController@postUpdate']);
        Route::get('delete/{id}', ['as' => 'getDeleteUser', 'uses' => 'Administrator\UserController@getDelete']);
    });

    Route::group(['prefix' => 'category'], function () {
        Route::get('list', ['as' => 'getListCategory', 'uses' => 'Administrator\CategoryController@getList']);
        Route::get('insert', ['as' => 'getInsertCategory', 'uses' => 'Administrator\CategoryController@getInsert']);
        Route::post('insert', ['as' => 'postInsertCategory', 'uses' => 'Administrator\CategoryController@postInsert']);
        Route::get('update/{id}', ['as' => 'getUpdateCategory', 'uses' => 'Administrator\CategoryController@getUpdate']);
        Route::post('update/{id}', ['as' => 'postUpdateCategory', 'uses' => 'Administrator\CategoryController@postUpdate']);
        Route::get('delete/{id}', ['as' => 'getDeleteCategory', 'uses' => 'Administrator\CategoryController@getDelete']);
    });

    Route::group(['prefix' => 'article'], function () {
        Route::get('list', ['as' => 'getListArticle', 'uses' => 'Administrator\ArticleController@getList']);
        Route::get('insert', ['as' => 'getInsertArticle', 'uses' => 'Administrator\ArticleController@getInsert']);
        Route::post('insert', ['as' => 'postInsertArticle', 'uses' => 'Administrator\ArticleController@postInsert']);
        Route::get('update/{id}', ['as' => 'getUpdateArticle', 'uses' => 'Administrator\ArticleController@getUpdate']);
        Route::post('update/{id}', ['as' => 'postUpdateArticle', 'uses' => 'Administrator\ArticleController@postUpdate']);
        Route::get('delete/{id}', ['as' => 'getDeleteArticle', 'uses' => 'Administrator\ArticleController@getDelete']);
    });
});