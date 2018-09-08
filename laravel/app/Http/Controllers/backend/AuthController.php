<?php
namespace App\Http\Controllers\backend;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\CreateActionLogEvent;
use Illuminate\Support\Facades\Mail;
use App\Helpers\Des;
use App\Mail\SendForgotPassword;
use App\Events\CmsMessagePushEvent;

/**
 * Description of AuthController
 *
 * @author dell
 */
class AuthController extends CController{

    public $adminModel;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->middleware('guest:admin')->except('logout');

        $this->adminModel = new \App\Model\Admin();
    }
    
    /**
     * 后台登录页面
     * @param \Illuminate\Http\Request $request
     * @return type
     */
    public function login(Request $request){
        return view('backend.auth.login');
    }

    /**
     * 用户登录请求控制器
     * @param \Illuminate\Http\Request $request
     * @return type
     */
    public function ptLogin(Request $request){
        if(captcha_check($request->input('code'))){
            $admin = $this->adminModel->findEmail($request->input('email'));
            if(!$admin){
                return $this->returnData([],'账号不存在',301);
            }
            
            if (!\Hash::check($request->input('password'), $admin->password)) {
                return $this->returnData([],'账号密码输入错误',302);
            }
            
            if ($admin->status != 10) {
                return $this->returnData([],'该账号已禁止登录，请联系管理员',303);
            }
            
            if (strtotime($admin->expiry_time) < time()) {
                return $this->returnData([],'密码已过期，请联系管理员进行重置...',303);
            }

            $result = $this->guard()->attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ], (bool)$request->input('remember'));
            if($result){
                $user = $this->getUserInfo();
                $request->setTrustedProxies(array('10.32.0.1/16'));  
                $ip = $request->getClientIp();
                $this->createActionLog([
                    'type'=>7,
                    'content'=>'登录后台，登录IP:'.$ip
                ]);

                event(new CmsMessagePushEvent([
                    'channel'           =>'loginchannel',              #渠道名
                    'channeltype'       =>2,                          #渠道类型（1:个人渠道  2:群发渠道）
                    'msgid'             =>0,                          #接收人id（若渠道类型为群发消息则该值默认为0，否则为管理员id）
                    'msgtype'           =>1,               #消息提示类型
                    'message'           =>'['.$user->name.'] 登录后台管理系统',               #消息详情
                    'params'            =>[],       #附加参数
                ]));

                return $this->returnData([],'登录成功',200);
            }
            return $this->returnData([],'登录失败',305);
        }
        
        return $this->returnData([],'验证码输入错误',304);
    }
    
    /**
     * 用户退出登录请求控制器
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $user = $this->getUserInfo();
        $this->createActionLog([
            'type'=>8,
            'content'=>'退出后台',
        ]);

        event(new CmsMessagePushEvent([
            'channel'           =>'loginchannel',              #渠道名
            'channeltype'       =>2,                          #渠道类型（1:个人渠道  2:群发渠道）
            'msgid'             =>0,                          #接收人id（若渠道类型为群发消息则该值默认为0，否则为管理员id）
            'msgtype'           =>1,               #消息提示类型
            'message'           =>'['.$user->name.'] 退出后台管理系统',               #消息详情
            'params'            =>[],       #附加参数
        ]));

        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect(route('b_auth_tologin'));
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }

    /**
     * 发送找回密码邮件
     */
    public function sendEmail(Request $request){
    	$result = 0;
        $email = $request->input('email','837215079@qq.com');
        $admin = $this->adminModel->findEmail($email);


        if(!$admin){
        	return $this->returnData([],'用户不存在',301);
        }

    	$desSecret  =  config('app.config.desSecret');
    	$des = new Des($desSecret);
    	$token = $des->encrypt(date('Y-m-d H:i:s'));
		$update_res = $this->adminModel->setResetToken($admin->id,$token);

		if(!$update_res){
			return $this->returnData([],'邮件发送失败',303);
		}


		$admin->password_reset_token = $token;
		$flag = Mail::send(new SendForgotPassword($admin));
		if(!$flag){
            return $this->returnData([],'邮件发送成功',200);
        }

        return $this->returnData([],'邮件发送失败',303);
    }

    /**
     * 用户找回密码邮件验证
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checkForgotPwd(Request $request){
        $email = $request->input('e','');
        $token = $request->input('token');
        $admin_info = null;
        $result = 1;

        if($email && $token){
        	$desSecret  =  config('app.config.desSecret');
	        $des = new Des($desSecret);
	        $email2 = $des->decrypt($email);
	        $token2 = $des->decrypt($token);
	        if($email2 &&  $token2 && $admin_info = $this->adminModel->findEmail($email2)){
	        	//验证token是否正确
	        	if($admin_info->password_reset_token == $token){
	        		$time1 = strtotime($token2);
	        		$time2 = time();
	        		if(($time2 - $time1) <= 60*60*2){
						$result = 3;
	        		}else{
	        			$result = 4;
	        		}
	        	}else{
	        		$result = 2;
	        	}
	        }
        }

        return view('backend.auth.reset-password-view',['result'=>$result,'admin_info'=>$admin_info]);
    }

    /**
     * 用户找回密码邮件验证
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function resetPwd(Request $request){
    	$id = $request->input('id','');
        $password = $request->input('password','');
        $password2 = $request->input('password2','');
        $token = $request->input('retoken','');

        if(empty($id) || empty($password) || empty($password2) || empty($token)){
			return $this->returnData([],'参数错误',301);
        }

        if($password !== $password2){
			return $this->returnData([],'填写的密码不一致',302);
        }

        $result = $this->adminModel->resetPassword($id,$password,$token);
        if($result['result']){
			return $this->returnData([],'密码重置成功',200);
        }

        return $this->returnData([],$result['message'],$result['code']);
    }
}