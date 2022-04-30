<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PresalesMail extends Mailable
{
    use Queueable, SerializesModels;

    // private $trxId,$email,$algoSent,$toolToReceive;
    private $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($trxId,$algoSent,$toolToReceive)
    {
        //
        $this->data = array(
            'trxId' => $trxId,
            'algoSent' => $algoSent,
            'toolToReceive' => $toolToReceive
        );
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Toolsx Presale Transaction Notification")
            ->view('mail.presales')->with(['data' => $this->data]);
    }
}