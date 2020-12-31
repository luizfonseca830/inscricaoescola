<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoTela extends Model
{
    //
    protected $table = 'tipotela';
    protected $fillable = [
        'id',
        'tipo',
        'nome_ou_anexo',
        'status_liberar',
        'data_inicial',
        'data_final',
        'nome_anexo_mostrar'
    ];
}
