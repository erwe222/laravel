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
            $content = \Request::getContent();
            recordLog(1,'接收微信信息:'.$content);

            $string = $this->weChatApiClass->responseMsg();

            recordLog(1,'回调微信信息：'.$string);
            return $string;
        }else{
            recordLog(1,'消息验证失败');
        }

    }
}
