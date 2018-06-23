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

        $messageXml = isset($GLOBALS ["HTTP_RAW_POST_DATA"]) ? $GLOBALS ["HTTP_RAW_POST_DATA"] : file_get_contents("php://input");
        $message = var_export($messageXml,true);

        \Log::info(file_get_contents("php://input"));
        \Log::info('收到消息');
        if($this->weChatApiClass->checkSignature()){
            \Log::info('消息验证成功');
            $this->weChatApiClass->responseMsg();
        }else{
            \Log::info('消息验证失败');
        }

    }
}
