<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App;
use App\Contracts\TestContract;
use App\Services\TestService;
use App\User;
use App\Jobs\TestJob;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use App\Events\TestBroadcastingEvent;
use App\Events\LoginBroadcastingEvent;

use App\Model\Users;

/**
 * Description of TestController
 *
 * @author dell
 */
class TestController extends CController{
    
    
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
    	Mail::send(new OrderShipped());

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
    }
    
    public function test(){
        

        return view('test.viewtest');
    }

    public function test2(){
        $name = isset($_GET['name'])?$_GET['name']:'hhh';
//        event(new TestBroadcastingEvent($name));
        
        $users = Users::find(2);
        
        event(new LoginBroadcastingEvent($users));
    }
    
}
