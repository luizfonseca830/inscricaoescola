<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'pessoa';
    protected $fillable = [
        'id',
        'serie_id',
        'comprovante_id',
        'nome_completo',
        'cpf',
        'telefone',
        'data_nascimento',
        'sexo',
        'email',

    ];

    public function serie()
    {
        return $this->hasOne(Serie::class, 'id', 'serie_id');
    }
}
