<?php
namespace App\Http\Controllers\backend;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\CreateActionLogEvent;
use Illuminate\Support\Facades\Mail;
use App\Helpers\Des;

/**
 * Description of AuthController
 *
 * @author dell
 */
class AuthController extends CController{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->middleware('guest:admin')->except('logout');
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
            $result = $this->guard()->attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ], (bool)$request->input('remember'));
            if($result){
                $user = $this->getUserInfo();
                $this->createActionLog([
                    'type'=>5,
                    'content'=>'['.$user->name.']登录了后台'
                ]);
            }
            return response()->json(['result'=>$result,'code'=>303]);
        }
        return response()->json(['result'=>false,'code'=>403]);
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
            'type'=>6,
            'content'=>'['.$user->name.']退出了后台',
        ]);
        
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
        $desSecret  =  config('app.config.desSecret');
        $des = new Des($desSecret);
        $email = $request->input('email','1427905139@qq.com');
        $token = "{$email}|".date('Y-m-d H:i:s');
        $token = $des->encrypt($token);
        $link = route('b_auth_checkemail', ['token'=>$token]);
        $flag = Mail::send('emails.ForgotPassword',['name'=>'CMS系统22','email'=>$email,'link'=>$link],function($message){
            $message ->to($email)->subject('CMS找回密码');
        });

        if(!$flag){
            echo '发送邮件成功，请查收！';
        }else{
            echo '发送邮件失败，请重试！';
        }
    }
    
    /**
     * 找回密码token验证
     */
    public function checkEmail(Request $request){
        
    }
}