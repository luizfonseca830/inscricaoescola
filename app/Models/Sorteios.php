<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sorteios extends Model
{
    //
    protected $table = 'sorteios';
    protected $fillable = [
        'id',
        'descricao_sorteio',
        'data_dia_sorteio'
    ];

}
