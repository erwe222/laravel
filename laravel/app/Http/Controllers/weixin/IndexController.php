<?php
namespace App\Http\Controllers\weixin;
use Illuminate\Http\Request;


class IndexController extends CController{

	protected $weChatApiClass;
    
    public function __construct(){
    	parent::__construct();
        
        $this->weChatApiClass 	= new \App\Model\FunctionClass\WeChatApi();


        $config = config('app.config.wechat');
        $this->appId        = $config['appId'];
        $this->appsecret    = $config['appsecret'];
        $this->weChatJsSDK   = new \App\Model\FunctionClass\WeChatJsSDK($this->appId,$this->appsecret);
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


    public function test(){

        $is_wx = false;
        $wx_info = [];
        if(isWeiXin()){
            $is_wx = true;
            $this->wxAuthorize(false);
            $wxAuthorize = request()->session()->get('wxAuthorize');
            $res = $this->weChatApiClass->getUserAuthorizedUserInfo($wxAuthorize['access_token'],$wxAuthorize['openid']);
            $wx_info = $res;
        }

        var_dump($wx_info);

        $res = $this->weChatJsSDK->getSignPackage();
        // return view('weixin.love.Love',['weixin_config'=>$res]);
    }

    public function vodio(){

        return view('weixin.love.vodio');
    }
}