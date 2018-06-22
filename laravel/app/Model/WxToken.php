<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class WxToken extends Model
{
    /**
     * laravel 禁止自动更新 update_at 字段
     * @var type 
     */
    public $timestamps = false;
    
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'wx_token';
    
    /**
     * 可以被批量赋值的属性.
     *
     * @var array
     */
    protected $fillable = ['app_id','access_token','expiry_time','created_at'];

    /**
     * 不能被批量赋值的属性
     *
     * @var array
     */
    protected $guarded = ['id'];
    
    

    /**
     * 添加Access_token
     * @param type $data
     * @return type
     */
    public function createToken($data){
        $insterRes = self::create($data);
        return $insterRes;
    }

    /**
     * 获取最新的Access_token信息
     * @return type
     */
    public function findAccessToekn($appid){
    	$res = self::where('app_id',$appid)->orderBy('created_at', 'desc')->first();
    	if($res){
    		return $res->toarray();
    	}
    	return [];
    }

    /**
     * 获取Access_token列表信息
     * @return type
     */
    public function findTokenList($params = [],$all = false){
        $count_sql = 'select count(1) as total from `lar_wx_token` wx_token  where 1=1 ';
        $sql = 'SELECT * FROM `lar_wx_token` wx_token  where 1=1 ';


        if(isset($params['app_id'])){
            $sql .= " and wx_token.app_id = '{$params['app_id']}'";
            $count_sql .= " and wx_token.app_id = '{$params['app_id']}'";
        }

        $count_info = DB::select($count_sql);
        
        $offset = isset($params['offset'])?$params['offset']:0;
        $pageindex = isset($params['pageindex'])?$params['pageindex']:1;
        $pagesize  = isset($params['pagesize'])?$params['pagesize']:10;


        $page_info = getPagingInfo($count_info[0]->total,$pageindex,$pagesize,$offset);
        
        if(isset($params['orderBy']) && isset($params['sort'])){
            $sql .= " order by {$params['orderBy']} {$params['sort']}";
        }else{
            $sql .= " order by created_at desc";
        }

        if($all === true){
            $page_info['limit'] = '';
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
