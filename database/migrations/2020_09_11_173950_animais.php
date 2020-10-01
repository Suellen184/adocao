<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Animais extends Migration
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
            $table->string('nome');
            $table->date('data_nascimento');
            $table->string('cor');
            $table->string('sexo');
            $table->string('raca');
            $table->string('tamanho');
            $table->string('imagem');
            $table->string('tipo');
            $table->string('status');
            $table->timestamps();
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
