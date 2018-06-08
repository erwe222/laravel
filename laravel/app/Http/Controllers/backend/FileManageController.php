<?php
namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;
use Validator;


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
     *
     *
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
                    'filename'=> (!mb_is_utf8($filename)) ? iconv("gb2312", "utf-8", $filename) :$filename,
                    'filesize'=>$this->getsize(filesize($path_file_dir),'kb').' KB',
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



    /*
     * 删除日志文件
     *
     */
    public function deleteLogFile(Request $request){
        $filename   = $request->input('filename','');
        $code   = $request->input('code','');
        $path       = base_path('storage/logs');
        $filename   = iconv(mb_str_encoding($filename), $code, $filename);
        $res        = \File::delete($path.'/'.$filename);
        if($res){
            return $this->returnData([],'删除成功',200);
        }else{
            return $this->returnData([],'删除失败',305);
        }
    }

    public function getsize($size, $format = 'kb'){
        $p = 0;
        if ($format == 'kb') {
            $p = 1;
        } elseif ($format == 'mb') {
            $p = 2;
        } elseif ($format == 'gb') {
            $p = 3;
        }

        $size /= pow(1024, $p);
        return number_format($size, 2);
    }

}
