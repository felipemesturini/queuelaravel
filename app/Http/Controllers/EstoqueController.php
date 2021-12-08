<?php

namespace App\Http\Controllers;

use App\Domains\Estoque;
use App\Jobs\EstoqueJob;
use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    public function movimentar()
    {
        $estoque = new Estoque(1, 100);
        EstoqueJob::dispatch($estoque);
    }
}
