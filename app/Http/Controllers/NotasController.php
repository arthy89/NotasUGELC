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
            $estudiantes = Estudiantes::select('estudiante.*', 'estudiante.id_est as id_estudiante', 'nota.*', 'nota.id_est as id_est_nota')
                ->leftJoin('nota', function ($join) use ($_curso) {
                    $join->on('estudiante.id_est', '=', 'nota.id_est')
                        ->where('nota.id_curso', '=', $_curso)
                        ->where('nota.periodo', '=', 2);
                })
                // ->where('estudiante.est_grado', '=', $_grado)
                ->where('estudiante.id_inst', '=', $usuario->id_inst)
                ->orderBy('estudiante.est_seccion', 'ASC')
                ->get();
        } else {
            $estudiantes = Estudiantes::select('estudiante.*', 'estudiante.id_est as id_estudiante', 'nota.*', 'nota.id_est as id_est_nota')
                ->leftJoin('nota', function ($join) use ($_curso) {
                    $join->on('estudiante.id_est', '=', 'nota.id_est')
                        ->where('nota.id_curso', '=', $_curso)
                        ->where('nota.periodo', '=', 2);
                })
                ->where('estudiante.est_grado', '=', $_grado)
                ->where('estudiante.id_inst', '=', $usuario->id_inst)
                ->orderBy('estudiante.est_seccion', 'ASC')
                ->get();
        }

        // indice de las filas
        $estudiantes = $estudiantes->map(function ($estudiante, $index) {
            $estudiante->rowNumber = $index + 1;
            return $estudiante;
        });

        // dd($estudiantes);
        return view('notas.reporte', ['curso' => $curso, 'grado' => $_grado, 'institucion' => $institucion, 'estudiantes' => $estudiantes,]);

        // $options = new Options();
        // $options->set('isRemoteEnabled', true);

        // $dompdf = new Dompdf($options);

        // $dompdf->loadHtml(view('notas.reporte', [
        //     'curso' => $curso,
        //     'grado' => $_grado,
        //     'institucion' => $institucion,
        //     'estudiantes' => $estudiantes,
        // ]));

        // $dompdf->setPaper('A4', 'portrait');

        // $dompdf->render();

        // dd($estudiantes);

        // return view('notas.reporte', ['curso' => $curso, 'grado' => $_grado, 'institucion' => $institucion, 'estudiantes' => $estudiantes,]);

        // $dompdf->stream("Reporte de Resultados.pdf", ['Attachments' => true]);
        // return $dompdf->stream("Reporte de Resultados.pdf");

        // $response = Response::make($dompdf->output());
        // $response->header('Content-Type', 'application/pdf');

        // return $response;
    }
}
