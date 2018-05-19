<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class ContactUs extends Mailable {

    use Queueable,
        SerializesModels;

    public $title;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct() {
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request) {
        $msg = $request->input('msg');
        $name = $request->input('name');
        $email = $request->input('email');
        return $this->from($request->input('email'), $request->input('name'))
                        ->cc('mallikarjun266@gmail.com')
                        ->cc('techsquare@gmail.com')
                        ->to('ganesh@techsquareindia.com')
                        ->view('emails.contact', ['msg' => $msg, 'name' => $name, 'email' => $email]);
    }

}
