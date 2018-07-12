<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UsersFriends extends Model{

    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'users_friends';

    /**
     * 不能被批量赋值的属性
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * 用户添加好友
     * @param type $user_id    用户id
     * @param type $friend_id  好友id
     * @param type $group_id   分组id
     */
    public function createFriend($user_id,$friend_id,$group_id = ''){

    }

    /**
     * 用户删除好友
     * @param type $user_id    用户id
     * @param type $friend_id  好友id
     */
    public function deleteFriend($user_id,$friend_id){

    }
}
