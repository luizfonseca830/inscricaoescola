<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PontuacaoExperiencia extends Model
{
    //
    protected $table = 'pontuacaoexperiencia';
    protected $fillable = [
        'id',
        'pontuacao_id',
        'anexo_id',
        'pontuacao'
    ];

    public function anexoExperiencia(){
        return $this->hasOne(AnexoExperiencia::class, 'id', 'anexo_id');
    }
}
