<?php
namespace App\Http\Controllers\front;

class IndexController extends CController{
    
    public function __construct() {
        parent::__construct();
        
        $this->weChatApiClass 	= new \App\Model\FunctionClass\WeChatApi();
    }
    
    /**
     * 前台主页
     */
    public function index(){
        $is_wx = false;
        $wx_info = [];
        if(isWeiXin()){
            $is_wx = true;
            $this->wxAuthorize(false);
            $wxAuthorize = request()->session()->get('wxAuthorize');
            $res = $this->weChatApiClass->getUserAuthorizedUserInfo($wxAuthorize['access_token'],$wxAuthorize['openid']);
            $wx_info = $res;
        }
        
        return view('frontend.index.index',['wx_info'=>$wx_info]);
    }
    
    /**
     * 
     */
    public function test(){
        return view('frontend.Index.test');
    }
    
}
