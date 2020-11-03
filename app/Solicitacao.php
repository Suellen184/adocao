<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    protected $table = 'adocao_solicitacoes';
    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable=[
        'codigo',
        'status',
        'id_animal',
        'mensagem',
        'nome',
        'sobrenome',
        'cpf',
        'idade',
        'cep',
        'email',
        'telefone',
        'observacao_by_admin'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function animal()
    {
        return $this->belongsTo('App\Animal');
    }
}
