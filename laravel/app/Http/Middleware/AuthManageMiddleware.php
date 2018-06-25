<?php
namespace App\Http\Middleware;

use Closure;
use App\Model\FunctionClass\AuthManage;
use Illuminate\Support\Facades\Auth;

/**
 * 用户授权判断中间件
 */
class AuthManageMiddleware
{
    /**
     * Handle an incoming request.
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Auth::shouldUse('admin');

        if(config('app.config.authverify')){
            $path   = '/'.$request->path();
            $authManage = new AuthManage($request->user()->id);
            $auth_result = $authManage->verify($path);
            if(!$auth_result){
                abort(401,'请求未授权');
            }
        }

        return $next($request);
    }
}
