<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Description of UsersChatGroupDetail
 *
 * @author dell
 */
class UsersChatGroupDetail extends Model{

    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'users_chat_group_detail';

    /**
     * 不能被批量赋值的属性
     * 
     * @var array
     */
    protected $guarded = ['id'];
}