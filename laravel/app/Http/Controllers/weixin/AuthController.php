<?php
namespace App\Http\Controllers\weixin;
use Illuminate\Http\Request;

class AuthController extends CController{
    
    public function __construct(){
    	parent::__construct();

    }

    /**
     * 微信登陆页面
     * @param \Illuminate\Http\Request $request
     * @return type
     */
    public function login(Request $request){
        return view('weixin.auth.login');
    }
    
    /**
     * 微信登陆处理页面
     * @param \Illuminate\Http\Request $request
     * @return type
     */
    public function postLogin(Request $request){
        
        sleep(2);
        return returnData(200,'登录成功',[]);
    }


    /**
     * 微信注册页面
     * @param \Illuminate\Http\Request $request
     * @return type
     */
    public function register(Request $request){
        return view('weixin.auth.register');
    }
    
    /**
     * 微信注册处理页面
     * @param \Illuminate\Http\Request $request
     * @return type
     */
    public function postRegister(Request $request){
        sleep(2);
        return returnData(200,'注册成功',[]);
    }
}
