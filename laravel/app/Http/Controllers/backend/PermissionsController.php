<?php
namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;

/**
 * Description of PermissionsController
 *
 * @author dell
 */
class PermissionsController extends CController{
   
    public function __construct() {
        parent::__construct();
        
        $this->permissionsModel = new \App\Model\Permissions;
    }
    
    /**
     * 权限管理页面
     */
    public function permissionsView(){
        return view('backend.permissions.permissions-view');
    }
    
    /**
     * 获取权限列表数据
     * @param \Illuminate\Http\Request $request
     */
    public function getPermissionsList(Request $request){
        $params = $this->queryDatatableParams($request);
        $data = [];
        if(isset($params['search']['title']) && !empty($params['search']['title'])){
            $data['title'] = addslashes($params['search']['title']);
        }
        
        if(isset($params['search']['status'])){
            $data['status'] = (int)$params['search']['status'];
        }

        if(!empty($params['orderBy']) && !empty($params['sort'])){
            $data['orderBy']    = $params['orderBy'];
            $data['sort']       = $params['sort'];
        }

        $data['offset']     = (int)$params['offset'];
        $data['pagesize']   = $params['pagesize'];
        $lists = $this->permissionsModel->findPermissionsList($data);
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
     * 添加权限数据
     * @param \Illuminate\Http\Request $request
     */
    public function addPermissions(Request $request){
        $data = [];
        $data['pid']        = (int)$request->input('pid',0);
        $data['type']       = (int)$request->input('type',0);
        $data['status']     = (int)$request->input('pre_status',0);
        $data['title']      = $request->input('title','');
        $data['url']        = $request->input('url','');
        $data['modulename'] = $request->input('modulename','');
        
        $result = $this->permissionsModel->createPermissions($data);
        return $this->returnData([], $result['message'], $result['code']);
    }
    
    /**
     * 更新权限信息
     * @param \Illuminate\Http\Request $request
     */
    public function updatePermissions(Request $request){
        $data = [];
        $data['id']        = (int)$request->input('id',0);
        $data['pid']        = (int)$request->input('pid',0);
        $data['type']       = (int)$request->input('type',0);
        $data['status']     = (int)$request->input('pre_status',0);
        $data['title']      = $request->input('title','');
        $data['url']        = $request->input('url','');
        $data['modulename'] = $request->input('modulename','');
        
        $result = $this->permissionsModel->edit($data);
        return $this->returnData([], $result['message'], $result['code']);
    }
    
    /**
     * 删除权限信息
     * @param \Illuminate\Http\Request $request
     */
    public function deletePermissions(Request $request){
        $id = $request->input('id',0);
        $result = $this->permissionsModel->delPermissions($id);
        if($result){
            return $this->returnData([], '权限删除成功...', 200);
        }else{
            return $this->returnData([], '权限删除失败...', 305);
        }
    }

    /**
     * 获取权限模块名列表
     * @param \Illuminate\Http\Request $request
     */
    public function getModulename(Request $request){
        $lists = $this->permissionsModel->findModulenameList();
        return $this->returnData($lists);
    }
    

}
