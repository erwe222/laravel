<?php
namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Description of Users
 *
 * @author dell
 */
class Users extends Authenticatable{
    
    use Notifiable;

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
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'users';
    
    /**
     * 添加管理员方法
     */
    public function addUser($data){
        self::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'remember_token' => str_random(10),
        ]);
    }
}
