<?php


namespace App\Http\Controllers\Index;
use App\Http\Controllers\Controller;
use App;
use App\User;

class IndexController extends Controller
{
    public function index(){
//            $test = app('test');
//            $test->callMe('测试服务容器');
        if(\Auth::check() == false){
            echo '请登录后台';exit;
        }
        
        return view('index.index');
    }
    
    public function test(){
        return view('index.test');
    }

    public function getMenuData(){
        $obg = new \App\Model\Menus();
        return $obg->getMenus();
    }
    
    public function main(){
//        echo json_encode(['url'=>'','icon'=>'','title'=>'asdfasd','index'=>"asd"]);
//        echo "{'url':'/auth/menu-page','icon':'icon-desktop','title':'菜单管理',id:'menu-page'}";
        $menus = $this->getMenuData();
        $user = \Auth::user();
        return view('index.main', ['menus' => $menus,'user_info'=>$user]);
    }

}
