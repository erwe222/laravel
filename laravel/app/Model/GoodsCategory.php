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
class GoodsCategory extends Model{
    
    
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'goods_category';
    
    /**
     * 可以被批量赋值的属性.
     *
     * @var array
     */
    protected $fillable = ['pid','name','description','created_at'];

    
    /**
     * 添加类目方法
     */
    public function createCategory($pid,$name,$description = ''){
        if(!$this->findName($name)){
            $insterRes = self::create([
            	'pid'  			=> $pid,
                'name' 			=> $name,
                'description'	=> $description,
                'created_at'	=> date('Y-m-d H:i:s')
            ]);

            if($insterRes){
                return handleResult(true,200,'类目添加成功...',$insterRes);
            }

            return handleResult(false,305,'类目添加失败...');
        }
        return handleResult(false,302,'类目已存在');
    }


    /**
     * 根据角色名查询单条数据
     */
    public function findName($name){
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

    public function searchCategory($pid,$name = ''){
    	if(empty($name)){
			$res = self::where('pid',$pid)->select('id','pid','name','description')->get();
    	}else{
    		$res = self::where('pid',$pid)->where('name','like','%'.$name.'%')->select('id','pid','name','description')->get();
    	}

    	if($res){
			return $res->toArray();
    	}
    	return [];
    }
    
    
}
