<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Institucion extends Model
{
    use HasFactory;

    protected $table = "institucion";

    protected $primaryKey = "id_inst";

    protected $fillable = ['id_inst', 'inst_num', 'inst_name', 'distrito'];
}
