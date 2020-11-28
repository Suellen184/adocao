<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdocaoDepoimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adocao_depoimentos', function (Blueprint $table) {
            $table->increments('id');

            //$table->unsignedInteger('codigo_solicitacao');
            $table->string('status')->default('inativo');
            $table->string('nome');
            $table->string('titulo');
            $table->string('mensagem');
            $table->string('imagem');

            $table->timestamps();

            //$table->foreign('codigo_solicitacao')->references('id')->on('adocao_solicitacoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adocao_depoimentos');

    }
}
