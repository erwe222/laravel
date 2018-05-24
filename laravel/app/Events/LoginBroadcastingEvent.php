<?php
namespace App\Events;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Model\Users;

/**
 * 提示管理员登录信息事件消息
 * Description of LoginBroadcastingEvent
 * @author dell
 */
class LoginBroadcastingEvent implements ShouldBroadcast{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    //用户名
    public $name;
    
    //用户邮箱
    public $email;

    /** 
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Users $user)
    {   
        $this->name = $user->name;
        $this->email = $user->email;
    }

    /** 
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {   
        return new Channel('userlogin');
    }
}
