<?php

namespace App\Http\Controllers;

use App\Models\Cidades;
use App\Models\RelacaoGrupoCidade;
use Illuminate\Http\Request;

class RelacaoGrupoCidadeController extends Controller
{
    public function __construct()
    {
        $this->class = RelacaoGrupoCidade::class;
    }

    public function store(Request $request){

        $cidade = RelacaoGrupoCidade::where('cidade_id', $request->cidade_id)->first();
        try {
            if ($cidade && $cidade->exists()){
                return response()->json(['message' => "Desculpe , essa cidade já possui cadastro. Tente outra"], 200);
            }else{
                $result = $this->class::create($request->all());
                return response()->json(($result), 201);
            }

         } catch (\Throwable $th) {
             return response()->json(($th->getMessage()), 403);
         }

    }

}
