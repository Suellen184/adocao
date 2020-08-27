<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testemunho extends Model
{
    protected $table = 'testemunhos';

    protected $fillable = ['id_testemunho', 'titulo', 'texto', 'imagem', 'status', 'created_at', 'updated_at'];
}
