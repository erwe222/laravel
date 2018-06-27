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
    	$code 	= $request->input('code','');
    	$state 	= $request->input('state','');

		$res = $this->weChatApiClass->getUserAuthorizeAccessToken($code);
        if(!isset($res['errcode'])){
            $res['expires_time'] = time() + $res['expires_in'];
            $res['userinfo'] = [];
            $request->session()->put('wxAuthorize', $res);
            return redirect()->to($state);
        }
    }
}
