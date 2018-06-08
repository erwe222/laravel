<?php
namespace App\Listeners;

use App\Events\CreateActionLogEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Model\ActionLog;
class CreateActionLog
{

    /**
     * Handle the event.
     *
     * @param  CreateActionLogEvent  $event
     * @return void
     */
    public function handle(CreateActionLogEvent $event)
    {
        $array = $event->array;
        $data = [];
        $data['admin_id'] = isset($array['admin_id'])?$array['admin_id']:0;
        $data['type'] = isset($array['type'])?$array['type']:0;
        $data['content'] = isset($array['content'])?$array['content']:0;
        $data['created_at'] = isset($array['created_at'])?$array['created_at']: date('Y-m-d H:i:s');
        (new ActionLog())->addActionLog($data);
    }
}
