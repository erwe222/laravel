<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * 用户角色数据模型
 *
 * @author dell
 */
class UserRoles extends Model{

    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'user_roles';
    
    /**
     * 可以被批量赋值的属性.
     *
     * @var array
     */
    protected $fillable = ['user_id','role_id','created_at'];
    
    /**
     * 赋予用户角色
     */
    public function addUserRole($user_id,$role_id){
        if(!$this->checkUserRole($user_id,$role_id)){
            $insterRes = Roles::create([
                'user_id' => $user_id,
                'role_id'=>$role_id,
                'created_at'=>date('Y-m-d H:i:s')
            ]);
            if($insterRes){
                return true;
            }
        }
        return false;
    }
    
    /**
     * 更新用户角色
     */
    public function updateUserRole($id,$user_id,$role_id){
        $res = self::where('id', $id)->where('user_id',$user_id)->update(['role_id' => (int)$role_id]);
        return $res?true:false;
    }

    /**
     * 删除用户角色
     */
    public function deleteUserRole(){
        
    }

    public function checkUserRole($user_id,$role_id){
        $res = self::where('user_id', $user_id)->where('role_id',$role_id)->count();
        return $res > 0?true:false;
    }

}
