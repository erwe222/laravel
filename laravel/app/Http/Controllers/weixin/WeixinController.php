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
            \Log::info('echostr');
            $this->weChatApiClass->valid();
        }


        if($this->weChatApiClass->checkSignature()){
            $postStr = isset($GLOBALS["HTTP_RAW_POST_DATA"]) ? $GLOBALS["HTTP_RAW_POST_DATA"] : '';
            $postStr = var_export($postStr,true);
            \Log::info('接收微信信息:'.$postStr);
            
            \Log::info('消息验证成功');
            $string = $this->weChatApiClass->responseMsg();
            \Log::info('回调微信信息：'.$string);
            return $string;
        }else{
            \Log::info('消息验证失败');
        }

    }
}
