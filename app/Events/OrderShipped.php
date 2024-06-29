<?php

namespace App\Events;

use Illuminate\Support\Facades\Log;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class OrderShipped implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    
    public function __construct(public int $orderId=1)
    {
    }

    
    public function broadcastOn(): array
    {
        return [
            new Channel('dashboard'),
        ];
    }
}
