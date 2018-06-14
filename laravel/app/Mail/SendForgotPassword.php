<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Model\Admin;
use App\Helpers\Des;

class SendForgotPassword extends Mailable
{
    use Queueable, SerializesModels;

    public $admin = null;

    public $encryptEmail = '';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Admin $admin)
    {
        $this->admin = $admin->toarray();

        $desSecret  =  config('app.config.desSecret');
        $des = new Des($desSecret);
        $this->encryptEmail = $des->encrypt($this->admin['email']);

    }

    /**
     * Build the message.
     * @link https://laravel-china.org/docs/laravel/5.4/mail/1253
     * @return $this
     */
    public function build()
    {
        

        return $this->to($this->admin['email'])->subject('找回密码邮件')
        ->view('emails.send-forgot-password')
        ->with([
            'link' => route('b_auth_checkforgotpwd',['e'=>$this->encryptEmail,'token'=>$this->admin['password_reset_token']])
        ]);
    }
}
