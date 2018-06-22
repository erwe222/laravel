<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * 用户角色数据模型
 *
 * @author dell
 */
class AdminRoles extends Model{

    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'admin_roles';
    
    /**
     * 可以被批量赋值的属性.
     *
     * @var array
     */
    protected $fillable = ['admin_id','role_id','created_at'];
    
    /**
     * 赋予用户角色
     */
    public function addUserRole($admin_id,$role_id){
        $insterRes = self::create([
            'admin_id' => $admin_id,
            'role_id'=>$role_id,
            'created_at'=>date('Y-m-d H:i:s')
        ]);

        if($insterRes){
            return true;
        }

        return false;
    }
    
    /**
     * 更新用户角色
     */
    public function updateAdminRole($id,$admin_id,$role_id){
        $res = self::where('id', $id)->where('admin_id',$admin_id)->update([
            'role_id' => (int)$role_id,
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        return $res?true:false;
    }

    /**
     * 判断管理员是否有指定的角色权限
     * @param int $admin_id 管理员id
     * @param int $role     角色id
     * @return blooean
     */
    public function checkUserRole($admin_id,$role_id){
        $res = self::where('admin_id', $admin_id)->where('role_id',$role_id)->count();
        return $res > 0?true:false;
    }

    /**
     * 获取指定管理员的角色信息
     * @param int $admin_id 管理员id
     * @return array
     */
    public function getAdminRoles($admin_id){
        $res = self::where('admin_id', $admin_id)->select('role_id')->get();
        if($res){
            return array_pluck($res->toarray(), 'role_id');
        }
        return [];
    }


    public function findAdminId($admin_id){
        $res = self::where('admin_id', $admin_id)->first();
        if($res){
            return $res->toarray();
        }
        return false;
    }

}
