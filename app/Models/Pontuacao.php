<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pontuacao extends Model
{
    //
    protected $table = 'pontuacao';
    protected $fillable = [
        'id',
        'avaliador_id',
        'aprovador_id',
        'avaliar_cpfDef',
        'avaliar_escolaridade',
        'pontuacao_total',
    ];


    public function pontuacaoTecnico(){
        return $this->hasMany(PontuacaoTecnico::class, 'pontuacao_id', 'id');
    }
}
