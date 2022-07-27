<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailOrder extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order)
    {
        $this->order = $order;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mobile Shop')->from('Mobileshop@gmail.com')->replyTo('nhattan13699@gmail.com', 'MobileShop')->view('emails.send_mail_order',[
            'order' => $this->order
        ]);
    }
}
