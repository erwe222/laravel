<?php
namespace App\Http\Controllers\Index;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
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
        $menus = $this->getMenuData();
        $user = \Auth::user();
        if(!$user){
            return redirect('/login');exit;
        }
        return view('index.main', ['menus' => $menus,'user_info'=>$user]);
    }

}
