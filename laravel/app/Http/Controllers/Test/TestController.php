<?php

namespace App\Http\Controllers\Test;
use App\Http\Controllers\Controller;
use App;
use App\Contracts\TestContract;
use App\Services\TestService;
use App\User;
use App\Jobs\TestJob;

class TestController extends Controller
{
    public function __construct() {
        $this->menuModel = new \App\Model\Menus();
        $this->rolesModel = new \App\Model\Roles();
    }

    public function index(){
            //echo route('test.index');
//		echo 'aaaaaaaaa';
//		$test = app('test');
//		$test->callMe('测试服务容器');

        // $res = $this->menuModel->getMenuSelect();
        // echo (json_encode($res));

        $job = (new TestJob(1000))->onConnection('database');

        dispatch($job);
    }
    
    public function test(){
        
        exit;
        return view('test.viewtest');
    }


    public function vueApi(){
    	$data = [
            ['id'=>'1','name'=>'台式电脑','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'2','name'=>'笔记本电脑','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'3','name'=>'液晶显示器','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'4','name'=>'音箱','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'5','name'=>'游戏机','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'6','name'=>'移动电话','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'7','name'=>'台式电脑','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'8','name'=>'点阵式打印机','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'9','name'=>'台式电脑','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'10','name'=>'笔记本电脑','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'11','name'=>'液晶显示器','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'12','name'=>'音箱','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'13','name'=>'液晶显示器','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01']
        ];

        return response()->json(['code'=>200,'message'=>'接口请求成功','data'=>$data]);
    }

}
