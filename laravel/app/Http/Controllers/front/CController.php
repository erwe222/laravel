<?php
namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

/**
 * 前端基类控制器
 * Description of CController
 *
 * @author dell
 */
class CController extends Controller{
    
    
    public function __construct() {
        
    }
    
    /**
     * 判断用户是否登录
     * @return type
     */
    public function checkLogin(){
        return Auth::check();
    }
    
    /**
     * 获取登录用户信息
     * @return type
     */
    public function getUserInfo(){
        return Auth::user();
    }

}
