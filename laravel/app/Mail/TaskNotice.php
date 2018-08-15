<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TaskNotice extends Mailable
{
    use Queueable, SerializesModels;

    public $toMail;
    public $params;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($toMail,$params)
    {
        $this->toMail = $toMail;
        $this->params = $params;
    }

    /**
     * Build the message.
     * @link https://laravel-china.org/docs/laravel/5.4/mail/1253
     * @return $this
     */
    public function build()
    {   

        return $this->to($this->toMail)->subject('任务指派通知')
        ->view('emails.task-notice')
        ->with([
            'adminName' => $this->params['adminName'],
            'content' => $this->params['content'],
            'start_time' => $this->params['start_time'],
            'end_time' => $this->params['end_time']
        ]);
    }
}