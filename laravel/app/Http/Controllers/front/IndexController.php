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
            $url = 'https://repair.sh-jinger.com/front/wx/auth2';
            $redirect = $this->weChatApiClass->getWeChatAuthCode($url,123,false);
            return redirect()->to($redirect);
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
