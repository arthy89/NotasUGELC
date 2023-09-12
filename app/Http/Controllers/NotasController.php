<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use App\Models\Estudiantes;
use App\Models\Institucion;
use App\Models\Notas;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Response;

// use PDF;


class NotasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function imprimir_notas($_grado, $_curso)
    {
        $usuario = auth()->user();

        $curso = Cursos::find($_curso);

        $institucion = Institucion::find($usuario->id_inst);

        if ($_grado == 'TODO') {
            $estudiantes = Estudiantes::select('estudiante.*', 'estudiante.id_est as id_estudiante', 'nota.*', 'nota.id_est as id_est_nota', 'institucion.*')
                ->join('institucion', 'estudiante.id_inst', 'institucion.id_inst')
                ->leftJoin('nota', function ($join) use ($_curso) {
                    $join->on('estudiante.id_est', '=', 'nota.id_est')
                        ->where('nota.id_curso', '=', $_curso)
                        ->where('nota.periodo', '=', 2);
                })
                // ->where('estudiante.est_grado', '=', $_grado)
                ->where(function ($query) use ($usuario) {
                    if ($usuario->rol != 'Admin') {
                        $query->where('estudiante.id_inst', $usuario->id_inst);
                    }
                })
                ->orderBy('institucion.distrito', 'ASC')
                ->orderByRaw("CASE
                    WHEN est_grado = 'PRIMERO' THEN 1
                    WHEN est_grado = 'SEGUNDO' THEN 2
                    WHEN est_grado = 'TERCERO' THEN 3
                    WHEN est_grado = 'CUARTO' THEN 4
                    WHEN est_grado = 'QUINTO' THEN 5
                    WHEN est_grado = 'SEXTO' THEN 6
                    ELSE 7
                END")
                ->orderBy('estudiante.est_seccion', 'ASC')
                ->get();

            // total estudiantes matriculados
            $matriculados_total = $estudiantes->count();

            // total de estudiantes que participaron en el examen
            $participantes_total = Notas::join('estudiante', 'nota.id_est', '=', 'estudiante.id_est')
                ->where(function ($query) use ($usuario) {
                    if ($usuario->rol != 'Admin') {
                        $query->where('estudiante.id_inst', $usuario->id_inst);
                    }
                })
                ->where('nota.id_curso', $_curso)
                ->where('nota.periodo', '=', 2)
                ->count();

            // datos de los participantes
            $participantes = Notas::join('estudiante', 'nota.id_est', '=', 'estudiante.id_est')
                ->where(function ($query) use ($usuario) {
                    if ($usuario->rol != 'Admin') {
                        $query->where('estudiante.id_inst', $usuario->id_inst);
                    }
                })
                ->where('nota.id_curso', $_curso)
                ->where('nota.periodo', '=', 2)
                ->get();
        } else {
            $estudiantes = Estudiantes::select('estudiante.*', 'estudiante.id_est as id_estudiante', 'nota.*', 'nota.id_est as id_est_nota', 'institucion.*')
                ->join('institucion', 'estudiante.id_inst', 'institucion.id_inst')
                ->leftJoin('nota', function ($join) use ($_curso) {
                    $join->on('estudiante.id_est', '=', 'nota.id_est')
                        ->where('nota.id_curso', '=', $_curso)
                        ->where('nota.periodo', '=', 2);
                })
                ->where('estudiante.est_grado', '=', $_grado)
                ->where(function ($query) use ($usuario) {
                    if ($usuario->rol != 'Admin') {
                        $query->where('estudiante.id_inst', $usuario->id_inst);
                    }
                })
                ->orderBy('institucion.distrito', 'ASC')
                // ->orderBy('institucion.inst_name', 'ASC')
                ->orderBy('estudiante.est_seccion', 'ASC')
                ->get();

            // total estudiantes matriculados
            $matriculados_total = $estudiantes->count();

            // total de estudiantes que participaron en el examen
            $participantes_total = Notas::join('estudiante', 'nota.id_est', '=', 'estudiante.id_est')
                ->where(function ($query) use ($usuario) {
                    if ($usuario->rol != 'Admin') {
                        $query->where('estudiante.id_inst', $usuario->id_inst);
                    }
                })
                ->where('estudiante.est_grado', $_grado)
                ->where('nota.id_curso', $_curso)
                ->where('nota.periodo', '=', 2)
                ->count();

            // datos de los participantes
            $participantes = Notas::join('estudiante', 'nota.id_est', '=', 'estudiante.id_est')
                ->where(function ($query) use ($usuario) {
                    if ($usuario->rol != 'Admin') {
                        $query->where('estudiante.id_inst', $usuario->id_inst);
                    }
                })
                ->where('estudiante.est_grado', $_grado)
                ->where('nota.id_curso', $_curso)
                ->where('nota.periodo', '=', 2)
                ->get();
        }

        // indice de las filas
        $estudiantes = $estudiantes->map(function ($estudiante, $index) {
            $estudiante->rowNumber = $index + 1;
            return $estudiante;
        });

        //conteo segun logro
        $est_inicio = $participantes->where('logro', 'C-EN INICIO')->count();
        $est_proceso = $participantes->where('logro', 'B-EN PROCESO')->count();
        $est_logrado = $participantes->where('logro', 'A-LOGRADO')->count();
        $est_destacado = $participantes->where('logro', 'AD-DESTACADO')->count();

        // dd($estudiantes);
        return view('notas.reporte', [
            'curso' => $curso,
            'grado' => $_grado,
            'institucion' => $institucion,
            'estudiantes' => $estudiantes,
            'matriculados_total' => $matriculados_total,
            'participantes_total' => $participantes_total,
            'participantes' => $participantes,
            'est_inicio' => $est_inicio,
            'est_proceso' => $est_proceso,
            'est_logrado' => $est_logrado,
            'est_destacado' => $est_destacado,
        ]);
    }
}
