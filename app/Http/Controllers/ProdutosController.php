<?php

namespace App\Http\Controllers;

use App\Models\Produtos;

class ProdutosController extends Controller
{
    public function __construct()
    {
        $this->class = Produtos::class;
    }
}
