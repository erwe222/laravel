<?php
namespace App\Model;


/**
 * Description of Users
 *
 * @author dell
 */
class Users extends \Illuminate\Foundation\Auth\User{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mobile', 'password',
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
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'users';
    
    /**
     * 通过mobile查询记录
     * @param type $email 邮件地址
     * @return boolean
     */
    public function findMobile($mobile){
        $res = self::where('mobile', $mobile)->first();
        if($res){
            return $res;
        }
        return false;
    }

    /**
     * 注册用户信息
     */
    public function createUser($mobile,$password){
        $res = self::create([
            'mobile' => $mobile,
            'password' => bcrypt($password),
            'remember_token' => str_random(10),
        ]);

        if(!$res){
            return false;
        }

        sleep(2);

        //注册成功 处理其它业务


        return true;
    }
}
