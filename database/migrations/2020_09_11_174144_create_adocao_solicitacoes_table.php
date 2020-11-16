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

            $table->string('codigo')->unique();
            $table->string('status')->default('Solicitação Realizada');
            $table->unsignedInteger('id_animal');

            $table->text('mensagem');

            $table->string('nome');
            $table->string('sobrenome');
            $table->string('cpf');
            $table->string('idade');

            $table->string('cep');

            $table->string('email');
            $table->string('telefone');

            $table->text('observacao_by_admin');

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
