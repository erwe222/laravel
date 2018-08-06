<?php
namespace App\Http\Controllers\weixin;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AuthController extends CController{
    
    public function __construct(){
    	parent::__construct();

        $this->middleware('guest:weixin')->except('logout');

        $con = [
            'accountsid'=>'15d28ad029f680856498915c352811c1',
            'token'=>'22293f258f0db698e792badbe160678c',
            'appid'=>'2ca0f02849f446529639d966dfcd15a2',
        ];

        $this->usersModel = new \App\Model\Users();

        $this->smsModel = new \App\Lib\Sms($con);
    }

    /**
     * 微信登陆页面
     * @param \Illuminate\Http\Request $request
     * @return type
     */
    public function login(Request $request)
    {
        return view('weixin.auth.login');
    }
    
    /**
     * 微信登陆处理页面
     * @param \Illuminate\Http\Request $request
     * @return type
     */
    public function postLogin(Request $request){
        $mobile = $request->input('mobile','');
        $password = $request->input('password','');

        $res = $this->toLogin($mobile,$password);
        if($res){
            return returnData(200,'登录成功',[]);
        }else {
            return returnData(401,'登录失败',[]);
        }
    }

    /**
     * 微信注册页面
     * @param \Illuminate\Http\Request $request
     * @return type
     */
    public function register(Request $request){
	 return view('weixin.auth.register');
    }
    
    /**
     * 微信注册处理页面
     * @param \Illuminate\Http\Request $request
     * @return type
     */
    public function postRegister(Request $request){
        
        $mobile     = $request->input('mobile','');
        $password   = $request->input('password','');
        $code       = $request->input('code','');
        $redir      = $request->input('redir','');

        if(empty($mobile) || empty($password) || empty($code)){
            return returnData(301,'参数错误',[]);
        }

        if($this->usersModel->findMobile($mobile)){
            return returnData(302,'手机号已被使用',[]);
        }

        $res = $this->usersModel->createUser($mobile,$password);
        if($res){
			$this->toLogin($mobile,$password);

            return returnData(200,'注册成功',[]);
        }

        return returnData(305,'注册失败',[]);
    }
    
    /**
     * 发送注册短信验证码
     * @param \Illuminate\Http\Request $request
     */
    public function sendRegisterSms(Request $request){

        $mobile = $request->input('mobile','');
        $type   = $request->input('type','');
        if(empty($mobile)){
            return returnData(301,'请填写手机号',[]);
        }else {
            if($mobile != '18798276809' &&  $mobile != '15885446370'){
                return returnData(305,'发送失败',[]);
            }
        }

        if($this->usersModel->findMobile($mobile)){
            return returnData(302,'手机号已被使用',[]);
        }

        $res = $this->smsModel->SendSms('2ca0f02849f446529639d966dfcd15a2',258714,165154,$mobile,$uid='');

        $data = json_decode($res,true);

        if($data['code'] == '000000'){
            return returnData(200,'发送成功',[]);
        }else{
            //短信发送失败记录错误日志
            return returnData(305,'发送失败',[]);
        }
    }

    /**
     * 用户登录处理操作
     * @param \Illuminate\Http\Request $request
     */
    protected function toLogin($mobile,$password){
        $is_true = Auth::guard('weixin')->attempt(['mobile' => $mobile,'password' => $password], true);
        if(!$is_true){
            return  false;
        }

        //登录成功后可处理业务

        return true;
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard(){
        return Auth::guard('weixin');
    }

    /**
     * 用户退出登录请求控制器
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request){
        $this->guard()->logout();
        $request->session()->invalidate();

        return redirect(route('w_auth_login'));
    }

    /**
     * 微信忘记密码页面
     * @param \Illuminate\Http\Request $request
     * @return type
     */
    public function findpwd(){
        return view('weixin.auth.findpwd');
    }

    /**
     * 微信忘记密码处理页面
     * @param \Illuminate\Http\Request $request
     * @return type
     */
    public function postFindPwd(Request $request){
        return returnData(200,'发送成功',[]);
    }
}