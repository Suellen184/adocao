<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdocaoSolicitacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adocao_solicitacoes', function (Blueprint $table) {
            $table->increments('id');

            // codigo para rastreio
            $table->string('codigo')->unique();

            // informações sobre o solicitante
            $table->string('cpf');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('email');
            $table->string('telefone');
            $table->string('cep');

            // mensagem e observação
            $table->text('mensagem');
            $table->text('observacao_by_admin')->nullable();

            // informações sobre o animal e o status de adoção
            $table->unsignedInteger('id_animal');
            $table->string('status')->default('realizada');

            $table->timestamps();
            $table->foreign('id_animal')->references('id')->on('animais')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adocao_solicitacoes');

    }
}
