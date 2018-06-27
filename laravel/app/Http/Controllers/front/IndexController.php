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
            $this->wxAuthorize(false);
        }

        $wxAuthorize = request()->session()->get('wxAuthorize');

        var_dump($wxAuthorize);

        
        $res = $this->weChatApiClass->getUserAuthorizedUserInfo($wxAuthorize['access_token'],$wxAuthorize['openid']);
        dd($res);
        
        return view('frontend.index.index');
    }
    
    /**
     * 
     */
    public function test(){
        return view('frontend.Index.test');
    }
    
}
