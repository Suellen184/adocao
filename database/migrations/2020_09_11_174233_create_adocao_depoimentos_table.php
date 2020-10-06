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

            $table->boolean('status')->default(0);

            $table->string('mensagem');
            $table->string('imagem');

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
        Schema::dropIfExists('adocao_depoimentos');

    }
}
