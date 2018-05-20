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
        return self::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'remember_token' => str_random(10),
        ]);
    }
}
