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
Route::get('/',function(){
    return redirect(route('f_index_index'));
})->name('f_web_index');

//前台路由配置
Route::group(['prefix' => 'front','namespace' => 'front'], function()
{
    Route::match(['get', 'post'],'/', 'IndexController@index')->name('f_index_index');
    Route::get('index/test', 'IndexController@test')->name('f_index_test');
    
    Route::match(['get', 'post'],'wx/auth2', 'WxController@auth2')->name('f_wx_auth2');
});

//微信路由配置
Route::group(['prefix' => 'weixin','namespace' => 'weixin'], function()
{
    
    Route::match(['get', 'post'],'index/message', 'IndexController@message')->name('f_index_message');
    
    Route::get('auth/login', 'AuthController@login')->name('w_auth_login');
    Route::post('auth/postlogin', 'AuthController@postlogin')->name('w_auth_postlogin');
    Route::get('auth/register', 'AuthController@register')->name('w_auth_register');
    Route::post('auth/postregister', 'AuthController@postregister')->name('w_auth_postregister');
    Route::post('auth/sendregistersms', 'AuthController@sendregistersms')->name('w_auth_sendregistersms');
    Route::get('auth/logout', 'AuthController@logout')->name('w_auth_logout');
    Route::get('auth/findpwd', 'AuthController@findpwd')->name('w_auth_findpwd');
    Route::get('auth/postfindpwd', 'AuthController@postfindpwd')->name('w_auth_postfindpwd');



    Route::get('index/index', 'IndexController@index')->name('w_index_index');
    Route::get('index/test', 'IndexController@test')->name('w_index_test');

    Route::get('user/main', 'UserController@main')->name('w_user_main');
    Route::get('user/myset', 'UserController@myset')->name('w_user_myset');
    Route::get('user/myaddress', 'UserController@myaddress')->name('w_user_myaddress');
    Route::get('user/editaddress', 'UserController@editaddress')->name('w_user_editaddress');
    Route::get('user/posteditaddress', 'UserController@posteditaddress')->name('w_user_posteditaddress');
    Route::get('user/modifypwd', 'UserController@modifypwd')->name('w_user_modifypwd');


    Route::get('love/xiajinyan', 'IndexController@test')->name('f_index_xiajinyan');

    Route::get('love/vodio', 'IndexController@vodio')->name('f_index_vodio');
});






//后台路由配置(已分离出独立文件配置)
require(__DIR__.'/admin_routes.php');