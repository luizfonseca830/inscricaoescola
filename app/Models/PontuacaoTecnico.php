<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PontuacaoTecnico extends Model
{
    //
    protected $table = 'pontuacaotecnico';
    protected $fillable = [
        'id',
        'pontuacao_id',
        'anexo_id',
        'pontuacao'
    ];
}
