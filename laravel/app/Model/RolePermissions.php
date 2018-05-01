<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
/**
 * Description of RolePermissions
 *
 * @author dell
 */
class RolePermissions extends Model{
    
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'role_permissions';
    
    /**
     * 删除角色权限方法
     * @param int|array $id
     * @return  boolean
     */
    public function deleteRolePermissions($id){
        $res = self::destroy($id);
        return $res?true:false;
    }

}
