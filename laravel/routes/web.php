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
    
    //Admin 控制器路由配置
    Route::get('/admin/profile', 'AdminController@profile')->name('b_admin_profile');
    Route::get('/admin/changepwd', 'AdminController@changepwd')->name('b_admin_changepwd');
    
    
    //Auth    控制器路由配置
    Route::get('auth/login', 'AuthController@login')->name('b_auth_tologin');
    Route::post('auth/ptlogin', 'AuthController@ptlogin')->name('b_auth_ptlogin');
    Route::get('auth/logout', 'AuthController@logout')->name('b_auth_logout');
    Route::get('auth/code', function(){
        return json_encode(['img_url'=>Captcha::src()]);
    })->name('b_auth_code');
    Route::get('auth/sendemail', 'AuthController@sendemail')->name('b_auth_sendemail');
    Route::get('auth/checkemail', 'AuthController@checkemail')->name('b_auth_checkemail');
    
    
    
    //Menus 控制器路由配置 导航栏目
    Route::get('/menus/menuview', 'MenusController@menuview')->name('b_menus_menuview');
    Route::get('/menus/getmenutreelist', 'MenusController@getmenutreelist')->name('b_menus_getmenutreelist');
    Route::get('/menus/getmenulist', 'MenusController@getmenulist')->name('b_menus_getmenulist');
    Route::post('/menus/addmenu', 'MenusController@addmenu')->name('b_menus_addmenu');
    Route::post('/menus/updatemenu', 'MenusController@updatemenu')->name('b_menus_updatemenu');
    
    //Roles 控制器路由配置 角色管理
    Route::get('/roles/roleview', 'RolesController@roleview')->name('b_role_menuview');
    Route::get('/roles/getroleslist', 'RolesController@getroleslist')->name('b_role_getroleslist');
    Route::post('/roles/addrole', 'RolesController@addrole')->name('b_role_addrole');
    Route::post('/roles/updaterole', 'RolesController@updaterole')->name('b_role_updaterole');
    Route::post('/roles/deleterole', 'RolesController@deleterole')->name('b_role_deleterole');
    Route::get('/roles/rolepermissionsview', 'RolesController@rolepermissionsview')->name('b_role_rolepermissionsview');
    Route::post('/roles/updaterolepermissions', 'RolesController@updaterolepermissions')->name('b_role_updaterolepermissions');
    
    //Permissions 控制器路由配置 权限管理
    Route::get('/permissions/permissionsview', 'PermissionsController@permissionsview')->name('b_permissions_permissionsview');
    Route::get('/permissions/getpermissionslist', 'PermissionsController@getpermissionslist')->name('b_permissions_getpermissionslist');
    Route::post('/permissions/addpermissions', 'PermissionsController@addpermissions')->name('b_permissions_addpermissions');
    Route::post('/permissions/updatepermissions', 'PermissionsController@updatepermissions')->name('b_permissions_updatepermissions');
    Route::post('/permissions/deletepermissions', 'PermissionsController@deletepermissions')->name('b_permissions_deletepermissions');
    Route::get('/permissions/getmodulename', 'PermissionsController@getmodulename')->name('b_permissions_getmodulename');
    
    
    //FileManage 控制器路由配置 文件管理
    Route::get('/filemanage/index', 'FileManageController@index')->name('b_filemanage_index');
    Route::get('/filemanage/getlogfilelist', 'FileManageController@getlogfilelist')->name('b_filemanage_getlogfilelist');
    Route::get('/filemanage/readlogfile', 'FileManageController@readlogfile')->name('b_filemanage_readlogfile');
    Route::get('/filemanage/deletelogfile', 'FileManageController@deletelogfile')->name('b_filemanage_deletelogfile');
    Route::get('/filemanage/downloadlogfile', 'FileManageController@downloadlogfile')->name('b_filemanage_downloadlogfile');
    
    //System 控制器路由配置 系统设置
    Route::get('/system/index', 'SystemController@index')->name('b_system_index');
    Route::get('/system/clearviewcache', 'SystemController@clearviewcache')->name('b_system_clearviewcache');
    
    
    //调试控制器路由
    Route::get('/test/index', 'TestController@index')->name('b_test_index');
    Route::get('/test/easyuitable', 'TestController@easyuitable')->name('b_test_easyuitable');
    Route::get('/test/easyuitablelist', 'TestController@easyuitablelist')->name('b_test_easyuitablelist');
    
    Route::get('/test/datatables', 'TestController@datatables')->name('b_test_datatables');
    Route::get('/test/datatableslist', 'TestController@datatableslist')->name('b_test_datatableslist');
    
    Route::get('/test/jqgridtables', 'TestController@jqgridtables')->name('b_test_jqgridtables');
    Route::get('/test/jqgridtableslist', 'TestController@jqgridtableslist')->name('b_test_jqgridtableslist');
    
    Route::get('/test/test2', 'TestController@test2')->name('b_test_test2');
    Route::get('/test/test', 'TestController@test')->name('b_test_test');
});