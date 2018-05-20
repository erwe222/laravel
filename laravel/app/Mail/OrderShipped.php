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
        return $this->from('18798276809@163.com')->to('1276816843@qq.com')->bcc('18798276809@139.com')->subject('邮件测试111')
        ->view('emails.test')
        ->with([
            'name' => 'xiaorao'
        ]);
    }
}
