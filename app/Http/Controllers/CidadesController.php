<?php

namespace App\Http\Controllers;

use App\Models\Cidades;

class CidadesController extends Controller
{
    public function __construct()
    {
        $this->class = Cidades::class;
    }
}
