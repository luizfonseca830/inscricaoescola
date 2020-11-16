<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PontuacaoDoutorado extends Model
{
    //
    protected $table = 'pontuacaodoutorado';
    protected $fillable = [
        'id',
        'pontuacao_id',
        'anexo_id',
        'pontuacao'
    ];
}
