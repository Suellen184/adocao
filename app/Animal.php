<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'animal';
    
    protected $fillable = ['animal_id','imagem_animal', 'nome_animal','tamanho','cor','sexo', 'data_nascimento', 'raca', 'tipo'];
}
