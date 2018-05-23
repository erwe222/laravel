<?php
namespace App\Model;

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
    public function addUser($data){
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
            return handleResult(false,303,'用户不存在');
        }

        if (!\Hash::check($old_pwd, $admin_info->password)) {
            return handleResult(false,304,'原始密码输入错误');
        }

        $res = self::where('id', $admin_id)->update(['password'=>bcrypt($new_pwd)]);
        if($res){
            return handleResult(true,200,'密码修改成功...');
        }

        return handleResult(false,305,'密码修改失败...');
    }

    /**
     * 编辑管理员信息
     */
    public function editDetail($admin_id,$params){
        $arr = ['name','sex','birthday','telephone','facebook','twitter','google'];
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
    
    
}
