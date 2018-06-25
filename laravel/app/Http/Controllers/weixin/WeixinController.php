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
            // $content = \Request::getContent();
            // $content = var_export($content,true);
            // \Log::info('接收微信信息:'.$content);
            // recordLog(1,'接收微信信息:'.$content);

            $weiChatNews_model = new \App\Model\FunctionClass\WeChatNews();
            $obj = $weiChatNews_model->getXmlMsg();
            recordLog(1,'接收微信信息:',$obj);


            $string = $this->weChatApiClass->responseMsg();

            return $string;
        }else{
            recordLog(1,'消息验证失败');
        }

    }
}
