<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UsersFriends extends Model{

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
    protected $table = 'users_friends';

    /**
     * 不能被批量赋值的属性
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * 查询指定用户分组的用户数
     * @param type $user_id    用户id
     * @param type $group_id   分组id
     */
    public function findGroupUsersNum($users_id,$group_id){
        return self::where('users_id', $users_id)->where('group_id', $group_id)->count();
    }

    /**
     * 查询好友是否存在
     * @param type $user_id    用户id
     * @param type $friend_id  分组id
     */
    public function findFriendId($users_id,$friend_id){
        $res = self::where('users_id', $users_id)->where('friend_id', $friend_id)->count();
        if($res){
            return true;
        }

        return false;
    }

    /**
     * 用户添加好友
     * @param type $user_id    用户id
     * @param type $friend_id  好友id
     * @param type $group_id   分组id
     */
    public function createFriend($user_id,$friend_id,$group_id = ''){
        $data = [];
        $data['users_id']   = $user_id;
        $data['friend_id']  = $friend_id;
        $data['group_id']   = $group_id;
        $data['create_time']= date('Y-m-d H:i:s');

        if($this->findFriendId($user_id,$friend_id)){
            return handleResult(false,301,'您们已成为好友...');
        }

        if(!(new UsersGroup())->findGroupId($user_id,$group_id)){
           return handleResult(false,302,'分组不存在...');
        }

        if(self::create($data)){
            return handleResult(true,200,'好友添加成功...'); 
        }else{
            return handleResult(false,305,'好友添加失败...'); 
        }
    }

    /**
     * 用户删除好友
     * @param type $user_id    用户id
     * @param type $friend_id  好友id
     */
    public function deleteFriend($users_id,$friend_id){
        $res = self::where('users_id', $users_id)->where('friend_id', $friend_id)->delete();

        if($res){
            return true;
        }

        return false;
    }

}
