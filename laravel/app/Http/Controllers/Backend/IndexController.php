<?php
namespace App\Http\Controllers\Backend;

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

        return view('backend.index.main', ['menus' => $menus,'user_info'=>$user_info]);
    }
    
}
