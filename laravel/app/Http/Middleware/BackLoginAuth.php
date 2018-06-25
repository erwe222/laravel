<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

/**
 * 后台用户登录授权中间件
 * @author dell
 */
class BackLoginAuth {
    
    /**
     * Handle an incoming request.
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Auth::shouldUse('admin');

        $arr = [
            'b_auth_tologin',
            'b_auth_ptlogin',
            'b_auth_code',
            'b_auth_sendemail',
            'b_auth_checkforgotpwd',
            'b_auth_resetpwd'
        ];
        //过滤不需要登录的控制器方法
        if(!in_array( $request->route()->getAction()['as'],$arr)){
            if(!Auth::check()){
                if($request->ajax()){
                    abort(403,'登录用户已失效');
                }else{
                    return redirect(route('b_auth_tologin'));
                }
            }else if($request->user()->status != 10){
                Auth::guard('admin')->logout();
                $request->session()->invalidate();
                if($request->ajax()){
                    abort(403,'该用户已禁止登录');
                }else{
                    return redirect(route('b_auth_tologin'));
                }
            }
        }

        return $next($request);
    }
}
