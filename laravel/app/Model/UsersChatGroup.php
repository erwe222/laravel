<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UsersChatGroup extends Model{

    /**
     * 用户可创建的最多分组数量
     * @var string
     */
    const MAX_GROUP = 10;

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
    protected $table = 'users_chat_group';
    
    /**
     * 不能被批量赋值的属性
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * 查询用户当前分组数量
     * @var int
     */
    public function findGroupNum($users_id){
        return self::where('users_id', $users_id)->count();
    }

    /**
     * 查询分组名是否存在
     * @param type $user_id    用户id
     * @param type $group_name 分组名
     * @return blooean
     */
    public function findGroupNameExist($group_name){
        $res = self::where('groupname', $group_name)->count();
        if($res){
            return true;
        }

        return false;
    }

    /**
     * 创建聊天分组
     * @param   int     $users_id         用户id
     * @param   array   $params           参数
     * @return  array
     */
    public function createChatGroup($users_id,$params){
        if($this->findGroupNum($users_id) >= self::MAX_GROUP){
            return handleResult(false,301,'创建分组数量已达上限...');
        }

        if($this->findGroupNameExist($params['groupname'])){
           return handleResult(false,302,'分组名已存在...'); 
        }

        $data = [
            'users_id'      =>$users_id,
            'groupname'     =>$params['groupname'],
            'groupurl'      =>$params['groupurl'],
            'introduce'     =>$params['introduce'],
            'create_time'   =>date('Y-m-d H:i:s'),
        ];

        DB::beginTransaction();
        if($id = self::create($data)){

            $result = (new UsersChatGroupDetail())->createUser($id->id,$users_id);
            if(!$result['result']){
                DB::rollBack();
                return handleResult(false,305,'分组创建失败...'); 
            }

            DB::commit();
            return handleResult(true,200,'分组创建成功...'); 
        }else{

            DB::rollBack();

            return handleResult(false,305,'分组创建失败...'); 
        }
    }

    /**
     * 移除聊天分组
     * @param   int     $users_id         用户id
     * @param   array   $params           参数
     * @return  array
     */
    public function deleteChatGroup($users_id,$chat_group_id){
        $res1 =  self::where('users_id', $users_id)->where('id', $chat_group_id)->count();
        if($res1 > 0){
            DB::beginTransaction();

            $res2 =  UsersChatGroupDetail::where('chat_group_id', $chat_group_id)->delete();
            if(!$res2){
                DB::rollBack();
                return handleResult(false,305,'分组删除失败...'); 
            }  

            $res3 =  self::where('users_id', $users_id)->where('id', $chat_group_id)->delete();
            if(!$res3){
                DB::rollBack();
                return handleResult(false,305,'分组删除失败...'); 
            }

            DB::commit();
            return handleResult(true,200,'分组删除成功...'); 
        }else{
            return handleResult(false,305,'分组不存在...'); 
        }
    }
}