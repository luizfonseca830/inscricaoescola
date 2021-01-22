<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Transparencia extends Model
{
    //
    protected $table = 'transparencia';
    protected $fillable = [
        'id',
        'user_id',
        'pessoa_id',
        'motivo'
    ];

    public function instrutor(){
        return $this->hasOne(User::class, 'id', 'instrutor_id');
    }

    public function pessoa(){
        return $this->hasOne(Pessoa::class, 'id', 'pessoa_id');
    }
}
