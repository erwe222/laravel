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
     * 根据id、查询单条数据
     * @param type $id
     * @return boolean
     */
    public function findRoleId($id){
        $res = self::where('role_id',$id)->first();
        if($res){
            return $res->toArray();
        }
        return false;
    }
    
    /**
     * 删除角色权限方法
     * @param int|array $id
     * @return  boolean
     */
    public function deleteRolePermissions($id){
        $res = self::destroy($id);
        return $res?true:false;
    }
    
    /**
     * 获取角色所有权限
     */
    public function getRolePermissionsIds($role_id){
        $data = self::where('role_id',$role_id)->select('permission_id')->get();
        if($data){
            $arr = $data->toarray();
            $data = [];
            foreach ($arr as $key => $value) {
                $data[] = $value['permission_id'];
            }
            return $data;
        }
        return [];
    }
    
    /**
     * 更新角色权限
     */
    public function updatePermissions($role_id,$permissions_ids){
        $roleModel = new Roles();
        if(!$roleModel->findById($role_id)){
            return handleResult(false,302,'角色不存在...');
        }

        DB::beginTransaction();
            $old_permissions_ids = $this->getRolePermissionsIds($role_id);
            $remove = [];
            $add    = [];
            foreach($old_permissions_ids as $_v){
                if(!in_array($_v, $permissions_ids)){
                    $remove[] = $_v;
                }
            }

            foreach($permissions_ids as $_v){
                if(!in_array($_v, $old_permissions_ids)){
                    $add[] = [
                        'role_id'=>$role_id,
                        'permission_id'=>$_v,
                        'created_time'=>date('Y-m-d H:i:s')
                    ];
                }
            }
            
            $res_count = RolePermissions::where('role_id', $role_id)->whereIn('permission_id',$remove)->delete();
            if($res_count !== count($remove)){
                DB::rollBack();
                return handleResult(false,305,'角色权限更新失败...');
            }

            $add_res = DB::table('role_permissions')->insert($add);
            if(!$add_res){
                DB::rollBack();
                return handleResult(false,305,'角色权限更新失败...');
            }
        DB::commit();
        return handleResult(true,200,'角色权限更新成功...');
    }
    

}
