<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    //
    protected $table = 'pessoa';
    protected $fillable = [
        'id',
        'cargo_id',
        'escolaridade_id',
        'anexo_id',
        'comprovante_id',
        'endereco_id',
        'pontuacao_id',
        'nome_completo',
        'cpf',
        'rg',
        'orgao_emissor',
        'pis',
        'telefone',
        'nacionalidade',
        'naturalidade',
        'data_nascimento',
        'sexo',
        'email',
        'portador_deficiencia',
        'status',
        'status_aprovado',
        'status_pericia_pne',
        'motivo_rev',
    ];

    public function cargo(){
        return $this->hasOne(Cargo::class, 'id', 'cargo_id');
    }

    public function escolaridade(){
        return $this->hasOne(Escolaridade::class, 'id', 'escolaridade_id');
    }

    public function anexos(){
        return $this->hasOne(Anexos::class, 'id', 'anexo_id');
    }

    public function endereco(){
        return $this->hasOne(Endereco::class, 'id', 'endereco_id');
    }

    public function pontuacao(){
        return $this->hasOne(Pontuacao::class, 'id', 'pontuacao_id');
    }

    public function recurso(){
        return $this->hasOne(RecursoModel::class, 'pessoa_id', 'id');
    }
}
