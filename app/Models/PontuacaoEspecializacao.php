<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PontuacaoEspecializacao extends Model
{
    //
    protected $table = 'pontuacaoespecializacao';
    protected $fillable = [
        'id',
        'pontuacao_id',
        'anexo_id',
        'pontuacao'
    ];
}
