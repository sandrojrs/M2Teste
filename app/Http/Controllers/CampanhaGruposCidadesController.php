<?php

namespace App\Http\Controllers;

use App\Models\CampanhaGrupoCidades;
use Illuminate\Http\Request;

class CampanhaGruposCidadesController extends Controller
{
    public function __construct()
    {
        $this->class = CampanhaGrupoCidades::class;
    }

    public function index(){
        return CampanhaGrupoCidades::with(['grupoCidades.cidades.cidade', 'produtos', 'desconto'])->get();
    }

}
