<?php
namespace App\Model;
use Illuminate\Support\Facades\DB;

/**
 * Description of Admin
 *
 * @author dell
 */
class Admin extends \Illuminate\Foundation\Auth\User{
    
    /**
     * @var string 定义表名字
     */
    protected $table = 'admins';
    /**
     * @var array 批量赋值的黑名单
     */
    protected $guarded = ['id'];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
     * 添加管理员方法
     */
    public function addAdmin($data){
        if($this->findEmail($data['email'])){
            return handleResult(false,302,'邮箱地址已存在...');
        }

        $res = self::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'remember_token' => str_random(10),
        ]);

        if($res){
            return handleResult(true,200,'添加管理员成功...');
        }else{
            return handleResult(false,305,'添加管理员失败...');
        }
    }

    /**
     * 修改用密码
     */
    public function editPwd($admin_id,$old_pwd,$new_pwd){
        $admin_info = self::find($admin_id);
        if(!$admin_info){
            return handleResult(false,301,'用户不存在');
        }

        if (!\Hash::check($old_pwd, $admin_info->password)) {
            return handleResult(false,302,'原始密码输入错误');
        }
        $expiry_time = $this->getExpiryTime();
        $res = self::where('id', $admin_id)->update(['password'=>bcrypt($new_pwd),'expiry_time'=>$expiry_time]);
        if($res){
            return handleResult(true,200,'密码修改成功...');
        }

        return handleResult(false,305,'密码修改失败...');
    }

    /**
     * 编辑管理员信息
     */
    public function editDetail($admin_id,$params){
        $arr = ['name','sex','birthday','telephone','facebook','twitter','google','status'];
        $data = [];
        foreach($params as $k=>$v){
            if(in_array($k, $arr)){
                if($k == 'sex'){
                    $data[$k] = ($v == 1)?1:(($v == 2)?2:0);
                }else{
                    $data[$k] = $v;
                }
            }
            continue;
        }
        
        if(count($data) == 0){
            return handleResult(false,301,'参数错误...');
        }

        $res = self::where('id', $admin_id)->update($data);
        if($res){
            return handleResult(true,200,'修改信息成功...');
        }

        return handleResult(false,305,'修改信息失败...');
    }

    /**
     * 更新管理员头像
     */
    public function updateProfilePic($admin_id,$pic_path){
        $res = self::where('id', $admin_id)->update(['profile_pic'=>$pic_path]);
        if($res){
            return handleResult(true,200,'上传头像成功...');
        }

        return handleResult(false,305,'上传头像失败...');
    }

    /**
     * 通过Email查询记录
     * @param type $email 邮件地址
     * @return boolean
     */
    public function findEmail($email){
        $res = self::where('email', $email)->first();
        if($res){
            return $res;
        }
        return false;
    }

    /**
     * 更新管理员重置密码token
     * @param type $name 菜单名
     * @return boolean
     */
    public function setResetToken($admin_id,$toekn){
        return  self::where('id', $admin_id)->update(['password_reset_token'=>$toekn]);
    }

    /**
     * 管理员重置密码
     * @param type $id 
     * @return boolean
     */
    public function resetPassword($admin_id,$new_pwd,$token){
        $admin_info = self::find($admin_id);
        if(!$admin_info){
            return handleResult(false,303,'用户不存在');
        }

        $res = self::where('id', $admin_id)->where('password_reset_token', $token)->update(['password'=>bcrypt($new_pwd),'password_reset_token'=>'','expiry_time'=>$expiry_time]);
        if($res){
            return handleResult(true,200,'密码重置成功...');
        }

        return handleResult(false,305,'密码重置失败...');
    }

    /**
     * 获取管理员列表信息
     */
    public function findAdminsList($params){
        $count_sql = 'select count(1) as total from lar_admins admin where 1=1 ';
        $sql = 'select admin.*,role.name as role_name  from lar_admins admin  LEFT JOIN lar_admin_roles a_role on admin.id = a_role.admin_id LEFT JOIN lar_roles role on a_role.role_id = role.id where 1=1 ';
        if(isset($params['name']) && !empty($params['name'])){
             $sql .= " and admin.name like '%{$params['name']}%'";
             $count_sql .= " and admin.name like '%{$params['name']}%'";
        }

        if(isset($params['email'])){
            $sql .= " and admin.email = '{$params['email']}'";
            $count_sql .= " and admin.email = '{$params['email']}'";
        }

        if(isset($params['status'])){
            $sql .= " and admin.status = {$params['status']}";
            $count_sql .= " and admin.status = {$params['status']}";
        }


        $count_info = DB::select($count_sql);
        $offset = isset($params['offset'])?$params['offset']:0;
        $pageindex = isset($params['pageindex'])?$params['pageindex']:1;
        $pagesize  = isset($params['pagesize'])?$params['pagesize']:10;
        $page_info = getPagingInfo($count_info[0]->total,$pageindex,$pagesize,$offset);

        if(isset($params['orderBy']) && isset($params['sort'])){
            if($params['orderBy'] == 'created_at'){
                $orderBy = 'created_at';
                $sql .= " order by {$orderBy} {$params['sort']}";
            }else if($params['orderBy'] == 'updated_at'){
                $orderBy = 'updated_at';
                $sql .= " order by {$orderBy} {$params['sort']}";
            }
        }

        $list = DB::select($sql.$page_info['limit']);
        foreach($list as $_k=>$_v){
            $list[$_k] = (array)$_v;
        }
        
        $page_info['filteredTotal'] = count($list);
        $page_info['data'] = $list;

        return $page_info;
    }

    /**
     * 获取管理员登录的过期时间
     */
    public function getExpiryTime(){
        return date('Y-m-d H:i:s',strtotime('+30 day'));
    }
}
