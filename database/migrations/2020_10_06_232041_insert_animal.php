<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class InsertAnimal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        DB::table('animais')->insert([
            'tipo'=> 'gato',
            'cor' =>'preto',
            'imagem' =>'imagem',
            'observacao' => 'descricao',
            'status' =>1,
            'created_by'=>1
        ]);


        DB::table('animais')->insert([
            'tipo'=> 'cachorro',
            'cor' =>'branco',
            'imagem' =>'imagem',
            'observacao' => 'descricao',
            'status' =>1,
            'created_by'=>1
        ]);
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::delete('delete from animais where id = 1 and 2');
    }
}
