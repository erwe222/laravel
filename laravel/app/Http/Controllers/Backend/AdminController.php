<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;

/**
 * Description of AdminControllor
 *
 * @author dell
 */
class AdminController extends CController{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->adminModel = new \App\Model\Admin();
    }
    
    /**
     * 管理员简介
     * @param \Illuminate\Http\Request $request
     */
    public function profile(Request $request){
        return view('backend.admin.profile-view');
    }
    
    
}
