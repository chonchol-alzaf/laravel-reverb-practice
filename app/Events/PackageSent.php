<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PackageSent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

   
    public function __construct( public string $status,
    public string $deliveryHandler)
    {
        //
    }

  
    public function broadcastOn(): array
    {
        return [
            new Channel('delivery'),
        ];
    }
}
