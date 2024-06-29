<?php

namespace App\Console\Commands;

use App\Events\OrderShipped;
use Illuminate\Console\Command;

class InterfaceData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:interface-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

  
    public function handle()
    {
        OrderShipped::dispatch(rand(10,100));
    }
}
