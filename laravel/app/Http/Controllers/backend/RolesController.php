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
        $params = $this->queryDatatableParams($request);
        $data = [];
        if(isset($params['search']['role_name']) && !empty($params['search']['role_name'])){
            $data['name'] = addslashes($params['search']['role_name']);
        }
        
        if(isset($params['search']['status'])){
            $data['status'] = $params['search']['status'];
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
