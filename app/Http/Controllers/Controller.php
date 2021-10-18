<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $class;

    public function index()
    {
        return $this->class::all();
    }

    public function store(Request $request)
    {
        try {
           $result = $this->class::create($request->all());
            return response()->json(($result), 201);
        } catch (\Throwable $th) {
            return response()->json(($th->getMessage()), 403);
        }

    }

    public function show(int $id)
    {
        $resource = $this->class::find($id);

        if(is_null($resource))
            return response()->json('No content.', 204);

        return response()->json($resource, 200);
    }

    public function update(int $id, Request $request)
    {
        $resource = $this->class::find($id);

        if(is_null($resource))
           return response()->json('Registro não encontrado', 404);

            try {
                $resource->fill($request->all());
                $resource->save();
                return response()->json($resource, 200);
            } catch (\Throwable $th) {
                return response()->json($th->getMessage(), 404);
            }

    }

    public function destroy(int $id)
    {
        $destroyed = $this->class::destroy($id);

        if($destroyed === 0)
           return response()->json('Registro não encontrado', 404);

        return response()->json(['Deletado com sucesso'], 204);
    }

}
