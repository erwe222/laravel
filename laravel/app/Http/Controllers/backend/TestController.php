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
use App\Events\CmsMessagePushEvent;
use App\Mail\OrderShipped;
use App\Mail\TaskNotice;

use App\Services\TencentCosService;

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
    public function __construct(){
        parent::__construct();

        $this->taskModel = new \App\Model\Task();

        $this->adminModel = new \App\Model\Admin();

        $this->menuModel = new \App\Model\Menus;

        $this->usersFriendsModel = new \App\Model\UsersFriends;

        $this->usersGroupModel = new \App\Model\UsersGroup();

        $this->usersChatGroupModel = new \App\Model\UsersChatGroup();

        $this->usersChatGroupDetailModel = new \App\Model\UsersChatGroupDetail();

        $con = [
            'accountsid'=>'15d28ad029f680856498915c352811c1',
            'token'=>'22293f258f0db698e792badbe160678c',
            'appid'=>'2ca0f02849f446529639d966dfcd15a2',
        ];
        
        $this->smsModel = new \App\Lib\Sms($con);
    }
    
    public function index(Request $request){

        // $html = new TaskNotice('837215079@qq.com',[
        //     'adminName' => '--------',
        //     'content' => htmlentities($a[0]['content']),
        //     'start_time' => '2222222',
        //     'end_time' => '153153153'
        // ]);
        // echo '<pre>';
        // print_r(htmlspecialchars_decode($html->params['content']));

        // event(new CmsMessagePushEvent([
        //     'channel'     =>'adminnotice',
        //     'noticetype'  =>'login',  
        //     'msgtype'     =>'1',
        //     'message'     =>'[131531] 登录后台管理系统',
        //     'params'      =>[],
        // ]));

    	// $res = $this->usersGroupModel->createGroup(2,[
    	// 	'users_id'=>2,
    	// 	'groupname'=>'大家一起嗨嗨嗨',
    	// 	'sort'=>1
    	// ]);
    	// var_dump($res);

    	// $res = $this->usersFriendsModel->createFriend(2,3,1);
    	// var_dump($res);

    	// $res = $this->usersGroupModel->deleteGroup(2,1);
    	// dd($res);

        // $res = $this->usersChatGroupModel->createChatGroup(2,[
        //     'groupname'     =>'小兄弟',
        //     'groupurl'      =>'',
        //     'introduce'     =>'',
        // ]);
        // dd($res);
        // $res = $this->usersChatGroupModel->deleteChatGroup(2,9);

        // dd($res);
        // $res3 = $this->usersChatGroupDetailModel->createUser(10,2);

     //    dd($res3);
    	// exit;
            //echo route('test.index');

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
        // dd('asd');
    	//队列模板发送
// $message = (new OrderShipped())->onConnection('database')->onQueue('emails');
// 		Mail::queue($message);
		// Mail::queue((new TaskNotice('837215079@qq.com',[
  //           'adminName' => '--------',
  //           'content' => 'sssssssss',
  //           'start_time' => '2222222',
  //           'end_time' => '153153153'
  //       ]))->onConnection('database')->onQueue('emails'));

  //       $info = $this->adminModel->findId(5);

  //       dd($info);


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


//        $weixin_api = new \App\Model\FunctionClass\WeChatApi();
//
//        dd($weixin_api->getAccessToken());

       // $weixin_api = new \App\Helpers\CurlRequest();
       // $weixin_api ->setPost(['asd'=>'asdf']);
       // $weixin_api ->setRequestUrl('http://118.24.1.228:9501');
       // $res = $weixin_api->request();
       // var_dump($res);exit;
        
        // $ss = $this->checkLogin();
        // dd($this->getUserInfo()->status);

        // event(new CmsMessagePushEvent([
        //     'channel'     =>'adminnotice',
        //     'noticetype'  =>'2222222222',   #渠道下的消息别名
        //     'msgtype'     =>'3333333333',         #渠道下的消息类型
        //     'message'     =>'4444444444',         #渠道下的消息内容
        //     'params'      =>['asdf'=>'fasdfasd'],           #渠道下的消息附加参数
        // ]));

        // $res = $this->smsModel->SendSms('2ca0f02849f446529639d966dfcd15a2',258714,666666,'15885446370',$uid='');

        // dd($res);



        event(new CmsMessagePushEvent([
            'channel'           =>'loginchannel',              #渠道名
            'channeltype'       =>2,                          #渠道类型（1:个人渠道  2:群发渠道）
            'msgid'             =>2,                          #接收人id（若渠道类型为群发消息则该值默认为0，否则为管理员id）
            'msgtype'           =>1,               #消息提示类型
            'message'           =>'55555555555',               #消息详情
            'params'            =>['asdf'=>'fasdfasd'],       #附加参数
        ]));
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


    /**
    * 腾讯云上传文件测试
    */
    public function cosUpload(Request $request){
        
        // $cosClient = new Client([
        //     'region' => 'ap-chengdu',
        //     'credentials' => [
        //         'secretId'    => 'AKIDveAQhjd4MPDl3BmsZ4LOCmESSDj1IuUq',
        //         'secretKey' => 'HK9j4A1g7KI4f7RZXFgrseAQQAdqmX3N',
        //     ]
        // ]);

        // $key = getRandImgName().'.png';
        // $local_path = "/www/img_file/fengjing.jpg";


        // ### 上传文件流
        // $result = $cosClient->putObject(array(
        //     'Bucket'    => 'file-1256209919',        //存储桶名称
        //     'Key'       => $key,                        //保存的文件地址(相对于文件桶)
        //     'Body'      => fopen($local_path, 'rb')    //文件本地地址
        // ));
        // dd($result);

        $key = getRandImgName().'.png';
        $local_path = "/www/img_file/fengjing.jpg";


        $cosService = new TencentCosService();
        // $url = $cosService->uploadFileFlow('file-1256209919',$key,$local_path);
        // dd($url);



        $cosService->downloadFile('file-1256209919','20180822162341wsYmgBY7z77SOQjS21yu.png');
    }
}