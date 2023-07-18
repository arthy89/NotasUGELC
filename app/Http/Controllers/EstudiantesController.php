<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstudianteRequest;
use App\Models\Estudiantes;
use App\Models\Institucion;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    public function index()
    {
        $usuario = auth()->user();
        $institucion = Institucion::where('institucion.id_inst', '=', $usuario->id_inst)->get();
        return view('Estudiantes.estudiantes', compact('institucion'));
    }

    public function edit(Estudiantes $estudiante)
    {
        $instituciones = Institucion::all();
        return view('Estudiantes.estudiante_editar', compact('estudiante', 'instituciones'));
    }

    public function update(EstudianteRequest $request, Estudiantes $estudiante)
    {
        $usuario = auth()->user();

        if ($usuario->rol == 'Admin' && $usuario->id_inst == 0) {
            $estudiante->update([
                'est_apell' => $request->apellidos,
                'est_name' => $request->nombres,
                'id_inst' => $request->institucion,
                'est_grado' => $request->grado,
                'est_seccion' => $request->seccion,
            ]);
        } else {
            $estudiante->update([
                'est_apell' => $request->apellidos,
                'est_name' => $request->nombres,
                'est_grado' => $request->grado,
                'est_seccion' => $request->seccion,
            ]);
        }

        return redirect()->route('estudiantes_index')->with('actualizado', 'Estudiante actualizado correctamente');
    }
}
