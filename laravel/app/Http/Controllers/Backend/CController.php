<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

/**
 * 后台基类控制器
 * Description of CController
 *
 * @author dell
 */
class CController extends Controller{
    
    
    public function __construct() {
        Auth::shouldUse('admin');
    }

    /**
     * 判断管理员是否登录
     * @return type
     */
    public function checkLogin(){
        return Auth::check();
    }
    
    /**
     * 获取管理员信息
     * @return type
     */
    public function getUserInfo(){
        return Auth::user();
    }
    
    /**
     * 获取 dataTables 表格请求数据
     */
    public function queryDatatableParams(){
        
    }
    
    /**
     * 格式化返回数据
     */
    public function returnData($data,$msg,$code=200,$httpstatus=200){
        return response()->json([
            'code'=>$code,
            'message'=>$msg,
            'data'=>$data
        ], $httpstatus);
    }


}
