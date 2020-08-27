<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
      
    protected $table = 'adotante';
    
    protected $fillable = ['id_adotante','nome','email', 'data_nascimento','Telefone', 'observacao','rua','bairro','cidade','estado', 'updated_at', 'created_at'];

}
