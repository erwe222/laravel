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
    Route::get('/', 'IndexController@index')->name('f_index_index');
    Route::get('index/test', 'IndexController@test')->name('f_index_test');
});

//后台路由配置
Route::group(['prefix' => 'backend','namespace' => 'backend','middleware' => ['authmanage']], function()
{
    //Index 控制器路由配置
    Route::get('/', 'IndexController@main')->name('b_index_main');
    Route::get('index/index', 'IndexController@index')->name('b_index_index');
    
    
    //Auth    控制器路由配置
    Route::get('auth/login', 'AuthController@login')->name('b_auth_tologin');
    Route::post('auth/ptlogin', 'AuthController@ptlogin')->name('b_auth_ptlogin');
    Route::get('auth/logout', 'AuthController@logout')->name('b_auth_logout');
    Route::get('auth/code', function(){
        return json_encode(['img_url'=>Captcha::src()]);
    })->name('b_auth_code');
    
    //Menus 控制器路由配置 导航栏目
    Route::get('/menus/menuview', 'MenusController@menuview')->name('b_menus_menuview');
    Route::get('/menus/menuviewtest', 'MenusController@menuviewtest')->name('b_menus_menuviewtest');
    Route::get('/menus/getmenutreelist', 'MenusController@getmenutreelist')->name('b_menus_getmenutreelist');
    Route::get('/menus/getmenuviewtest', 'MenusController@getmenuviewtest')->name('b_menus_getmenuviewtest');
    Route::get('/menus/menuviewtest2', 'MenusController@menuviewtest2')->name('b_menus_menuviewtest2');
    Route::get('/menus/getmenuviewtest2', 'MenusController@getmenuviewtest2')->name('b_menus_getmenuviewtest2');
    
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
    
    
    //调试控制器路由
    Route::get('/test/index', 'TestController@index')->name('b_test_index');
});