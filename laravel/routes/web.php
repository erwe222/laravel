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

Route::group(['namespace' => 'Auth'], function()
{
    Route::post('login/postLogin', 'LoginController@postLogin');#  //echo route('test.index');
    
    Route::get('login/logout', 'LoginController@logout');
});

Route::group(['namespace' => 'Index','middleware' => ['authmanage']], function()
{
    Route::get('/', 'IndexController@main');
    Route::get('index/test', 'IndexController@test');
    Route::get('index/index', 'IndexController@index');
    Route::get('index/getMenuData', 'IndexController@getMenuData');#  //echo route('test.index');
});

Route::group(['namespace' => 'Admin','middleware' => ['authmanage']], function()
{
    Route::get('admin/menuview', 'AdminController@menuview');
    Route::get('admin/getmenuslistdata', 'AdminController@getmenuslistdata');
    Route::get('admin/getmenuslistdata2', 'AdminController@getmenuslistdata2');
    Route::get('admin/menuviewtest', 'AdminController@menuviewtest');
    Route::get('admin/menuviewtest2', 'AdminController@menuviewtest2');
    Route::get('admin/profile', 'AdminController@profile');
    Route::get('admin/roleview', 'AdminController@roleview');
    
    Route::get('admin/getmenutreelist', 'AdminController@getmenutreelist');
    
    
});

Route::group(['namespace' => 'Wachat','middleware' => ['authmanage']], function()
{
    Route::get('wachat/menu', 'WachatController@menu');#  //echo route('test.index');
});

Route::group(['namespace' => 'Test'], function()
{
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
    Route::get('test/index', 'TestController@index')->name('test.index');#  //echo route('test.index');
    Route::get('test/test', 'TestController@test')->name('test.test');
});

Auth::routes();

Route::get('test/code', function(){
    $img_url = Captcha::src();
    return json_encode(['img_url'=>$img_url]);
});
