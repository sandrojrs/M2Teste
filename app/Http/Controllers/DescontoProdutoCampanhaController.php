<?php

namespace App\Http\Controllers;

use App\Models\DescontoProdutoCampanha;

class DescontoProdutoCampanhaController extends Controller
{
    public function __construct()
    {
        $this->class = DescontoProdutoCampanha::class;
    }
}
