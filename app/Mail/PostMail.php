<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostMail extends Mailable
{
    use Queueable, SerializesModels;//public $userName;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()//message//$user// public function __construct($user)//
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('mail.post');
        return $this->view('mail.post')->attach(public_path('upload/profile/eer.eng'));//compact(['userName'=>$this->userName])

        //view blade// {{$userName}}

        //web// $user="mg Mg"
    }
}
