<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;

/**
 * Description of RolesController
 *
 * @author dell
 */
class RolesController extends CController{
    
    /**
     * 角色管理页面
     */
    public function roleView(){
        return view('Backend.manage.role-view');
    }
    
    /**
     * 获取角色列表数据
     * @param \Illuminate\Http\Request $request
     */
    public function getRoleList(Request $request){
        
    }
    
    /**
     * 添加角色数据
     * @param \Illuminate\Http\Request $request
     */
    public function addRole(Request $request){
        
    }
    
    /**
     * 更新角色信息
     * @param \Illuminate\Http\Request $request
     */
    public function updateRole(Request $request){
        
    }
    
    /**
     * 删除角色信息
     * @param \Illuminate\Http\Request $request
     */
    public function deleteRole(Request $request){
        
    }
}
