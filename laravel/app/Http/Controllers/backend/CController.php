<?php
namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Events\CreateActionLogEvent;

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
    public function queryDatatableParams(Request $request){
        $params = [];
        $params['draw']     = $request->input('draw',1);
        $params['search']   = [];
        $params['orderBy']  = '';
        $params['sort']     = '';
        $orderBy            = $request->input('orderBy',[]);
        $search             = $request->input('search',[]);
        $params['offset']  = $request->input('start',0);
        $params['pagesize']  = $request->input('length','20');

        if(count($orderBy) > 0){
            $params['orderBy'] = $orderBy[0]['orderByname'];
            $params['sort']    = $orderBy[0]['sort'];
        }
        
        if (count($search) > 0){
            foreach ($search as $v) {
                $params['search'][$v['name']] = $v['value'];
            }
        }
        return $params;
    }
    
    /**
     * 格式化返回数据
     */
    public function returnData($data,$msg='',$code=200,$httpstatus=200){
        return response()->json([
            'code'=>$code,
            'message'=>$msg,
            'data'=>$data
        ], $httpstatus);
    }
    
    /**
     * 添加操作日志
     */
    public function createActionLog($data){
        $user = $this->getUserInfo();
        event(new CreateActionLogEvent([
            'admin_id'=>$user->id,
            'type'=>$data['type'],
            'content'=>$data['content']
        ]));
    }
    
}
