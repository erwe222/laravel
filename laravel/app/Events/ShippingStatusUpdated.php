<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ShippingStatusUpdated implements ShouldBroadcast
{
    use SerializesModels;

    /**
     * 创建一个新的事件实例.
     *
     * @return void
     * @translator laravelacademy.org
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * 获取事件广播的频道.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('user.'.$this->user->id);
    }

    /**
     * 事件的广播名称.
     *
     * @return string
     */
    public function broadcastAs()
    {
        return 'server.created';
    }

    /**
     * 获取广播数据
     *
     * @return array
     */
    public function broadcastWith(){
        return [
            'id' => 1,
            'message'=>'success',
        ];
    }
}
