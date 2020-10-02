<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    protected $table='solicitacoes';
    protected $fillable=['codigo', 'limite', 'nome', 'sobrenome', 'email', 'telefone', 'cpf', 'idade', 'cep', 'texto', 'observacao', 'status', 'id_animal' ];
    public $timestamps=true;
}
