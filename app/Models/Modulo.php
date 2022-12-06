<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    protected $table = 'modulo';
    protected $fillable = [
        'id',
        'descricao',
    ];
    public function escolaridade(){
        return $this->hasMany(Escolaridade::class, 'modulo_id', 'id');
    }
}
