<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notas extends Model
{
    use HasFactory;

    protected $table = "nota";

    protected $primaryKey = "id_nota";

    protected $fillable = [
        'id_est',
        'id_curso',
        'nota1',
        'nota2',
        'nota3',
        'nota4',
        'nota5',
        'nota6',
        'nota7',
        'nota8',
        'nota9',
        'nota10',
        'aciertos',
        'logro',
        'periodo'
    ];
}
