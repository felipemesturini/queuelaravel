<?php

namespace App\Domains;

class Estoque
{
    public int $id;
    public float $qtde;

    public function __construct(int $id, float $qtde)
    {
        $this->id = $id;
        $this->qtde = $qtde;
    }
}