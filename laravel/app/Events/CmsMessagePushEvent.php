<?php
namespace App\Events;
use App\Helpers\CurlRequest;
use App\Helpers\Des;

/**
 * 推送消息事件类
 *
 * @return blooean
 */
class CmsMessagePushEvent
{

	protected $message = [];

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(array $message)
    {

  		$this->message = [
  			'channel'     =>isset($message['channel']) ? $message['channel'] : '',
  			'noticetype'  =>isset($message['noticetype']) ? $message['noticetype'] : '',   #渠道下的消息别名
  			'msgtype'     =>isset($message['msgtype']) ? $message['msgtype'] : '',	       #渠道下的消息类型
  			'message'     =>isset($message['message']) ? $message['message'] : '',	       #渠道下的消息内容
  			'params'      =>isset($message['params']) ? $message['params'] : [],	       #渠道下的消息附加参数
  		];
  		 

  		$this->push();
    }


    /**
     * 推送消息
     *
     * @return blooean
     */
    public function push(){
       $curl = new CurlRequest();

       $des = new Des(config('app.config.messagePush.secretkey'));
       $this->message['token'] = $des->encrypt($this->message['channel'].$this->message['noticetype']);

       $curl->setTimeOut(3000);
       $curl->setPost($this->message);

       $curl->setRequestUrl(config('app.config.messagePush.server_1.http'));
       return $curl->request();
    }

}
