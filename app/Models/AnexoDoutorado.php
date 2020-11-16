<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnexoDoutorado extends Model
{
    //
    protected $table = 'anexoDoutorado';
    protected $fillable = [
        'id',
        'anexo_id',
        'descricacao',
        'nome_instituicacao',
        'carga_horaria',
        'anexo'
    ];

    public function pontuacaoDoutorado(){
        return $this->hasOne(PontuacaoDoutorado::class, 'anexo_id', 'id');
    }
}
