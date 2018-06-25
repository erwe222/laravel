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
        $dir = [
            ['dir'=>'logs'],
        ];

        $path = storage_path('logs');
        $dataFiles = [];
        if(file_exists($path)){
            $handler = opendir($path);
            while( ($filename = readdir($handler)) !== false ) 
            {
                if($filename != '.' && $filename != '..' && $filename != '.gitignore')
                {
                    $path_file_dir = $path.'/'.$filename;

                    if(is_dir($path_file_dir)){
                        $dir[] = ['dir'=>'logs/'.$filename];
                    }
                }
            }
            closedir($handler);
        }

        return view('backend.filemanage.filelogs-view',['dirdata'=>$dir]);
    }

    /**
     * 获取文件列表
     */
    public function getLogFilelist(Request $request){
        $params = $this->queryDatatableParams($request);

        $url = 'logs';
        if(isset($params['search']['dir']) && !empty($params['search']['dir'])){
            $url = $params['search']['dir'];
        }

        $path = storage_path($url);
        $dataFiles = [];
        if(file_exists($path)){
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
                        'file_type'=>is_file($path_file_dir) ?1:2,
                        'file_dir_url'=>is_dir($path_file_dir) ?$url.'/'.$filename:$url,
                    ];
                }
            }

            closedir($handler);
        }
        

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
        error_reporting(7);
        $filename   = $request->input('filename','');
        $code   = $request->input('code','');
        $url   = $request->input('url','logs');

        $path   = storage_path($url);


        $filename   = iconv(mb_str_encoding($filename), $code, $filename);
        $file_path = $path."/".$filename;

        
        $str = false;
        if(file_exists($file_path)){
            $fp = fopen($file_path,"r");
            if(filesize($file_path) > 0 ){
                $str = fread($fp,filesize($file_path));

                $str = htmlspecialchars($str);
                $str = str_replace("\r\n","<br/>",$str);
                $str = str_replace("\n","<br/>",$str);
            }else{
                $str = '文件为空';
            }
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
        $url   = $request->input('url','logs');
        $path   = storage_path($url);

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
        $url   = $request->input('url','logs');
        $path   = storage_path($url);
        if(!empty($filename) && !empty($code)){
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
