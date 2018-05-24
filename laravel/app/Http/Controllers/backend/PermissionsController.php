<?php
namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;

/**
 * Description of PermissionsController
 *
 * @author dell
 */
class PermissionsController extends CController{
   
    /**
     * 权限管理页面
     */
    public function permissionsView(){
        return view('Backend.permissions.permissions-view');
    }
    
    /**
     * 获取权限列表数据
     * @param \Illuminate\Http\Request $request
     */
    public function getPermissionsList(Request $request){
        
    }
    
    /**
     * 添加权限数据
     * @param \Illuminate\Http\Request $request
     */
    public function addPermissions(Request $request){
        
    }
    
    /**
     * 更新权限信息
     * @param \Illuminate\Http\Request $request
     */
    public function updatePermissions(Request $request){
        
    }
    
    /**
     * 删除权限信息
     * @param \Illuminate\Http\Request $request
     */
    public function deletePermissions(Request $request){
        
    }
}
