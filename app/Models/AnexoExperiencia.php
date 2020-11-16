<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnexoExperiencia extends Model
{
    //
    protected $table = 'anexoExperiencia';
    protected $fillable = [
        'id',
        'anexo_id',
        'cargo',
        'empregador',
        'nome_supervisor',
        'data_entrada',
        'data_saida',
        'atribuicoes',
        'anexo'
    ];

    public function pontuacaoExperiencia(){
        return $this->hasOne(PontuacaoExperiencia::class, 'anexo_id', 'id');
    }
}
