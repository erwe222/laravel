<?php
namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Storage;

/**
 * Description of AdminControllor
 *
 * @author dell
 */
class FileManageController extends CController{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
    }


    /**
     * 管理员简介
     * @param \Illuminate\Http\Request $request
     */
    public function index(Request $request){
        return view('backend.filemanage.filelogs-view');
    }

    /**
     * 获取文件列表
     */
    public function getLogFilelist(Request $request){
        $params = $this->queryDatatableParams($request);

        $path = base_path('storage/logs');
        $dataFiles = [];

        $handler = opendir($path);
        while( ($filename = readdir($handler)) !== false ) 
        {
            if($filename != '.' && $filename != '..' && $filename != '.gitignore')
            {
                $path_file_dir = $path.'/'.$filename;
                $dataFiles[] = [
                    'filename'=> iconv(mb_str_encoding($filename), "utf-8", $filename),
                    'filesize'=>getsize(filesize($path_file_dir),'kb').' KB',
                    'filectime'=>date("Y-m-d H:i:s",filectime($path_file_dir)),
                    'file_code'=>mb_str_encoding($filename),
                ];
            }
        }

        closedir($handler);

        return response()->json([
            'code'=>200,
            'draw'=>$params['draw'],
            'recordsTotal'=>count($dataFiles),
            'recordsFiltered'=>count($dataFiles),
            'data'=>$dataFiles,
            'page_index'=>1
        ]);
    }
    
    /**
     * 读取日志文件
     * @return type
     */
    public function readLogfile(Request $request){
        $filename   = $request->input('filename','');
        $code   = $request->input('code','');
        $path       = base_path('storage/logs');
        $filename   = iconv(mb_str_encoding($filename), $code, $filename);
        $file_path = $path."/".$filename;
        $str = false;
        if(file_exists($file_path)){
            $fp = fopen($file_path,"r");
            $str = fread($fp,filesize($file_path));
            $str = str_replace("\r\n",PHP_EOL,$str);
            $str = str_replace("\n",PHP_EOL,$str);
        }

        return view('backend.filemanage.filelogs-info-view',['fileinfo'=>$str]);
    }

    /*
     * 删除日志文件
     *
     */
    public function deleteLogFile(Request $request){
        $oldname = $filename   = $request->input('filename','');
        $code   = $request->input('code','');
        $path       = base_path('storage/logs');
        $filename   = iconv(mb_str_encoding($filename), $code, $filename);
        $res        = \File::delete($path.'/'.$filename);
        if($res){
            $this->createActionLog([
                'type'=>5,
                'content'=>"删除【{$oldname}】日志文件",
            ]);
            return $this->returnData([],'删除成功',200);
        }else{
            return $this->returnData([],'删除失败',305);
        }
    }
    
    /**
     * 下载日志文件
     * @return type
     */
    public function downloadLogFile(Request $request){
        $oldname = $filename   = $request->input('filename','');
        $code   = $request->input('code','');
        if(!empty($filename) && !empty($code)){
            $path       = base_path('storage/logs');
            $filename   = iconv(mb_str_encoding($filename), $code, $filename);
            $file_path = $path."/".$filename;
            $this->createActionLog([
                'type'=>6,
                'content'=>"下载了【{$oldname}】日志文件",
            ]);
            forceDownloadFile($file_path,$filename);
        }
    }
}
