<?php
namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;
use App\Model\Roles;

/**
 * Description of RolesController
 *
 * @author dell
 */
class RolesController extends CController{
    
    private $rolesModel = null;
    private $rolePermissionsModel = null;


    public function __construct() {
        parent::__construct();
        $this->rolesModel = new Roles();
        $this->permissionsModel = new \App\Model\Permissions();
        $this->rolePermissionsModel = new \App\Model\RolePermissions();
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
        $params = $this->queryDatatableParams($request);
        $data = [];
        if(isset($params['search']['role_name']) && !empty($params['search']['role_name'])){
            $data['name'] = addslashes($params['search']['role_name']);
        }
        
        if(isset($params['search']['status'])){
            $data['status'] = (int)$params['search']['status'];
        }

        if(!empty($params['orderBy']) && !empty($params['sort'])){
            $data['orderBy']    = $params['orderBy'];
            $data['sort']       = $params['sort'];
        }

        $data['offset']     = $params['offset'];
        $data['pagesize']   = $params['pagesize'];
        $lists = $this->rolesModel->findRolesList($data);
        return response()->json([
            'code'=>200,
            'draw'=>$params['draw'],
            'recordsTotal'=>$lists['total'],
            'recordsFiltered'=>$lists['total'],
            'data'=>$lists['data'],
            'page_index'=>$lists['page_index']
        ]);
    }
    
    /**
     * 添加角色数据
     * @param \Illuminate\Http\Request $request
     */
    public function addRole(Request $request){
        $role_name = $request->input('name');
        $role_status = $request->input('status');
        $result = $this->rolesModel->addRole($role_name,$role_status);
        return $this->returnData([], $result['message'], $result['code']);
    }

    /**
     * 更新角色信息
     * @param \Illuminate\Http\Request $request
     */
    public function updateRole(Request $request){
        $role_id = $request->input('id');
        $role_name = $request->input('name');
        $role_status = $request->input('status');
        $result = $this->rolesModel->updateRole($role_id,['name'=>$role_name,'status'=>$role_status]);
        return $this->returnData([], $result['message'], $result['code']);
    }

    /**
     * 删除角色信息
     * @param \Illuminate\Http\Request $request
     */
    public function deleteRole(Request $request){
        $role_id = $request->input('id');
        $result = $this->rolesModel->deleteRole($role_id);
        return $this->returnData([], $result['message'], $result['code']);
    }
    
    /**
     * 查看角色权限页面
     * @param \Illuminate\Http\Request $request
     * @return type
     */
    public function rolePermissionsView(Request $request){
        $role_id = $request->input('id',0);
        $list = $this->permissionsModel->getAllPermissions();
        $list = $this->permissionsModel->getTree($list,0);
        
        $rolePermissionsList = $this->rolePermissionsModel->getRolePermissionsIds($role_id);

        return view('backend.roles.role-permissions')
                ->with('role_id', $role_id)
                ->with('lists', $list)
                ->with('rolePermissionsList', $rolePermissionsList);
    }
    
    /**
     * 更新角色权限
     * @param \Illuminate\Http\Request $request
     */
    public function updateRolePermissions(Request $request){
        $role_id = $request->input('role_id',0);
        $permissions_ids = $request->input('permissions_ids',[]);
        $rolePermissionsList = $this->rolePermissionsModel->updatePermissions($role_id,$permissions_ids);
        return $this->returnData([], $rolePermissionsList['message'], $rolePermissionsList['code']);
    }
}
