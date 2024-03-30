<?php

namespace App\Mail;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewOrder extends Mailable
{
    use Queueable, SerializesModels;
public Order $order ; public  $orderDetails;
    /**
     * Create a new message instance.
     */
    public function __construct(Order $order ,  $orderDetails)
    {
        $this->order=$order;
        $this->orderDetails=$orderDetails;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your Order',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content (
            view: 'new-order',
        );
    }

    /**
     *
     *
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     *
     *
     *
     */
    public function attachments(): array
    {
        return [];
    }
}
