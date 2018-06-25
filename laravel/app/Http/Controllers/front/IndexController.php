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
//        if(isWeiXin()){
            $url = 'http://59.110.168.230/weixin';
            $redirect = $this->weChatApiClass->getWeChatAuthCode($url,123,false);
            
//            var_dump($redirect);exit;
            return redirect()->to($redirect);
//        }
        
        return view('frontend.index.index');
    }
    
    /**
     * 
     */
    public function test(){
        return view('frontend.Index.test');
    }
    
}
