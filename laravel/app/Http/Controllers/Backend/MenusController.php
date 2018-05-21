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
        return view('Backend.menus.menu-view');
    }

    /**
     * 获取菜单列表数据
     * @param \Illuminate\Http\Request $request
     */
    public function getMenuList(Request $request){
        $menu_list = $this->menuModel->findMenuList();
        return response()->json(['total'=>$menu_list['total'],'rows'=>$menu_list['data']]);
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
        $res = $this->menuModel->addMenu($data);
        if($res){
            
        }
    }
    
    /**
     * 添加菜单列表数据
     * @param \Illuminate\Http\Request $request
     */
    public function updateMenu(Request $request){
        
    }
    
    public function menuViewTest(){
        return view('backend.menus.menu-viewtest');
    }
    
    /**
     * 获取菜单列表数据
     */
    public function getMenuViewTest(){
        $aa = [
            ['id'=>'1','name'=>'台式电脑','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'2','name'=>'笔记本电脑','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'3','name'=>'液晶显示器','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'4','name'=>'音箱','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'5','name'=>'游戏机','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'6','name'=>'移动电话','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'7','name'=>'台式电脑','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'8','name'=>'点阵式打印机','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'9','name'=>'台式电脑','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'10','name'=>'笔记本电脑','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'11','name'=>'液晶显示器','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'12','name'=>'音箱','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'13','name'=>'液晶显示器','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'14','name'=>'液晶显示器','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'15','name'=>'液晶显示器','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'16','name'=>'液晶显示器','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01']
        ];
        return response()->json(['data'=>$aa,'page'=>$_REQUEST['page'],'totalPage'=>1000,'totalCount'=>16,'repeatitems'=>time(),'test'=>1000]);
    }
    
    public function menuViewTest2(){
        return view('backend.menus.menu-viewtest2');
    }
    
    /**
     * 获取菜单列表数据
     */
    public function getMenuViewTest2(){
        $aa = [
            ['id'=>'1','name'=>'台式电脑','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'2','name'=>'笔记本电脑','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'3','name'=>'液晶显示器','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'4','name'=>'音箱','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'5','name'=>'游戏机','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'6','name'=>'移动电话','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'7','name'=>'台式电脑','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'8','name'=>'点阵式打印机','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'9','name'=>'台式电脑','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'10','name'=>'笔记本电脑','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'11','name'=>'液晶显示器','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'12','name'=>'音箱','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'13','name'=>'液晶显示器','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'14','name'=>'液晶显示器','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'15','name'=>'液晶显示器','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'16','name'=>'液晶显示器','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01']
        ];
        return response()->json(['draw'=>$_REQUEST['draw'],'recordsTotal'=>1000,'recordsFiltered'=>16,'data'=>$aa]);
    }
    
    
}
