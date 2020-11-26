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
        'irmaos_na_escola',
        'nome_irmao_na_escola',
        'serie_irmao_na_escola_id',
        'irmaos_no_sorteio',
        'nome_irmaos_no_sorteio',
        'serie_irmao_no_sorteio_id',
        'responsavel',
        'cpf',
        'telefone',
        'email',
        'status_aprovado',
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
