<?php
namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;

class TaskController extends CController{


    public function __construct(){
    	parent::__construct();

    }


	/**
     * 任务管理页面
     * @param \Illuminate\Http\Request $request
     */
    public function index(Request $request){
        return view('backend.task.index-view');
    }

    /**
     * 添加任务管理窗口页面
     * @param \Illuminate\Http\Request $request
     */
    public function createTaskBox(Request $request){
    	return view('backend.task.create-task-box');
    }

	

}
