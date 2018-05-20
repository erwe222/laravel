<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class TestJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * The number of times the job may be attempted.
     *
     * @var int
     */
    //public $tries = 5;

     /**
     * The number of seconds the job can run before timing out.
     *
     * @var int
     */
    //public $timeout = 120;


    public $name = null;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        if($this->name == 1000){
            echo $name;
        }
        \Log::alert($this->name.'|||---------我是来自队列,发送了一个邮件');

    }

    /**
     * The job failed to process.
     *
     * @param  Exception  $exception
     * @return void
     */
    public function failed(Exception $e)
    {
        // 发送失败通知, etc...   


        \Log::alert('|||---------队列运行失败88888888888888888');
    }
}
