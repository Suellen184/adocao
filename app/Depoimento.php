<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depoimento extends Model
{
    protected $table = 'adocao_depoimentos';
    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'codigo_solicitacao',
        'status',
        'mensagem',
        'imagem'
    ];
}
