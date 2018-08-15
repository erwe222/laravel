<?php
namespace App\Http\Controllers\weixin;
use Illuminate\Http\Request;


class IndexController extends CController{

	protected $weChatApiClass;
    
    public function __construct(){
    	parent::__construct();
        
        $this->weChatApiClass 	= new \App\Model\FunctionClass\WeChatApi();
    }


	/**
     * 主页信息
     * @param \Illuminate\Http\Request $request
     * @return type
     */
	public function index(){
		return view('weixin.index.index');
	}

	public function message(){

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