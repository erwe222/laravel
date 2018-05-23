<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use Validator;
use App\Helpers\UploadFiles;

/**
 * Description of AdminControllor
 *
 * @author dell
 */
class AdminController extends CController{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->adminModel = new \App\Model\Admin();
    }
    
    /**
     * 管理员简介
     * @param \Illuminate\Http\Request $request
     */
    public function profile(Request $request){
        return view('backend.admin.profile-view');
    }
    
    /**
     * 修改管理员密码
     * @param \Illuminate\Http\Request $request
     */
    public function changePwd(Request $request){
        $validator = Validator::make($request->all(), [
            'old_pwd' => 'required',
            'new_pwd' => 'required',
        ],['required'=>':attribute 字段不能为空.']);

        if ($validator->fails()) {
            $error = $validator->errors()->all();
            return $this->returnData([],$error[0],301);
        }
        
        $admin_id   = $this->getUserInfo()->id;
        $old_pwd    = $request->input('old_pwd');
        $new_pwd    = $request->input('new_pwd');
        
        $res = $this->adminModel->editPwd($admin_id,$old_pwd,$new_pwd);
        return $this->returnData([], $res['message'], $res['code']);
    }
    
    /**
     * 修改管理员简介信息
     * @param \Illuminate\Http\Request $request
     */
    public function changeProfile(Request $request){
        $validator = Validator::make($request->all(), [
            'old_pwd' => 'required',
            'new_pwd' => 'required',
        ],['required'=>':attribute 字段不能为空.']);
        
        if ($validator->fails()) {
            $error = $validator->errors()->all();
            return $this->returnData([],$error[0],301);
        }
        
        
    }
    
    /**
     * 上传管理员头像
     * @param \Illuminate\Http\Request $request
     */
    public function uploadPortrait(Request $request){
        $files = $_FILES;
        $upload_model = new UploadFiles($files);
        $upload_result = $upload_model->upload();
        if(!$upload_result && (count($files) != count($upload_model->success_file))){
            return $this->returnData([],$upload_model->getErrorMsg(),305);
        }

        $img_info = $upload_model->success_file[0];
        $res = $this->adminModel->updateProfilePic($this->getUserInfo()->id,$img_info['save_dir']);
        return $this->returnData([], $res['message'], $res['code']);
    }

}
