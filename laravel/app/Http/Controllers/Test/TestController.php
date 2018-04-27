<?php

namespace App\Http\Controllers\Test;
use App\Http\Controllers\Controller;
use App;
use App\Contracts\TestContract;
use App\Services\TestService;
use App\User;


class TestController extends Controller
{
    public function __construct() {
        $this->menuModel = new \App\Model\Menus();
    }

    public function index(){
            //echo route('test.index');
//		echo 'aaaaaaaaa';
//		$test = app('test');
//		$test->callMe('测试服务容器');

        $res = $this->menuModel->getMenuSelect();
        echo (json_encode($res));
    }

}
