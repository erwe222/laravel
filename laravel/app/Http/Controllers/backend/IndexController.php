<?php
namespace App\Http\Controllers\backend;

class IndexController extends CController{

    public $menusModel = null;
    
    public function __construct() {
        parent::__construct();
        
        $this->menusModel = new \App\Model\Menus();
    }
    
    /**
     * 后台主页
     */
    public function index(){
        return view('backend.index.index');
    }
    
    public function main(){
        $menus = $this->menusModel->getMenus();
        $user_info = $this->getUserInfo();
        if(!$user_info){
            return redirect(route('b_auth_tologin'));
        }
        
        $time1 = strtotime('+2 day');
        $time2 = strtotime($user_info->expiry_time);
        $is_expiry_time = false;
        if($time1 >= $time2){
            $is_expiry_time = true;
        }
        

        return view('backend.index.main2', ['menus' => $menus,'user_info'=>$user_info,'is_expiry_time'=>$is_expiry_time]);
    }
    
}
