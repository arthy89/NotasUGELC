<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocMulti extends Controller
{
    public function index()
    {
        return view('docentes.docente_multigrado');
    }
}
