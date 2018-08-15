<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     * @link https://laravel-china.org/docs/laravel/5.4/mail/1253
     * @return $this
     */
    public function build()
    {
        return $this->from('18798276809@163.com')->to('837215079@qq.com')->subject('邮件队列发送测试')
        ->view('emails.test')
        ->with([
            'name' => 'xiaorao'
        ]);
    }
}
