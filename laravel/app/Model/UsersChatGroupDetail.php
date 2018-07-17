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
     * 聊天分组容纳最多人数
     * @var string
     */
    const MAX_USER = 200;

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
    protected $table = 'users_chat_group_detail';

    /**
     * 不能被批量赋值的属性
     * 
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * 查询用户是否在带加入的分组
     * @return blooean
     */
    public function findUserExist($chat_group_id,$users_id){
        $re =  self::where('users_id', $users_id)->where('chat_group_id', $chat_group_id)->count();
        if($re > 0){
            return true;
        }

        return false;
    }

    /**
     * 查询用户指定分组的用户数量
     * @var int
     */
    public function findGroupUserNum($chat_group_id){
        return self::where('chat_group_id', $chat_group_id)->count();
    }

    /**
     * 聊天分组添加用户
     * @param type $chat_group_id    分组id
     * @param type $user_id          用户id
     * @return array
     */
    public function createUser($chat_group_id,$users_id){
        if($this->findUserExist($chat_group_id,$users_id)){
            return handleResult(false,301,'已加入聊天...'); 
        }

        if($this->findGroupUserNum($chat_group_id) >= self::MAX_USER){
            return handleResult(false,302,'邀请用户数量已达上限...');
        }

        $data = [
            'chat_group_id'     =>(int) $chat_group_id,
            'users_id'          =>(int) $users_id,
            'create_time'       =>date('Y-m-d H:i:s'),
        ];

        if(self::create($data)){
            return handleResult(true,200,'已加入聊天...');
        }

        return handleResult(false,305,'邀请失败...'); 
    }

    /**
     * 从聊天分组中移除指定用户
     * @param type $chat_group_id    分组id
     * @param type $user_id          用户id
     * @return blooean
     */
    public function deleteUser($users_id,$chat_group_id){
        return self::where('users_id', $users_id)->where('chat_group_id', $chat_group_id)->delete();
    }

}