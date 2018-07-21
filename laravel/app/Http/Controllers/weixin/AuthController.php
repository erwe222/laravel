<?php
namespace App\Http\Controllers\weixin;
use Illuminate\Http\Request;

class AuthController extends CController{
    
    public function __construct(){
    	parent::__construct();

    }
    
    /**
     * 
     */
    public function login(Request $request){
        return view('weixin.auth.login');
    }
}
