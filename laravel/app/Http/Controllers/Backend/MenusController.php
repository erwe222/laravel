<?php
namespace App\Http\Controllers\Backend;
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
        return view('Backend.manage.menu-view');
    }

    /**
     * 获取菜单列表数据
     * @param \Illuminate\Http\Request $request
     */
    public function getMenuList(Request $request){

        $menu_datas = $this->menuModel->findMenuList();

        return response()->json([
            'total'=>$menu_datas['total'],
            'rows'=>$menu_datas['data'],
        ]);
    }
    
    /**
     * 添加菜单列表数据
     * @param \Illuminate\Http\Request $request
     */
    public function addMenu(Request $request){
        
        
        $data = [];
        $res = $this->menuModel->addMenu();
        if($res){
            
        }
    }
    
    /**
     * 添加菜单列表数据
     * @param \Illuminate\Http\Request $request
     */
    public function updateMenu(Request $request){
        
    }
    
}
