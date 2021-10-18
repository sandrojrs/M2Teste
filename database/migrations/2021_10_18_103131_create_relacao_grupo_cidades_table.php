<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacaoGrupoCidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacao_grupo_cidades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grupo_cidades_id');
            $table->unsignedBigInteger('cidade_id');
            $table->foreign('cidade_id')->references('id')->on('cidades')->onDelete('cascade');
            $table->foreign('grupo_cidades_id')->references('id')->on('grupo_cidades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relacao_grupo_cidades');
    }
}
