<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescontoProdutoCampanhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desconto_produto_campanhas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campanha_id');
            $table->string('desconto_produto_campanha');
            $table->foreign('campanha_id')->references('id')->on('campanha_grupo_cidades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desconto_produto_campanhas');
    }
}
