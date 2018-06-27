<?php
namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

/**
 * 前端基类控制器
 * Description of CController
 *
 * @author dell
 */
class CController extends Controller{
    
    
    public function __construct() {
        
    }
    
    /**
     * 判断用户是否登录
     * @return type
     */
    public function checkLogin(){
        return Auth::check();
    }
    
    /**
     * 获取登录用户信息
     * @return type
     */
    public function getUserInfo(){
        return Auth::user();
    }

    /**
     * 微信授权登录
     * @return type
     */
    public function wxAuthorize($snsapi_userinfo = false){
        //获取当前页面
        $redirect = request()->getUri();

        //微信授权回调地址
        $url = route('f_wx_auth2');

        if(request()->session()->has('wxAuthorize')){
            $wxAuthorize = request()->session()->get('wxAuthorize');
            if($snsapi_userinfo === true && $wxAuthorize['scope'] != 'snsapi_userinfo'){
                $redirect = $this->weChatApiClass->getWeChatAuthCode($url,$redirect,$snsapi_userinfo);
                $this->weChatApiClass->redirect($redirect);exit;
            }else{
                #1.检验用户网页授权凭证（access_token）是否有效
                $valid_result = $this->weChatApiClass->getUserAuthorizeAccessTokenValid($wxAuthorize['access_token'],$wxAuthorize['openid']);
                if(!$valid_result){

                    #2.刷新user access token  ||　refresh user access token还失效 重新获取授权
                    $res = $this->weChatApiClass->refreshUserAuthorizeAccessToken($wxAuthorize['refresh_token']);
                    if(!isset($res['errcode'])){
                        $res['expires_time'] = time() + $res['expires_in'];
                        $res['userinfo'] = [];
                        request()->session()->put('wxAuthorize', $res);
                    }
                }
            }

            return true;
        }else{
            $redirect = $this->weChatApiClass->getWeChatAuthCode($url,$redirect,$snsapi_userinfo);
            $this->weChatApiClass->redirect($redirect);exit;
        }
    }

    /**
     * 获取微信授权信息
     * @return type
     */
    public function getWxAuthorizeInfo(){
        if(request()->session()->has('wxAuthorize')){
            return request()->session()->get('wxAuthorize');
        }else{
            return false;
        }
    }
}
