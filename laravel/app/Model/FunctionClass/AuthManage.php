<?php
namespace App\Model\FunctionClass;

class AuthManage {

    public  $user_id;
    private $rolesModel;
    private $userRolesModel;
    private $rolePermissionsModel;
    private $rermissionsModel;

    public function __construct($user_id) {
        $this->user_id               = $user_id;
        $this->rolesModel            = new \App\Model\Roles();
        $this->userRolesModel        = new  \App\Model\UserRoles();
        $this->rolePermissionsModel  = new  \App\Model\RolePermissions();
        $this->prermissionsModel     = new  \App\Model\Permissions();
    }
    
    public function verify($path){
        return $this->checkPermissions($path);
    }
    
    /**
     * 验证管理员是否有权限
     */
    public function checkPermissions($path){
        if($this->isJumpCheckUrl($path)){
            return true;
        }
        
        $roles = $this->getUserRole();
        if($roles){
            $getRolePrermissions = $this->getRolePrermissions($roles);
            if(count($getRolePrermissions) == 0){
                return false;
            }
        }
        
        $getPrermissionsList = $this->getPrermissionsList($getRolePrermissions);
        if(count($getPrermissionsList) == 0){
            return false;
        }
        
        return in_array($path, $getPrermissionsList);
    }
    
    public function getUserRole(){
        $arr = [];
        $res = $this->userRolesModel->where('user_id',$this->user_id)->select('role_id')->get();
        if($res){
            $list = $res->toArray();
            foreach($list as $k=>$v){
                $arr[] = $v['role_id'];
            }
        }
        return $arr;
    }

    /**
     * 通过角色id获取对应的权限列表
     * @param int|array $role
     */
    public function getRolePrermissions($role_id){
        $arr = [];
        $res = $this->rolePermissionsModel->WhereIn('role_id', $role_id)->select('permission_id')->get();
        if($res){
            $list = $res->toArray();
            foreach($list as $k=>$v){
                if(!in_array($v['permission_id'], $arr)){
                    $arr[] = $v['permission_id'];
                }
            }
        }
        return $arr;
    }
    
    public function getPrermissionsList($array){
        $arr = [];
        $res = $this->prermissionsModel->where('status',1)->WhereIn('id', $array)->select('url')->get();
        if($res){
            $list = $res->toArray();
            foreach($list as $k=>$v){
                $arr[] = $v['url'];
            }
        }
        return $arr;
    }

    /**
     * 不需要授权验证的url
     */
    public function isJumpCheckUrl($path){
        $array = [
            'backend/menus/menuview'
        ];
        
        return in_array($path, $array);
    }
}
