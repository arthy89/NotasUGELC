<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docmultigrado extends Model
{
    use HasFactory;

    protected $table = "docmultigrados";

    protected $fillable = [
        'user',
        'id_inst',
        'grado',
        'seccion',
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
