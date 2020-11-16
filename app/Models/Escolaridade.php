<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Escolaridade extends Model
{
    //
    protected $table = 'escolaridade';
    protected $fillable = [
        'id',
        'nivel_escolaridade',
    ];
}
