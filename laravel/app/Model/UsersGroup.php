<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UsersGroup extends Model{

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
    protected $table = 'users_group';
    
    /**
     * 不能被批量赋值的属性
     *
     * @var array
     */
    protected $guarded = ['id'];
    
    /**
     * 查询用户分组名是否存在
     * @param type $user_id    用户id
     * @param type $group_name 分组名
     */
    public function findGroupName($users_id,$group_name){
        $res = self::where('users_id', $users_id)->where('groupname', $group_name)->first();
        if($res){
            return $res;
        }

        return false;
    }

    /**
     * 查询用户分组id是否存在
     * @param type $user_id    用户id
     * @param type $group_id   分组id
     */
    public function findGroupId($users_id,$group_id){
        $res = self::where('users_id', $users_id)->where('id', $group_id)->count();
        if($res){
            return true;
        }

        return false;
    }

    /**
     * 添加用户分组
     * @param type $user_id    用户id
     * @param type $params
     * @return  array
     */
    public function createGroup($user_id,$params){
        $data = [];
        $data['users_id']   = $params['users_id'];
        $data['groupname']  = $params['groupname'];
        $data['sort']       = $params['sort'];

        if($this->findGroupName($user_id,$data['groupname'])){
           return handleResult(false,302,'分组名已存在...'); 
        }

        if(self::create($data)){
            return handleResult(true,200,'分组名创建成功...'); 
        }else{
            return handleResult(false,305,'分组名创建失败...'); 
        }
    }

    /**
     * 删除用户分组
     * @param type $user_id    用户id
     * @param type $group_id   分组id
     * @return  array
     */
    public function deleteGroup($user_id,$group_id){

        if((new UsersFriends())->findGroupUsersNum($user_id,$group_id) > 0){
            return handleResult(false,302,'分组不能被删除...'); 
        }

        $res = self::where('users_id', $users_id)->where('group_id', $group_id)->delete();
        
        if($res){
            return handleResult(true,305,'分组删除成功...'); 
        }

        return handleResult(false,305,'分组删除失败...'); 
    }

}
