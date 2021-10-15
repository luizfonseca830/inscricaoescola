<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    use HasFactory;
    protected $table = 'audit';
    protected $fillable = [
        'pessoa',
        'motivo',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
