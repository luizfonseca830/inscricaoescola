<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnexoMestrado extends Model
{
    //
    protected $table = 'anexoMestrado';
    protected $fillable = [
        'id',
        'anexo_id',
        'descricacao',
        'nome_instituicacao',
        'carga_horaria',
        'anexo',
    ];

    public function pontuacaoMestrado(){
        return $this->hasOne(PontuacaoMestrado::class, 'anexo_id', 'id');
    }
}
