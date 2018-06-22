<?php
namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App;
use App\Contracts\TestContract;
use App\Services\TestService;
use App\User;
use App\Jobs\TestJob;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\SendForgotPassword;
use App\Events\TestBroadcastingEvent;
use App\Events\LoginBroadcastingEvent;

use App\Model\Users;
use App\Events\CreateActionLogEvent;

/**
 * Description of TestController
 *
 * @author dell
 */
class TestController extends CController{
    
    
    protected $menuModel;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->menuModel = new \App\Model\Menus;
    }
    
    public function index(Request $request){
            //echo route('test.index');
//		echo 'aaaaaaaaa';
//		$test = app('test');
//		$test->callMe('测试服务容器');

        // $res = $this->menuModel->getMenuSelect();
        // echo (json_encode($res));

//        $job = (new TestJob(1000))->onConnection('database');
//        dispatch($job);
        #ievlcfzyuipcbcab
        
        #https://www.jianshu.com/p/8ccb2820df23
		#https://yq.aliyun.com/ziliao/4217
		#https://yq.aliyun.com/ziliao/4213?spm=a2c4e.11155472.blogcont.22.1e7f770axqYkRM
		#https://laravel-china.org/topics/2668/laravel-53-new-features-introduction-of-1-laravel-echo
		#https://segmentfault.com/a/1190000004997982
		#https://laravel-china.org/topics/2668/laravel-53-new-features-introduction-of-1-laravel-echo
                ##https://laravel-china.org/docs/laravel/5.4/broadcasting/1246#installing-laravel-echo
        #http://laravelacademy.org/post/8559.html
        #http://laravelacademy.org/post/5449.html  基于 Laravel 的 API 服务端架构代码
        #http://laravelacademy.org/post/6851.html

        #appId: aceafceb8c2b199c
        #key: 883ed12036373acfa9c9f3b3c5fbc625

    	//模板发送
     //    $adminModel = new \App\Model\Admin();
     //    $admin = $adminModel->findEmail('837215079@qq.com');
    	// $flag = Mail::send(new SendForgotPassword($admin));
     //    if(!$flag){
     //        echo '邮件发送成功';
     //    }else{
     //        echo '邮件发送失败';
     //    }
     //    exit;

    	//队列模板发送
        //$message = (new OrderShipped())->onConnection('database')->onQueue('emails');
		// Mail::queue($message);

		//立即发送
        // $name = '发件人';
        // $flag = Mail::send('emails.test',['name'=>$name],function($message){
        //     $to = '1276816843@qq.com';
        //     $message ->to($to)->subject('嗨，你好');
        // });
        // if(!$flag){
        //     echo '发送邮件成功，请查收！';
        // }else{
        //     echo '发送邮件失败，请重试！';
        // }
//        if(count(Mail::failures()) < 1){
//            echo '发送邮件成功，请查收！';
//        }else{
//            echo '发送邮件失败，请重试！';
//        }


        $weixin_api = new \App\Model\FunctionClass\WeChatApi();

        dd($weixin_api->getAccessToken());





    }
    
    public function test(){
        return view('backend.test.viewtest');
    }

    public function test2(){
//        $name = isset($_GET['name'])?$_GET['name']:'hhh';
//        event(new TestBroadcastingEvent($name));
        event(new CreateActionLogEvent([
            'admin_id'=>1,
            'type'=>'2',
            'content'=>'taskdnfaksndfkasnd',
            'created_at'=>  date('Y-m-d H:i:s'),
        ]));
    }
    
    public function jqGridTables(){
        return view('backend.test.jqgridtables');
    }
    
    public function jqGridTablesList(){
        $aa = [
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
            ['id'=>'13','name'=>'液晶显示器','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'14','name'=>'液晶显示器','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'15','name'=>'液晶显示器','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'16','name'=>'液晶显示器','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01']
        ];
        return response()->json(['data'=>$aa,'page'=>$_REQUEST['page'],'totalPage'=>1000,'totalCount'=>16,'repeatitems'=>time(),'test'=>1000]);
    }
    
    public function dataTables(){
        return view('backend.test.datatables');
    }
    
    public function dataTablesList(){
        $aa = [
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
            ['id'=>'13','name'=>'液晶显示器','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'14','name'=>'液晶显示器','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'15','name'=>'液晶显示器','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01'],
            ['id'=>'16','name'=>'液晶显示器','note'=>'note','stock'=>'是','ship'=>'TNT','sdate'=>'2018-01-01']
        ];
        return response()->json(['draw'=>$_REQUEST['draw'],'recordsTotal'=>1000,'recordsFiltered'=>16,'data'=>$aa]);
    }
    
    
    public function easyUiTable(){
        return view('backend.test.easyuitable');
    }
    
    public function easyUiTableList(){
        $menu_list = $this->menuModel->findMenuList();
        return response()->json(['total'=>$menu_list['total'],'rows'=>$menu_list['data']]);
    }
}
