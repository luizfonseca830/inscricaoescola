<?php

namespace App\Models;

use App\Models\Modulo;
use Illuminate\Database\Eloquent\Model;

class Escolaridade extends Model
{
    //
    protected $table = 'escolaridade';
    protected $fillable = [
        'id',
        'modulo_id',
        'nivel_escolaridade',
    ];
    public function modulo(){
        return $this->hasOne(Modulo::class, 'id', 'modulo_id');
    }

    public function pessoas(){
        return $this->hasMany(Pessoa::class, 'escolaridade_id', 'id');
    }
}
