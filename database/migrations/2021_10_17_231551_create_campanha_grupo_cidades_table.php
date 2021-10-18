<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampanhaGrupoCidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campanha_grupo_cidades', function (Blueprint $table) {
            $table->id();
            $table->string('campanha_grupo_cidade');
            $table->unsignedBigInteger('grupo_cidades_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('produto_id');
            $table->foreign('grupo_cidades_id')->references('id')->on('grupo_cidades')->onDelete('cascade');
            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campanha_grupo_cidades');
    }
}
