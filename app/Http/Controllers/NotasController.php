<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use App\Models\Notas;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    public function index()
    {
        $cursos = Cursos::all();
        return view('notas.notasindex', compact('cursos'));
    }

    public function grados($curso_name)
    {
        $curso = Cursos::where('curso_name', $curso_name)
            ->select('curso.*')
            ->first();

        return view('notas.secciones', compact('curso'));
    }

    public function seccion($curso_name, $grado)
    {
        $curso = Cursos::where('curso_name', $curso_name)
            ->select('curso.*')
            ->first();

        return view('notas.grado', compact('grado', 'curso'));
    }

    public function estadisticas()
    {
        $cursos = Cursos::all();
        return view('notas.estadisticas', compact('cursos'));
    }
}
