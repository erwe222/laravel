<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


/**
 * 角色数据模型
 *
 * @author dell
 */
class Brand extends Model{
    

    
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'brand';
    
    /**
     * 可以被批量赋值的属性.
     *
     * @var array
     */
    protected $fillable = ['name','logo_url','description','created_at'];

    
    /**
     * 添加品牌信息
     */
    public function addBrand($name,$description,$logo_url){
        $name = trim($name);
        if(!$this->findBrandName($name)){
            $insterRes = self::create([
                'name'          =>  htmlspecialchars($name),
                'description'   =>  htmlspecialchars($description),
                'logo_url'     =>  $logo_url,
                'created_at'    =>  date('Y-m-d H:i:s')
            ]);

            if($insterRes){
                return handleResult(true,200,'添加成功...');
            }
            return handleResult(false,305,'添加失败...');
        }

        return handleResult(false,302,'名称已存在');
    }
    
    /**
     * 更新角色方法
     */
    public function updateBrand($id,$params){
        $array = [];
        if(isset($params['name'])){
            $arr = $this->findBrandName($params['name']);
            if($arr && $arr['id'] != $id){
                return handleResult(false,302,'名称已存在');
            }

            $array['name'] = htmlspecialchars($params['name']);
        }
        
        if(isset($params['description'])){
            $array['description'] = htmlspecialchars($params['description']);
        }

        if(isset($params['logo_url'])){
            $array['logo_url'] = htmlspecialchars($params['logo_url']);
        }

        $res = self::where('id', $id)->update($array);
        if($res != false){
            return handleResult(true,200,'修改成功...');
        }
        
        return handleResult(false,305,'修改失败...');
    }

    /**
     * 根据品牌名查询单条数据
     */
    public function findBrandName($name){
        $res = self::where('name', $name)->first();
        if($res){
            return $res->toArray();
        }
        return false;
    }

    /**
     * 获取多条品牌信息
     */
    public function findBrandList($params = [],$all = ''){
        $count_sql = 'select count(1) as total from lar_brand brand where 1=1 ';
        $sql = 'select *  from lar_brand brand where 1=1 ';
        if(isset($params['name']) && !empty($params['name'])){
             $sql .= " and brand.name like '%{$params['name']}%'";
             $count_sql .= " and brand.name like '%{$params['name']}%'";
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
        
        $page_info['data'] = $list;
        
        return $page_info;
    }
}
