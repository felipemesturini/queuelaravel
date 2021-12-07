<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class RedisJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $cliente;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($cliente)
    {
        $this->cliente = $cliente;
        $this->onConnection('redis');
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        dd("Job dispatch by redis {$this->cliente}");
    }
}
