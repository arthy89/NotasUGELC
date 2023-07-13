<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    use HasFactory;

    protected $table = "estudiante";

    public $timestamps = false;

    protected $primaryKey = "id_est";

    protected $fillable = [
        'est_apell',
        'est_name',
        'id_inst',
        'est_grado',
        'est_seccion'
    ];
}
