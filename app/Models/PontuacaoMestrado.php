<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PontuacaoMestrado extends Model
{
    //
    protected $table = 'pontuacaomestrado';
    protected $fillable = [
        'id',
        'pontuacao_id',
        'anexo_id',
        'pontuacao'
    ];
}
