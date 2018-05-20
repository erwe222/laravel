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
    Route::get('test/vueapi', 'TestController@vueapi')->name('test.vueapi');
    Route::get('test/test', 'TestController@test')->name('test.test');
    Route::get('test/test2', 'TestController@test2')->name('test.test2');
    Route::get('test/testfunction', 'TestController@testfunction')->name('test.testfunction');
});


//前台路由配置
Route::group(['prefix' => 'Front','namespace' => 'Front'], function()
{
    Route::get('index/test', 'IndexController@test')->name('f_index_test');
});

//后台路由配置
Route::group(['prefix' => 'Backend','namespace' => 'Backend'], function()
{
    //Index 控制器路由配置
    Route::get('/', 'IndexController@main')->name('f_index_main');
    Route::get('index/index', 'IndexController@index')->name('f_index_index');
    
    //Admin   控制器路由配置
    
    
    //Auth    控制器路由配置
    Route::get('auth/login', 'AuthController@login')->name('f_auth_index');
    Route::post('auth/ptlogin', 'AuthController@ptlogin')->name('f_auth_ptlogin');
    Route::get('auth/logout', 'AuthController@logout')->name('f_auth_logout');
    Route::get('auth/code', function(){
        return json_encode(['img_url'=>Captcha::src()]);
    })->name('f_auth_code');
    
    //Menus 控制器路由配置 导航栏目
    Route::get('/menus/menuview', 'MenusController@menuview')->name('b_menus_menuview');
    Route::get('/menus/getmenulist', 'MenusController@getmenulist')->name('b_menus_getmenulist');
    Route::post('/menus/addmenu', 'MenusController@addmenu')->name('b_menus_addmenu');
    Route::post('/menus/updatemenu', 'MenusController@updatemenu')->name('b_menus_updatemenu');
    
    //Roles 控制器路由配置 角色管理
    Route::get('/roles/roleview', 'RolesController@roleview')->name('b_role_menuview');
    Route::get('/roles/getrolelist', 'RolesController@search')->name('b_role_getrolelist');
    Route::post('/roles/addrole', 'RolesController@create')->name('b_role_addrole');
    Route::post('/roles/updaterole', 'RolesController@update')->name('b_role_updaterole');
    Route::post('/roles/deleterole', 'RolesController@delete')->name('b_role_deleterole');

    //Permissions 控制器路由配置 权限管理
    Route::get('/permissions/permissionsview', 'PermissionsController@index')->name('b_permissions_permissionsview');
    Route::get('/permissions/getpermissionslist', 'PermissionsController@search')->name('b_permissions_permissionsview');
    Route::post('/permissions/addpermissions', 'PermissionsController@create')->name('b_permissions_addpermissions');
    Route::post('/permissions/updatepermissions', 'PermissionsController@update')->name('b_permissions_updatepermissions');
    Route::post('/permissions/deletepermissions', 'PermissionsController@delete')->name('b_permissions_deletepermissions');
});

Auth::routes();

Route::get('test/code', function(){
    $img_url = Captcha::src();
    return json_encode(['img_url'=>$img_url]);
});