<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Model\Roles;

/**
 * Description of RolesController
 *
 * @author dell
 */
class RolesController extends CController{
    
    private $rolesModel = null;
    
    public function __construct() {
        parent::__construct();
        $this->rolesModel = new Roles();
    }
    
    /**
     * 角色管理页面
     */
    public function roleView(){
        return view('backend.roles.role-view');
    }
    
    /**
     * 获取角色列表数据
     * @param \Illuminate\Http\Request $request
     */
    public function getRolesList(Request $request){
        $data = [];
        $draw = $request->input('draw',1);
        $role_name = $request->input('role_name','');
        $role_status = $request->input('role_status','');
        if(!empty($role_name)){
            $data['name'] = addslashes($role_name);
        }
        if(!empty($role_status)){
            $data['status'] = $role_status;
        }
        
        $data['pageindex'] = 1;
        $data['pagesize'] = 20;
        $lists = $this->rolesModel->findRolesList($data);
        return response()->json([
            'draw'=>$draw,
            'recordsTotal'=>$lists['total'],
            'recordsFiltered'=>$lists['filteredTotal'],
            'data'=>$lists['data']
        ]);
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
