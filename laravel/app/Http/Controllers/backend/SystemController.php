<?php
namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;

/**
 * Description of SystemController
 *
 * @author dell
 */
class SystemController extends CController{



    protected $actionModel;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->actionModel = new \App\Model\ActionLog;
    }

    /**
     * 管理员简介
     * @param \Illuminate\Http\Request $request
     */
    public function index(Request $request){
        return view('backend.system.index-view');
    }
    
    /**
     * 清除视图缓存文件
     */
    public function clearViewCache(){
        $path = base_path('storage/framework/views');
        $dataFiles = [];

        $handler = opendir($path);
        while( ($filename = readdir($handler)) !== false ) 
        {
            if($filename != '.' && $filename != '..' && $filename != '.gitignore')
            {
                \File::delete($path.'/'.$filename);
            }
        }

        closedir($handler);
        
        $this->createActionLog([
            'type'=>5,
            'content'=>"清除了视图缓存文件",
        ]);
        return $this->returnData([],'清除成功',200);
    }

    /**
     * 系统操作日志页面
     * @param \Illuminate\Http\Request $request
     */
    public function record(Request $request){
        $data = $this->actionModel->typeTip;
        return view('backend.system.record-view',[
            'data'=>$data
        ]);
    }

    public function getRecordList(Request $request){
        $params = $this->queryDatatableParams($request);
        $data = [];
        if(isset($params['search']['content']) && !empty($params['search']['content'])){
            $data['content'] = addslashes($params['search']['content']);
        }
        
        if(isset($params['search']['status'])){
            $data['type'] = (int)$params['search']['status'];
        }

        if(!empty($params['orderBy']) && !empty($params['sort'])){
            $data['orderBy']    = $params['orderBy'];
            $data['sort']       = $params['sort'];
        }

        $data['offset']     = $params['offset'];
        $data['pagesize']   = $params['pagesize'];
        
        $action_list = $this->actionModel->findActionList($data);
        $data = $this->actionModel->typeTip;
        foreach($action_list['data'] as $k=>$v){
            $action_list['data'][$k]['type'] = $data[$v['type']];
        }


        return response()->json([
            'code'=>200,
            'draw'=>$params['draw'],
            'recordsTotal'=>$action_list['total'],
            'recordsFiltered'=>$action_list['total'],
            'data'=>$action_list['data'],
            'page_index'=>$action_list['page_index']
        ]);
    }



}
