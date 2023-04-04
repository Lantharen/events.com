<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use App\Mail\CustomerOrderCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendOrderDetailsToCustomer
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(OrderCreated $event): void
    {
        $order = $event->order;

        Mail::to($order->customer->email)
            ->send(new CustomerOrderCreated($event->order));
    }
}
