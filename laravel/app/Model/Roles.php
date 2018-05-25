<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Model\RolePermissions;

/**
 * 角色数据模型
 *
 * @author dell
 */
class Roles extends Model{
    
    const STATUS_YES = 1;
    
    const STATUS_NO = 0;
    
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'roles';
    
    /**
     * 可以被批量赋值的属性.
     *
     * @var array
     */
    protected $fillable = ['name','status','created_at'];

    protected function filterStatus($status){
        return ((int)$status == self::STATUS_YES?self::STATUS_YES:self::STATUS_NO);
    }
    
    /**
     * 添加角色方法
     */
    public function addRole($name,$status = 0){
        $name = trim($name);
        if(!$this->findRoleName($name)){
            $insterRes = Roles::create([
                'name' => $name,
                'status'=>$this->filterStatus($status),
                'created_at'=>date('Y-m-d H:i:s')
            ]);
            if($insterRes){
                return true;
            }
        }
        return false;
    }
    
    /**
     * 更新角色方法
     */
    public function updateRole($id,$params){
        $array = [];
        if(isset($params['name'])){
            if($this->findRoleName($params['name'])){
                return false;
            }
            $array['name'] = $params['name'];
        }
        
        if(isset($params['status'])){
            $array['status'] = $this->filterStatus($params['status']);
        }

        $res = self::where('id', $id)->update($array);

        return $res > 0 ?true:false;
    }

    /**
     * 删除角色方法
     * @param int|array $id
     * @return  boolean
     */
    public function deleteRole($id){
        DB::beginTransaction();
            $res = self::destroy($id);
            if(!$res){
                DB::rollBack();
                return false;
            }

            $res2 = RolePermissions::WhereIn('role_id', $id)->delete();
            if(!$res2){
                DB::rollBack();
                return false;
            }
        DB::commit();
        return true;
    }
    
    /**
     * 根据角色名查询单条数据
     */
    public function findRoleName($name){
        $res = self::where('name', $name)->first();
        if($res){
            return $res->toArray();
        }
        return false;
    }
    
    /**
     * 根据id、查询单条数据
     * @param type $id
     * @return boolean
     */
    public function findById($id){
        $res = self::find($id);
        if($res){
            return $res->toArray();
        }
        return false;
    }
    
    /**
     * 获取多条角色信息
     */
    public function findRolesList($params = [],$all = ''){
        $count_sql = 'select count(1) as total from lar_roles r where 1=1 ';
        $sql = 'select r.*,(SELECT count(1) from lar_admin_roles ur where ur.role_id = r.id) as total  from lar_roles r where 1=1 ';
        if(isset($params['name']) && !empty($params['name'])){
             $sql .= " and r.name like '%{$params['name']}%'";
             $count_sql .= " and r.name like '%{$params['name']}%'";
        }

        if(isset($params['status'])){
            $sql .= " and r.status = {$params['status']}";
            $count_sql .= " and r.status = {$params['status']}";
        }

        $count_info = DB::select($count_sql);
        $offset = isset($params['offset'])?$params['offset']:0;
        $pageindex = isset($params['pageindex'])?$params['pageindex']:1;
        $pagesize  = isset($params['pagesize'])?$params['pagesize']:10;
        $page_info = getPagingInfo($count_info[0]->total,$pageindex,$pagesize,$offset);

        if(isset($params['orderBy']) && isset($params['sort'])){
            if($params['orderBy'] == 'created_at'){
                $orderBy = 'created_at';
                $sql .= " order by {$orderBy} {$params['sort']}";
            }else if($params['orderBy'] == 'updated_at'){
                $orderBy = 'updated_at';
                $sql .= " order by {$orderBy} {$params['sort']}";
            }
        }

        $list = DB::select($sql.$page_info['limit']);
        foreach($list as $_k=>$_v){
            $list[$_k] = (array)$_v;
        }
        
        $page_info['filteredTotal'] = count($list);
        $page_info['data'] = $list;
        
        return $page_info;
    }
}
