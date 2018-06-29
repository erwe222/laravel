<?php
namespace App\Http\Controllers\backend;
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
        $this->rolesModel = new \App\Model\Roles();
        $this->adminRolesMdel = new \App\Model\AdminRoles();
        $this->actionLogModel = new \App\Model\ActionLog();
    }


    /**
     * 管理员简介
     * @param \Illuminate\Http\Request $request
     */
    public function index(Request $request){
        return view('backend.admin.index');
    }


    
    /**
     * 管理员简介
     * @param \Illuminate\Http\Request $request
     */
    public function profile(Request $request){
        $admin_info = $this->getUserInfo();
        $res = $this->actionLogModel->findAdminActionList($admin_info->id);
        return view('backend.admin.profile-view',['actionLogList'=>$res,'admin_info'=>$admin_info]);
    }


    /**
     * 修改管理员密码
     * @param \Illuminate\Http\Request $request
     */
    public function changePwdView(Request $request){
        $admin_info   = $this->getUserInfo();
        return view('backend.admin.changepwd-view',['admin_email'=>$admin_info->email]);
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
        $data = $request->all();

        $dataParams = [];

        if(isset($data['nickname'])){
            $dataParams['name'] = $data['nickname'];
        }

        if(isset($data['phone'])){
            $dataParams['telephone'] = $data['phone'];
        }

        if(isset($data['sex'])){
            $dataParams['sex'] = $data['sex'];
        }

        $res = $this->adminModel->editDetail($this->getUserInfo()->id,$dataParams);
        return $this->returnData([], $res['message'], $res['code']);
    }
    
    /**
     * 上传管理员头像
     * @param \Illuminate\Http\Request $request
     */
    public function uploadPortrait(Request $request){
        $base_path = public_path('upload/head-portrait/');
        $img = $_POST['image'];
        $img = str_replace('data:image/png;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
        $name = rand_string() . uniqid() . date('His') . '.png';
        $file = $base_path .$name;
        $file_res = file_put_contents($file, $data);
        if(!$file_res){
            return $this->returnData([], '图片上传失败', 302);
        }
        $admin_id   = $this->getUserInfo()->id;
        $url = 'upload/head-portrait/'.$name;
        $res = $this->adminModel->updateProfilePic($admin_id,$url);
        $file_url = asset($url);
        if($res['result']){
            return $this->returnData(['file_url'=>$file_url], '图片上传成功', 200);
        }else{
            return $this->returnData([], '图片上传失败', 305);
        }
    }

    /**
     * 获取管理员列表数据
     * @param \Illuminate\Http\Request $request
     */
    public function getAdminListData(Request $request){
        $params = $this->queryDatatableParams($request);
        $data = [];
        if(isset($params['search']['name']) && !empty($params['search']['name'])){
            $data['name'] = addslashes($params['search']['name']);
        }
        
        if(isset($params['search']['email'])){
            $data['email'] = $params['search']['email'];
        }

        if(isset($params['search']['status'])){
            $data['status'] = $params['search']['status'];
        }

        if(!empty($params['orderBy']) && !empty($params['sort'])){
            $data['orderBy']    = $params['orderBy'];
            $data['sort']       = $params['sort'];
        }

        $data['offset']     = $params['offset'];
        $data['pagesize']   = $params['pagesize'];
        $lists = $this->adminModel->findAdminsList($data);
        return response()->json([
            'code'=>200,
            'draw'=>$params['draw'],
            'recordsTotal'=>$lists['total'],
            'recordsFiltered'=>$lists['total'],
            'data'=>$lists['data'],
            'page_index'=>$lists['page_index']
        ]);
    }


    /**
     * 查看管理员权限页面
     * @param \Illuminate\Http\Request $request
     */
    public function adminPermissionsView(Request $request){
        $id = $request->input('id',0);

        //角色列表
        $roleData = $this->rolesModel->getRoleAll();

        //管理员的角色信息
        $admonRoleData = $this->adminRolesMdel->getAdminRoles($id);
        return view('backend.admin.adminpermissionsview',[
            'adminid'=>$id,
            'roleData'=>$roleData,
            'admonRoleData'=>$admonRoleData,
        ]);
    }

    /**
     * 更新管理员角色信息
     * @param \Illuminate\Http\Request $request
     */
    public function updateAdminRole(Request $request){
        $id = $request->input('id');
        $roleid = $request->input('roleid');

        $adminRole = $this->adminRolesMdel->findAdminId($id);
        if($adminRole){
            $res = $this->adminRolesMdel->updateAdminRole($adminRole['id'],$id,$roleid);
        }else{
            $res = $this->adminRolesMdel->addUserRole($id,$roleid);
        }

        if($res){
            return $this->returnData([], '角色分配成功', 200);
        }

        return $this->returnData([], '角色分配失败', 305);
    }

    /**
     * 添加管理员
     * @param \Illuminate\Http\Request $request
     */
    public function createAdmin(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'name' => 'required',
            'pwd' => 'required',
        ],['required'=>':attribute 字段不能为空.']);

        if ($validator->fails()) {
            $error = $validator->errors()->all();
            return $this->returnData([],$error[0],301);
        }

        $data = [
            'email'     =>$request->input('email'),
            'name'      =>$request->input('name'),
            'status'    =>$request->input('status'),
            'password'  =>$request->input('pwd'),
        ];

        $res = $this->adminModel->addAdmin($data);
        if($res['result']){
            $this->createActionLog([
                'type'=>1,
                'content'=>"添加了新的管理人员【{$data['name']}】信息"
            ]);
        }
        return $this->returnData([], $res['message'], $res['code']);
    }
    
    /**
     * 更新管理状态
     */
    public function updateAdminStatus(Request $request){
        $admin_id = (int)$request->input('id',0);
        $status = (int)$request->input('status',0);
        if($admin_id == 0){
            return $this->returnData([],'参数错误',301);
        }
        
        if($admin_id == $this->getUserInfo()->id){
            return $this->returnData([],'管理员不能修改自己的状态',302);
        }
        
        $res = $this->adminModel->editDetail($admin_id,['status'=>$status]);
        if($res['result']){
            $name = $this->getUserInfo()->name;
            $s = ($status ==10)?'启用':'禁止登录';
            $this->createActionLog([
                'type'=>2,
                'content'=>"管理员[{$name}]状态被修改为【{$s}】 状态"
            ]);
            return $this->returnData([], '管理员状态修改成功', 200);
        }
        return $this->returnData([], '管理员状态修改失败', 305);
    }

}
