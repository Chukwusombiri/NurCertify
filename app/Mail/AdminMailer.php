<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminMailer extends Mailable
{
    use Queueable, SerializesModels;

    public $msg;
    public $subject;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msg,$subject)
    {
       $this->msg = $msg;
       $this->subject=$subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)->
        replyTo(config('mail.from.address'))->from(config('mail.from.address'))->markdown('admin.mailerview');
    }
}
