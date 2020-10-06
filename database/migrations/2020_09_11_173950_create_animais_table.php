<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animais', function (Blueprint $table) {
            $table->increments('id');

            $table->string('tipo');
            $table->string('raca')->nullable()->default('desconhecido');

            $table->string('sexo')->nullable();
            $table->string('tamanho')->nullable();

            $table->date('data_nascimento')->nullable();
            $table->string('cor');

            $table->string('nome')->nullable()->default('sem nome');
            $table->string('imagem');
            $table->text('observacao');

            $table->boolean('status')->default(0);
            $table->unsignedInteger('created_by');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('created_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animais');

    }
}
