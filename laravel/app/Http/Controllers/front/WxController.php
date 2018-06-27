<?php
namespace App\Http\Controllers\front;
use Illuminate\Http\Request;

/**
 * Description of WxController
 *
 * @author dell
 */
class WxController extends CController{
   
    public function __construct() {
        parent::__construct();

        $this->weChatApiClass 	= new \App\Model\FunctionClass\WeChatApi();
    }
    
    /**
     * 微信授权地址
     */
    public function auth2(Request $request){
    	var_dump($_REQUEST);
    	$code 	= $request->input('code','');
    	$state 	= $request->input('state','');

		$res = $this->weChatApiClass->getUserAuthorizeAccessToken($code);
    	
        dd($res);
        
    }
}
