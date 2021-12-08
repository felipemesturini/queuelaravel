<?php

namespace App\Jobs;

use App\Domains\Estoque;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class EstoqueJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private Estoque $estoque;

    public function __construct(Estoque $estoque)
    {
        $this->estoque = $estoque;
    }

    public function handle()
    {
        Log::info("Movimentação de estoque {$this->estoque->id}");
    }
}
