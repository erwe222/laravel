<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('guest')->except('logout');
        
        //$this->middleware('guest:admin')->except('logout');
    }
    
    /**
     * 用户登录请求控制器
     * @param \Illuminate\Http\Request $request
     * @return type
     */
    public function postLogin(Request $request){
        if(captcha_check($request->input('code'))){
            $result = Auth::guard()->attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ], (bool)$request->input('remember'));
            return response()->json(['result'=>$result,'code'=>303]);
        }
        return response()->json(['result'=>false,'code'=>403]);
    }
    
    
    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::guard()->logout();

        $request->session()->invalidate();

        return redirect('/');
    }

    /**
     * 自定义认证驱动
     * @author 晚黎
     * @date   2016-09-05T23:53:07+0800
     * @return [type]                   [description]
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }
}
