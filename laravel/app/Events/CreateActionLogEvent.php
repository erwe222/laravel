<?php
namespace App\Events;
use Illuminate\Queue\SerializesModels;

class CreateActionLogEvent
{
    use SerializesModels;

    public $array = [];

    /**
     * Create a new event instance.
     * @return void
     */
    public function __construct(array $array)
    {
        $this->array = $array;
        $this->array['created_at'] = date('Y-m-d H:i:s');
    }
}
