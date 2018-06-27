<?php
namespace App\Http\Controllers\front;

/**
 * Description of WxController
 *
 * @author dell
 */
class WxController extends CController{
   
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * 微信授权地址
     */
    public function auth2(){
        var_dump($_REQUEST);
    }
}
