<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use App\Mail\CustomerOrderCreated;
use App\Mail\UserOrderCreated;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendOrderDetailsToAdmin
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

        foreach (User::all() as $user) {
            Mail::to($user->email)
                ->send(new UserOrderCreated($event->order));
        }
    }
}
