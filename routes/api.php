<?php

use App\Http\Controllers\CidadesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('auth/login', [AuthController::class, 'login']);

Route::middleware(['apiJWT'])->group(function () {
    /** Informações do usuário logado */
    Route::get('auth/me', [AuthController::class, 'me']);
    /** Encerra o acesso */
    Route::get('auth/logout', [AuthController::class, 'logout']);
    /** Atualiza o token */
    Route::get('auth/refresh', [AuthController::class, 'refresh']);
    /** Listagem dos usuarios cadastrados */
    Route::get('/users', [UserController::class, 'index']);
    /** crud cidades */
    route::resource('/cidades', CidadesController::class);
    /** crud grupos de cidades */
    route::resource('/grupo-cidades', GruposCidadesController::class);
    /** crud produtos */
    route::resource('/produtos', ProdutosController::class);
    /** crud grupo cidades */
    route::resource('/campanha-grupo-cidades', CampanhaGrupoCidadesController::class);
     /** crud desconto produtos da campanha */
    route::resource('/desconto-produto-campanha', DescontoProdutoCampanhaController::class);


});
