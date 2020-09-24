<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'animais';

    protected $fillable = ['imagem', 'nome','tamanho','cor','sexo', 'data_nascimento', 'raca', 'tipo', 'status'];

    protected $primaryKey ='id';

    public $timestamps = true;
}
