<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animal extends Model
{
    protected $table = 'animais';
    protected $primaryKey = 'id';

    use SoftDeletes;
    public $timestamps = true;

    protected $fillable = [
        'tipo',
        'raca',
        'sexo',
        'tamanho',
        'data_nascimento',
        'cor',
        'nome',
        'imagem',
        'observacao',
        'status',
        'created_by'
    ];
}

// 1 animal pode ter N solicitações, uma solicitação pode ter 1 animal