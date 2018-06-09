<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ActionLog extends Model
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
    protected $table = 'actions_log';
    
    /**
     * 可以被批量赋值的属性.
     *
     * @var array
     */
    protected $fillable = ['admin_id','type','content','created_at'];

    /**
     * 不能被批量赋值的属性
     *
     * @var array
     */
    protected $guarded = ['id'];
    
    /**
     * type 对应的解释
     * @var array
     */
    public $typeTip  = [
        '1'=>'添加数据',
        '2'=>'更新数据',
        '3'=>'删除数据',
        '4'=>'上传文件',
        '5'=>'删除文件',
        '6'=>'下载文件',
    ];

    /**
     * 添加后台操作日志
     * @param type $data
     * @return type
     */
    public function addActionLog($data){
        $insterRes = self::create($data);
        return $insterRes;
    }
}
