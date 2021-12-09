<?php

namespace App\Http\Controllers;

use App\Domains\Estoque;
use App\Jobs\EstoqueJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EstoqueController extends Controller
{
    public function movimentar()
    {
        $estoque = new Estoque(1, 100);
        EstoqueJob::dispatch($estoque);
    }

    public function jobDispatch()
    {
        $estoque = new Estoque(1, 100);
        dispatch(function () use ($estoque) {
            Log::info("Movimentando estoque {$estoque->id} - {$estoque->qtde}");
            //Operação para movimentar estoque
        })->delay(now()->addSeconds(10));
    }

}
