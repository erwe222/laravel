<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * 权限表数据模型
 *
 * @author dell
 */
class Permissions extends Model{
    
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'permissions';
    
    /**
     * 可以被批量赋值的属性.
     *
     * @var array
     */
    protected $fillable = ['pid','type','title','url','status','created_at'];
    
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
     * 删除权限方法
     * @param int|array $id
     * @return  boolean
     */
    public function delPermissions($id){
        $count = self::where('pid',$id)->count();
        if($count > 0){
            return false;
        }
        $res = self::destroy($id);
        return $res?true:false;
    }
    
    /**
     * 获取权限列信息
     */
    public function findPermissionsList($params = [],$all = ''){
        $count_sql = 'select count(1) as total from lar_permissions p where 1=1 ';
        $sql = 'select p.*,p2.title as pid_name from lar_permissions p left join lar_permissions  p2 on p2.id = p.pid where 1 = 1';
        
        if(isset($params['title'])){
             $sql .= " and p.title like '%{$params['title']}%'";
             $count_sql .= " and p.title like '%{$params['title']}%'";
        }

        if(isset($params['moudelname'])){
            $sql .= " and  p.pid in(select id from lar_permissions where type = 0 and title like '%{$params['moudelname']}%')";


            $count_sql .= " and  p.pid in(select id from lar_permissions where type = 0 and title like '%{$params['moudelname']}%')";
        }


        if(isset($params['status'])){
            $sql .= " and p.status = {$params['status']}";
            $count_sql .= " and p.status = {$params['status']}";
        }

        $count_info = DB::select($count_sql);
        $offset = isset($params['offset'])?$params['offset']:0;
        $pageindex = isset($params['pageindex'])?$params['pageindex']:1;
        $pagesize  = isset($params['pagesize'])?$params['pagesize']:10;
        $page_info = getPagingInfo($count_info[0]->total,$pageindex,$pagesize,$offset);

        if(isset($params['orderBy']) && isset($params['sort'])){
            if($params['orderBy'] == 'created_at'){
                $sql .= " order by {$params['orderBy']} {$params['sort']}";
            }else if($params['orderBy'] == 'updated_at'){
                $sql .= " order by {$params['orderBy']} {$params['sort']}";
            }
        }else{
            $sql .= " order by created_at desc";
        }

        $list = DB::select($sql.$page_info['limit']);
        foreach($list as $_k=>$_v){
            $list[$_k] = (array)$_v;
        }
        
        $page_info['filteredTotal'] = count($list);
        $page_info['data'] = $list;
        
        return $page_info;
    }
    
    /**
     * 获取权限模块列表
     * @return type
     */
    public function findModulenameList(){
        $res = self::where('type',0)->select('id','type','title')->get();
        if($res && count($res) > 0){
            return $res->toarray();
        }
        return [];
    }
    
    /**
     * 添加权限方法
     */
    public function createPermissions($params){
        $data = [];
        if($params['type'] == 0){
            $data['type']           = 0;
            if(empty($params['modulename'])){
                return handleResult(false,301,'参数不符合规范...');
            }
            $data['title']     = $params['modulename'];
        }else{
            if(empty($params['title']) || empty($params['url'])){
                return handleResult(false,301,'参数不符合规范...');
            }
            $data['pid']            = $params['pid'];
            $data['type']           = 1;
            $data['status']         = $params['status'];
            $data['title']          = $params['title'];
            $data['url']            = $params['url'];
            if(!$this->findById($data['pid'])){
                return handleResult(false,305,'权限添加失败...');
            }
        }

        $insterRes = self::create($data);
        if($insterRes){
            return handleResult(true,200,'权限添加成功...');
        }

        return handleResult(false,305,'权限添加失败...');
    }
    
    /**
     * 添加权限方法
     */
    public function edit($params){
        $data = [];
        if($params['type'] == 0){
            $data['type']           = 0;
            if(empty($params['modulename'])){
                return handleResult(false,301,'参数不符合规范...');
            }
            $data['title']     = $params['modulename'];
        }else{
            if(empty($params['title']) || empty($params['url'])){
                return handleResult(false,301,'参数不符合规范...');
            }
            $data['pid']            = $params['pid'];
            $data['type']           = 1;
            $data['status']         = $params['status'];
            $data['title']          = $params['title'];
            $data['url']            = $params['url'];
            if(!$this->findById($data['pid'])){
                return handleResult(false,305,'权限修改失败...');
            }
        }

        $res = self::where('id', $params['id'])->update($data);
        if($res !== false){
            return handleResult(true,200,'权限修改成功...');
        }

        return handleResult(false,305,'权限修改失败...');
    }
    
    /**
     * 获取权限表所有数据
     */
    public function getAllPermissions(){
        $res = self::select('id','type','pid','title','url','status')->get();
        if($res){
            return $res->toarray();
        }
        return [];
    }

    public function getTree($data, $pId){
        $tree = [];
        foreach($data as $k => $v)
        {
            if($v['pid'] == $pId){
                $v['children'] = $this->getTree($data, $v['id']);
                $tree[] = $v;
            }
        }
        return $tree;
    }
}
