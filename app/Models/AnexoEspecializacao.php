<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnexoEspecializacao extends Model
{
    //
    protected $table = 'anexoEspecializacao';
    protected $fillable = [
        'id',
        'anexo_id',
        'descricacao',
        'nome_instituicacao',
        'carga_horaria',
        'anexo',
    ];

    public  function pontuacaoEspecializacao(){
        return $this->hasOne(PontuacaoEspecializacao::class, 'anexo_id', 'id');
    }
}
