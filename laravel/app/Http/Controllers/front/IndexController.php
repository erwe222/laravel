<?php
namespace App\Http\Controllers\Front;

class IndexController extends CController{
    
    /**
     * 前台主页
     */
    public function index(){
        
        
        return view('frontend.index.index');
    }
    
    /**
     * 
     */
    public function test(){
        return view('frontend.Index.test');
    }
    
}
