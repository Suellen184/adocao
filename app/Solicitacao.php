<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    protected $table = 'adocao_solicitacoes';
    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable=[
        // codigo para rastreio
        'codigo',

        // informações sobre o solicitante
        'cpf',
        'nome',
        'sobrenome',
        'email',
        'telefone',
        'cep',

        // mensagem e observação
        'mensagem',
        'observacao_by_admin',

        // informações sobre o animal e o status de adoção
        'id_animal',
        'status'
    ];
}

// uma solicitação pode ter 1 animal, 1 animal pode ter N solicitações
