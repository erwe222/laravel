<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


class AdminController extends Controller{
    
    public function MenuView(){
        return view('admin.menu-view');
    }
    
    public function RoleView(){
        return view('admin.role-view');
    }
    
    
    public function menuViewTest(){
        return view('admin.menu-viewtest');
    }
    
    /**
     * 获取菜单列表数据
     */
    public function getMenusListData(){
        
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
//        return response()->json(['data'=>[],'draw'=>1,'recordsTotal'=>0,'recordsFiltered'=>0]);
//        return response()->json(['data'=>$aa,'page'=>1,'totalPage'=>1000,'totalCount'=>16,'repeatitems'=>time(),'test'=>1000]);
    }
    
    public function menuviewtest2(){
        $aa = [
            ['id'=>'1','order_pre_no'=>'台式电脑','logistics_name'=>'note','shipping_price'=>'是'],
            ['id'=>'2','order_pre_no'=>'台式电脑','logistics_name'=>'note','shipping_price'=>'是'],
            ['id'=>'3','order_pre_no'=>'台式电脑','logistics_name'=>'note','shipping_price'=>'是'],
            ['id'=>'4','order_pre_no'=>'台式电脑','logistics_name'=>'note','shipping_price'=>'是'],
            ['id'=>'5','order_pre_no'=>'台式电脑','logistics_name'=>'note','shipping_price'=>'是'],
            ['id'=>'6','order_pre_no'=>'台式电脑','logistics_name'=>'note','shipping_price'=>'是'],
            ['id'=>'7','order_pre_no'=>'台式电脑','logistics_name'=>'note','shipping_price'=>'是'],
            ['id'=>'1','order_pre_no'=>'台式电脑','logistics_name'=>'note','shipping_price'=>'是'],
            ['id'=>'2','order_pre_no'=>'台式电脑','logistics_name'=>'note','shipping_price'=>'是'],
            ['id'=>'3','order_pre_no'=>'台式电脑','logistics_name'=>'note','shipping_price'=>'是'],
            ['id'=>'4','order_pre_no'=>'台式电脑','logistics_name'=>'note','shipping_price'=>'是'],
            ['id'=>'5','order_pre_no'=>'台式电脑','logistics_name'=>'note','shipping_price'=>'是'],
            ['id'=>'6','order_pre_no'=>'台式电脑','logistics_name'=>'note','shipping_price'=>'是'],
            ['id'=>'7','order_pre_no'=>'台式电脑','logistics_name'=>'note','shipping_price'=>'是'],
        ];
        return response()->json(['total'=>1000,'rows'=>$aa]);
    }
    
    public function profile(){
        return view('admin.profile-view');
    }
}
