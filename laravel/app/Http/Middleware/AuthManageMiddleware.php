<?php
namespace App\Http\Middleware;

use Closure;
use App\Model\FunctionClass\AuthManage;

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
        if(config('app.config.authverify')){
            $path   = '/'.$request->path();
            $method = $request->method();
            $authManage = new AuthManage($request->user()->id);
            $auth_result = $authManage->verify($path);
            if(!$auth_result){
                if($request->ajax()){
                    abort(401,'请求未授权');
                }
                return response()->view('errors.401', [],401);
            }
        }

        return $next($request);
    }
}
