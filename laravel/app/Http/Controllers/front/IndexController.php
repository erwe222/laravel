<?php
namespace App\Http\Controllers\front;

class IndexController extends CController{
    
    public function __construct() {
        parent::__construct();
        
        $this->WeChatApiClass 	= new \App\Model\FunctionClass\WeChatApi();
    }
    
    /**
     * 前台主页
     */
    public function index(){
        $url = 'http://repair.sh-jinger.com';
        $redirect = $this->WeChatApiClass->getWeChatAuthCode($url,123,false);
        var_dump($redirect);exit;
        return redirect()->to($redirect);
    }
    
    /**
     * 
     */
    public function test(){
        return view('frontend.Index.test');
    }
    
}
