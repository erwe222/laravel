<?php
namespace App\Http\Controllers\Backend;

class IndexController extends CController{

    /**
     * 后台主页
     */
    public function index(){
        echo 'asd';
        return view('Backend.index.index');
    }
    
    public function main(){
        $obg = new \App\Model\Menus();
        
        $menus = $obg->getMenus();
        $user = \Auth::user();
        if(!$user){
            return redirect('/login');exit;
        }
        return view('Backend.index.main', ['menus' => $menus,'user_info'=>$user]);
    }
    
    
}
