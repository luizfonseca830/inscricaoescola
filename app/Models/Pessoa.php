<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    //
    protected $table = 'pessoa';
    protected $fillable = [
        'id',
        'escolaridade_id',
        'comprovante_id',
        'endereco_id',
        'nome_completo',
        'sexo',
        'idade',
        'data_nascimento',
        'escola_de_origem',
        'responsavel',
        'cpf',
        'telefone',
        'email'
    ];

    public function escolaridade()
    {
        return $this->hasOne(Escolaridade::class, 'id', 'escolaridade_id');
    }

    public function endereco()
    {
        return $this->hasOne(Endereco::class, 'id', 'endereco_id');
    }


}
