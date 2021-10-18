<?php

namespace App\Http\Controllers;

use App\Models\GrupoCidades;
use Illuminate\Http\Request;

class GruposCidadesController extends Controller
{
    public function __construct()
    {
        $this->class = GrupoCidades::class;
    }
}
