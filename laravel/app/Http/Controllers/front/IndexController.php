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
        if(isWeiXin()){

            $redirect = request()->getUri();

            //微信授权回调地址
            $url = route('f_wx_auth2');
            $redirect = $this->weChatApiClass->getWeChatAuthCode($url,$redirect,false);
            return redirect()->to($redirect);

            // $this->wxAuthorize(true);
        }
        
        return view('frontend.index.index');
    }
    
    /**
     * 
     */
    public function test(){
        return view('frontend.Index.test');
    }
    
}
