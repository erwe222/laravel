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
            $path   = $request->path();
            $method = $request->method();
            $authManage = new AuthManage(3);
            $auth_result = $authManage->verify($path);
            if(!$auth_result){
                if($request->ajax()){
                    return response()->json([
                        'message'=>'请求未授权...',
                        'code'=>403,
                        'data'=>[],
                        'method'=>"[{$method}]ajax"
                    ]);
                }
                return response()->view('errors.403', [],403);
            }
        }

        return $next($request);
    }
}
