<?php
namespace App\Http\Controllers\weixin;

/**
 * Description of WeixinController
 *
 * @author dell
 */
class WeixinController extends CController{
    
    protected $weChatApiClass;
    
    public function __construct(){
    	parent::__construct();
        
        $this->weChatApiClass 	= new \App\Model\FunctionClass\WeChatApi();
    }

    /**
     * 前台主页
     */
    public function index(){
        if(isset($_GET["echostr"])){
            $this->weChatApiClass->valid();
        }
        
        if($this->weChatApiClass->checkSignature()){
            $this->weChatApiClass->responseMsg();
        }
    }
}
