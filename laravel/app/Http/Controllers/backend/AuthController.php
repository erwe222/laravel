<?php
namespace App\Http\Controllers\backend;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\CreateActionLogEvent;

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

        #http://118.24.1.228:8080/backend/auth/checkforgotpwd?e=837215079%40qq.com&token=fNncgjU6c1RowEuI8fHtqqu45A85stX3ZeCRgA9giLhJRleqIjnkEQwVFwgV
        $this->middleware('guest:admin')->except('logout')->except('checkforgotpwd');

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
     * 用户找回密码邮件验证
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checkForgotPwd(Request $request){
        $email = $request->input('e','');
        $token = $request->input('token');


        $result = 0;
        $admin_info = null;

        if(empty($email)){
            $result = '1';
        }else if($admin_info = $this->adminModel->findEmail($email)){
            if($admin_info->password_reset_token != $token){
                $result = '2';
            }
        }

        dd($token);
    }
}