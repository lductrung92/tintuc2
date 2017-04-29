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

Route::get('administrator/login', ['as' => 'getLogin', 'uses' => 'Admin\CheckUserController@getLogin']);
Route::get('administrator/logout', ['as' => 'getLogout', 'uses' => 'Admin\CheckUserController@getLogout']);
Route::post('administrator/login', ['as' => 'postLogin', 'uses' => 'Admin\CheckUserController@postLogin']);

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

    Route::group(['prefix' => 'article'], function () {
        Route::get('list', ['as' => 'getListArticle', 'uses' => 'Admin\ArticleController@getList']);
        Route::get('insert', ['as' => 'getInsertArticle', 'uses' => 'Admin\ArticleController@getInsert']);
        Route::post('insert', ['as' => 'postInsertArticle', 'uses' => 'Admin\ArticleController@postInsert']);
        Route::get('update/{id}', ['as' => 'getUpdateArticle', 'uses' => 'Admin\ArticleController@getUpdate']);
        Route::post('update/{id}', ['as' => 'postUpdateArticle', 'uses' => 'Admin\ArticleController@postUpdate']);
        Route::get('delete/{id}', ['as' => 'getDeleteArticle', 'uses' => 'Admin\ArticleController@getDelete']);
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('list', ['as' => 'getListUser', 'uses' => 'Admin\UserController@getList']);
        Route::get('insert', ['as' => 'getInsertUser', 'uses' => 'Admin\UserController@getInsert']);
        Route::post('insert', ['as' => 'postInsertUser', 'uses' => 'Admin\UserController@postInsert']);
        Route::get('update/{id}', ['as' => 'getUpdateUser', 'uses' => 'Admin\UserController@getUpdate']);
        Route::post('update/{id}', ['as' => 'postUpdateUser', 'uses' => 'Admin\UserController@postUpdate']);
        Route::get('delete/{id}', ['as' => 'getDeleteUser', 'uses' => 'Admin\UserController@getDelete']);
    });

});