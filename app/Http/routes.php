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
//front end

Route::get('/thanh-toan', function () {
    return view('frontend.pages.checkout'); // thanh toan
});
Route::get('/tim-kiem','HomeController@timkiem');
Route::post('xoaspcart','HomeController@xoaspcart');
Route::post('capnhatcart','HomeController@capnhatcart');


Route::get('/','HomeController@index');
Route::get('/home','HomeController@index');
Route::get('/loai-san-pham/{tenloai}','HomeController@loaisanpham');
Route::get('/chi-tiet-san-pham/{tenloai}','HomeController@chitietsanpham');
Route::post('/mua-hang/{id}/{tenhang}','HomeController@muahang');
Route::get('/gio-hang','HomeController@giohang');
Route::get('/xoasanpham/{id}','HomeController@xoasanpham');
Route::get('capnhatgiohang/{id}/{qty}','HomeController@capnhatgiohang');
Route::post('/thanh-toan','HomeController@thanhtoan');
Route::get('/tin-tuc','HomeController@blog');
Route::get('/bai-viet/{ten}','HomeController@blog_detail');
Route::get('/gioi-thieu','HomeController@about');
Route::get('/lien-he','HomeController@contact');
Route::get('/admin/visit_user','AdminController@visit_user');

// end frontend
//admin
Route::get('auth/logout', 'Auth\AuthController@getLogout')->after('invalidate-browser-cache');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
  Route::group(['middleware' => 'auth'], function () {
        Route::group(['prefix' => 'admin'], function () {
            Route::group(['prefix' => 'category'], function() { // category
                Route::get('/create','CategoryController@create');
                Route::post('/create','CategoryController@store');
                Route::get('/list','CategoryController@index');
                Route::get('/{id}/edit','CategoryController@edit');
                Route::post('/{id}/edit','CategoryController@update');
                Route::get('/{id}/delete','CategoryController@destroy');
                Route::get('/','CategoryController@index');
            });
            Route::get('/dashboard','AdminController@index'); // admin dashboard
            Route::get('/','AdminController@index');
             Route::group(['prefix' => 'user'], function() {
                Route::get('/create', ['as' => 'user_create', 'uses' => 'UserController@create']);
                Route::post('/create', ['as' => 'user_store', 'uses' =>  'UserController@store']);
                Route::get('/list', ['as' => 'user_list', 'uses' =>  'UserController@index']);
                Route::get('/{id}/edit', ['as' => 'user_edit', 'uses' =>  'UserController@edit']);
                Route::post('/{id}/edit', ['as' => 'user_update', 'uses' =>  'UserController@update']);
                Route::get('/{id}/delete', ['as' => 'user_destroy', 'uses' =>  'UserController@destroy']);
                Route::get('/', 'UserController@index');
             });
             Route::group(['prefix' => 'product'],function(){
                Route::get('/','ProductController@index');
              
                Route::get('/create','ProductController@create');
                Route::post('/create','ProductController@store');
                Route::get('/{id}/show','ProductController@show');
                Route::get('/{id}/edit','ProductController@edit');
                Route::post('/{id}/edit','ProductController@update');
                Route::get('/{id}/delete','ProductController@destroy');
             });
              Route::group(['prefix' => 'blog'],function(){
                Route::get('/','BlogController@index');
                
                Route::get('/create','BlogController@create');
                Route::post('/create','BlogController@store');
                Route::get('/{id}/show','BlogController@show');
                Route::get('/{id}/edit','BlogController@edit');
                Route::post('/{id}/edit','BlogController@update');
                Route::get('/{id}/delete','BlogController@destroy');
             });
              Route::group(['prefix' => 'order'],function(){
                  Route::get('/','OrderController@index');
                  Route::get('/list','OrderController@index');
                  Route::get('/{id}/delete','OrderController@destroy');
                   Route::get('/{id}/edit','OrderController@edit');
                  Route::post('/{id}/edit','OrderController@update');
                  Route::get('/capnhat_order_detail','OrderController@capnhat_order_detail');
                   Route::get('/xoa_order_detail','OrderController@xoa_order_detail');
                  Route::get('/{id}/show','OrderController@show');
              });
        });
});