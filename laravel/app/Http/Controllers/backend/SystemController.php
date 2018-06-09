<?php
namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;

/**
 * Description of SystemController
 *
 * @author dell
 */
class SystemController extends CController{

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

}
