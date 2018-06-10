<?php
namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;

/**
 * Description of MenusController
 *
 * @author dell
 */
class MenusController extends CController{
    
    protected $menuModel;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->menuModel = new \App\Model\Menus;
    }
    
    /**
     * 菜单管理页面
     */
    public function menuView(){
        return view('backend.menus.menu-view');
    }

    /**
     * 获取菜单列表数据
     * @param \Illuminate\Http\Request $request
     */
    public function getMenuList(Request $request){
        $params = $this->queryDatatableParams($request);
        $data = [];
        if(isset($params['search']['name']) && !empty($params['search']['name'])){
            $data['name'] = addslashes($params['search']['name']);
        }
        
        if(isset($params['search']['status'])){
            $data['status'] = (int)$params['search']['status'];
        }

        if(!empty($params['orderBy']) && !empty($params['sort'])){
            $data['orderBy']    = $params['orderBy'];
            $data['sort']       = $params['sort'];
        }

        $data['offset']     = $params['offset'];
        $data['pagesize']   = $params['pagesize'];
        
        $menu_list = $this->menuModel->findMenuList($data);
        return response()->json([
            'code'=>200,
            'draw'=>$params['draw'],
            'recordsTotal'=>$menu_list['total'],
            'recordsFiltered'=>$menu_list['total'],
            'data'=>$menu_list['data'],
            'page_index'=>$menu_list['page_index']
        ]);
    }
    
    public function getMenuTreeList(){
        $res = $this->menuModel->getMenuSelect();
        return response()->json($res);
    }
    
    /**
     * 添加菜单列表数据
     * @param \Illuminate\Http\Request $request
     */
    public function addMenu(Request $request){

        $data = [];
        $data['id']        = (int)$request->input('id','');
        $data['parent_name']        = $request->input('parent','');
        $data['name']       = $request->input('name','');
        $data['url']     = $request->input('url','');
        $data['icon']      = $request->input('icon','');
        $data['type']        = $request->input('type','');
        $data['status'] = $request->input('status','');

        $result = $this->menuModel->addMenu($data);
        if($result['result']){
            $this->createActionLog([
                'type'=>1,
                'content'=>"新增了[{$data['name']}]的菜单信息",
            ]);
        }
        return $this->returnData([], $result['message'], $result['code']);
    }
    
    /**
     * 添加菜单列表数据
     * @param \Illuminate\Http\Request $request
     */
    public function updateMenu(Request $request){
        $data = [];
        $data['id']        = (int)$request->input('id','');
        $data['parent_name']        = $request->input('parent','');
        $data['name']       = $request->input('name','');
        $data['url']     = $request->input('url','');
        $data['icon']      = $request->input('icon','');
        $data['type']        = $request->input('type','');
        $data['status'] = $request->input('status','');
        
        $result = $this->menuModel->updateMenu($data['id'],$data);
        if($result['result']){
            $this->createActionLog([
                'type'=>1,
                'content'=>"更新了[ID:{$data['id']}]菜单信息",
            ]);
        }
        return $this->returnData([], $result['message'], $result['code']);
    }
    
    
    
}
