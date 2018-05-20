<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

/**
 * 后台基类控制器
 * Description of CController
 *
 * @author dell
 */
class CController extends Controller{
    
    
    public function __construct() {
        Auth::shouldUse('admin');
    }

    /**
     * 判断管理员是否登录
     * @return type
     */
    public function checkLogin(){
        return Auth::check();
    }
    
    

}
