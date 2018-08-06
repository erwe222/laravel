<?php
namespace App\Http\Controllers\weixin;
use Illuminate\Http\Request;


class IndexController extends CController{


	/**
     * 主页信息
     * @param \Illuminate\Http\Request $request
     * @return type
     */
	public function index(){
		return view('weixin.index.index');
	}
}