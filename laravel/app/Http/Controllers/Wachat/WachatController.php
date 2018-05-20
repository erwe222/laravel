<?php
namespace App\Http\Controllers\Wachat;
use App\Http\Controllers\Controller;

class WachatController extends Controller{
    
    /**
     * 
     */
    public function Menu(){
        return view('wachat.menu-view');
    }
    
    
}
