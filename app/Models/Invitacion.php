<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitacion extends Model
{
    use HasFactory;

    protected $table = "invitaciones";

    protected $fillable = [
        'email',
        'id_inst',
        'user',
        'add_token',
    ];

    public function user_()
    {
        return $this->belongsTo(User::class, 'user', 'id');
    }

    public function institucion()
    {
        return $this->belongsTo(Institucion::class, 'id_inst');
    }
}
