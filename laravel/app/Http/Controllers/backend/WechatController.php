<?php
namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;

class WechatController extends CController{

	protected $wxTokenModel;

    public function __construct(){
    	parent::__construct();

        $this->wxTokenModel 	= new \App\Model\WxToken();

        $this->wxMenuPulishModel= new \App\Model\WxMenu();

        $this->WeChatApiClass 	= new \App\Model\FunctionClass\WeChatApi();
    }

    /**
     * 查看微信access token 列表页面
     * @param \Illuminate\Http\Request $request
     */
	public function wexiTokenView(){
		return view('backend.wechat.wexitoken-view');
	}


	/**
     * 获取微信access token 列表数据
     * @param \Illuminate\Http\Request $request
     */
	public function wexiTokenData(Request $request){

        $params = $this->queryDatatableParams($request);
        $data = [];
        if(isset($params['search']['appid'])){
            $data['app_id'] = $params['search']['appid'];
        }

        if(!empty($params['orderBy']) && !empty($params['sort'])){
            $data['orderBy']    = $params['orderBy'];
            $data['sort']       = $params['sort'];
        }

        $data['offset']     = $params['offset'];
        $data['pagesize']   = $params['pagesize'];
        $lists = $this->wxTokenModel->findTokenList($data);

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
     * 微信公众号发布菜单管理
     * @param \Illuminate\Http\Request $request
     */
    public function wechatMenu(Request $request){
        return view('backend.wechat.wechatmenu-view');
    }

	/**
     * 微信公众号发布新的菜单页面
     * @param \Illuminate\Http\Request $request
     */
    public function createMenuBox(Request $request){
    	$json = '';
    	$menu_josn = $this->WeChatApiClass->getMenu();
    	$res= json_decode($menu_josn,true);
    	if(isset($res['menu'])){
            $json = json_encode($res['menu']);
    	}

    	return view('backend.wechat.createmenubox-view',['json_data'=>$json]);
    }

    /**
     * 微信公众号添加新的菜单
     * @param \Illuminate\Http\Request $request
     */
    public function createMenu(Request $request){
    	$status = $request->input('status',2);
    	$json = $request->input('jsondata','');


        $json11 = json_encode(json_decode($json,true));
        $menu_josn = $this->WeChatApiClass->getMenu();
    	$res= json_decode($menu_josn,true);
    	if(isset($res['menu'])){
            $json22 = json_encode($res['menu']);
            if($json11 == $json22){
                return $this->returnData([], '该菜单与现有的公众号菜单一致无需重复发布', 305);
            }
    	}

    	$user_info = $this->getUserInfo();
        
    	$data = [
            'menu_json'=>$json11,
            'admin_id' =>$user_info['id'],
            'created_at'=>date('Y-m-d H:i:s'),
            'status'=>$status
    	];
        if($status == 1){
            $data['updated_at'] = date('Y-m-d H:i:s');
        }

    	$res = $this->wxMenuPulishModel->addMenu($data);
    	if(!$res){
            return $this->returnData([], '菜单保存失败', 305);
    	}

    	if($status == 1){
            $update_res = $this->WeChatApiClass->updateMenu($json);
            if($update_res['errcode'] == 0){
                return $this->returnData([], '菜单发布成功', 200);
            }else{
                return $this->returnData([], '菜单发布失败', $update_res['errcode']);
            }
    	}else{
            return $this->returnData([], '菜单保存成功', 200);
    	}
    }


    /**
     * 获取公众号菜单发布列表数据
     * @param \Illuminate\Http\Request $request
     */
	public function wechatMenuData(Request $request){
		$params = $this->queryDatatableParams($request);
        $data = [];
        if(isset($params['search']['appid'])){
            $data['app_id'] = $params['search']['appid'];
        }

        if(!empty($params['orderBy']) && !empty($params['sort'])){
            $data['orderBy']    = $params['orderBy'];
            $data['sort']       = $params['sort'];
        }

        $data['offset']     = $params['offset'];
        $data['pagesize']   = $params['pagesize'];
        $lists = $this->wxMenuPulishModel->findWxMenuList($data);

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
     * 微信公众号发布新的菜单
     * @param \Illuminate\Http\Request $request
     */
    public function updateMenu(){
		$update_res = $this->WeChatApiClass->updateMenu($json);

		var_dump($update_res);
    }

}
