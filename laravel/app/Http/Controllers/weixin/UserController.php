<?php
namespace App\Http\Controllers\weixin;
use Illuminate\Http\Request;


class UserController extends CController{

	/**
     * 用户个人中心页面
     * @param \Illuminate\Http\Request $request
     * @return type
     */
	public function main(){
		return view('weixin.user.main');
	}
	
	/**
     * 用户个人设置页面
     * @param \Illuminate\Http\Request $request
     * @return type
     */
	public function mySet(Request $request){
		return view('weixin.user.my-set');
	}

	/**
     * 用户收件地址列表页面
     * @param \Illuminate\Http\Request $request
     * @return type
     */
	public function myAddress(Request $request){
		return view('weixin.user.my-address');
	}

	/**
     * 用户收件地址编辑页面
     * @param \Illuminate\Http\Request $request
     * @return type
     */
	public function editAddress(Request $request){
		return view('weixin.user.my-edit-address');
	}

	/**
     * 用户修改密页面
     * @param \Illuminate\Http\Request $request
     * @return type
     */
	public function modifyPwd(Request $request){
		return view('weixin.user.my-modify-pwd');
	}
}