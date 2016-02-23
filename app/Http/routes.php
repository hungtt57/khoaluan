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
	return view('frontend.pages.home');
});
Route::get('/category', function () {
    return view('frontend.pages.category');
});
Route::get('/product', function () {
    return view('frontend.pages.product');
});



Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'category'], function() {
        Route::get('/create','CategoryController@create');
		Route::post('/create','CategoryController@store');
		Route::get('/list','CategoryController@index');
		Route::get('/{id}/edit','CategoryController@edit');
		Route::post('/{id}/edit','CategoryController@update');
		Route::get('/{id}/delete','CategoryController@destroy');
		Route::get('/','CategoryController@index');
    });

     Route::group(['prefix' => 'website'], function() {
     	Route::get('/create', ['as' => 'website_create', 'uses' => 'WebsiteController@create']);
     	Route::post('/create', ['as' => 'website_store', 'uses' =>  'WebsiteController@store']);
     	Route::get('/list', ['as' => 'website_list', 'uses' =>  'WebsiteController@index']);
     	Route::get('/{id}/edit', ['as' => 'website_edit', 'uses' =>  'WebsiteController@edit']);
     	Route::post('/{id}/edit', ['as' => 'website_update', 'uses' =>  'WebsiteController@update']);
     	Route::get('/{id}/delete', ['as' => 'website_destroy', 'uses' =>  'WebsiteController@destroy']);
     	Route::get('/', 'WebsiteController@index');
     });

     Route::group(['prefix' => 'user'], function() {
        Route::get('/create', ['as' => 'user_create', 'uses' => 'UserController@create']);
        Route::post('/create', ['as' => 'user_store', 'uses' =>  'UserController@store']);
        Route::get('/list', ['as' => 'user_list', 'uses' =>  'UserController@index']);
        Route::get('/{id}/edit', ['as' => 'user_edit', 'uses' =>  'UserController@edit']);
        Route::post('/{id}/edit', ['as' => 'user_update', 'uses' =>  'UserController@update']);
        Route::get('/{id}/delete', ['as' => 'user_destroy', 'uses' =>  'UserController@destroy']);
        Route::get('/', 'UserController@index');
     });
});