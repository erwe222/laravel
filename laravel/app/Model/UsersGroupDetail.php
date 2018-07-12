<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class UsersGroupDetail extends Model{
    
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'users_group_detail';
    
    /**
     * 不能被批量赋值的属性
     *
     * @var array
     */
    protected $guarded = ['id'];
}
