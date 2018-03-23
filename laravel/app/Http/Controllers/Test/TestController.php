<?php

namespace App\Http\Controllers\Test;
use App\Http\Controllers\Controller;
use App;
use App\Contracts\TestContract;
use App\Services\TestService;
use App\User;


class TestController extends Controller
{
    

	public function index(){
		//echo route('test.index');

		$test = app('test');
		$test->callMe('测试服务容器');

	}

}
