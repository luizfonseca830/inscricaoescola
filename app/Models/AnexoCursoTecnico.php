<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnexoCursoTecnico extends Model
{
    //
    protected $table = 'anexoCursoTecnico';
    protected $fillable = [
        'id',
        'anexo_id',
        'descricacao',
        'nome_instituicacao',
        'carga_horaria',
        'anexo',
    ];

    public function pontuacaoTecnico(){
        return $this->hasOne(PontuacaoTecnico::class, 'anexo_id', 'id');
    }
}
