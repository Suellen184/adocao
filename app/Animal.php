<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'animais';
    
    protected $fillable = ['id','imagem', 'nome','tamanho','cor','sexo', 'data_nascimento', 'raca', 'tipo', 'status'];
}
