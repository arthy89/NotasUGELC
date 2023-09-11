<?php
// !CAMBIAR PERIODO

namespace App\Http\Livewire\Notas;

use App\Models\Estudiantes;
use App\Models\Notas;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class GradoX extends Component
{
    public $grado;

    public $curso;

    public $secc;

    public $mostrarTabla = false;

    protected $listeners = ['seccion' => 'changeSecc'];

    public function render()
    {
        $usuario = auth()->user();

        $grado = $this->grado;
        $curso_id = $this->curso->id_curso; // Obtén el valor de id_curso del objeto $this->curso

        $estudiantes = Estudiantes::select('estudiante.*', 'estudiante.id_est as id_estudiante', 'nota.*', 'nota.id_est as id_est_nota')
            ->leftJoin('nota', function ($join) use ($curso_id) {
                $join->on('estudiante.id_est', '=', 'nota.id_est')
                    ->where('nota.id_curso', '=', $curso_id)
                    ->where('nota.periodo', '=', 2);
            })
            ->where('estudiante.est_grado', '=', $grado)
            ->where('estudiante.id_inst', '=', $usuario->id_inst)
            // ->where('nota.periodo', '=', 2)
            ->when($this->secc, function ($query, $secc) {
                return $query->where('estudiante.est_seccion', $secc);
            })
            ->orderBy('estudiante.est_apell', 'ASC')
            ->orderBy('estudiante.est_name', 'ASC')
            ->get();

        // dump($estudiantes);

        // indice de las filas
        $estudiantes = $estudiantes->map(function ($estudiante, $index) {
            $estudiante->rowNumber = $index + 1;
            return $estudiante;
        });

        // lista de secciones disponibles
        $secciones = $estudiantes->pluck('est_seccion')->unique()->sort();

        return view('livewire.notas.grado-x', [
            'estudiantes' => $estudiantes,
            'secciones' => $secciones
        ]);
    }

    public function changeSecc($secc)
    {
        $this->secc = $secc;
        $this->mostrarTabla = true;
    }

    public function actualizar_nota($idNota, $idEstudiante, $notas_array, $aciertos_array)
    {
        //id de la nota a actualizar
        $nota_registro = Notas::find($idNota);

        //id del curso al que se esta llenando
        $id_curso = $this->curso->id_curso;

        //listado de notas
        $notas = json_decode($notas_array, true);

        // CUANDO NO EXISTEN NOTAS EN EL ARRAY, nada que actualizar
        if (is_null($notas)) {
            $this->emit('sinActualizar');
        } else {
            //suma de aciertos pasado como array
            $aciertos = json_decode($aciertos_array, true);

            //text de logro para la bd
            $logro = '';
            if ($aciertos['aciertos'] >= 0 && $aciertos['aciertos'] <= 10) {
                $logro = 'C-EN INICIO';
            } else if ($aciertos['aciertos'] >= 11 && $aciertos['aciertos'] <= 12) {
                $logro = 'B-EN PROCESO';
            } else if ($aciertos['aciertos'] >= 13 && $aciertos['aciertos'] <= 17) {
                $logro = 'A-LOGRADO';
            } else if ($aciertos['aciertos'] >= 18 && $aciertos['aciertos'] <= 20) {
                $logro = 'AD-DESTACADO';
            }

            //! CUANDO ES UN NUEVO REGISTRO DE NOTAS
            if (is_null($nota_registro)) {
                // cuando no existe el registro de notas
                $nota_new = Notas::create(array_merge($notas, $aciertos, [
                    'id_est' => $idEstudiante,
                    'id_curso' => $id_curso,
                    'periodo' => 2,
                    'logro' => $logro,
                ]));

                $this->emit('registroActualizado');
            } else {
                //? CUANDO SE MODIFICA ALGUNA NOTA DE UN ESTUDIANTE YA REGISTRADO

                $nota_registro->update(array_merge($notas, $aciertos, [
                    'logro' => $logro,
                ]));

                $this->emit('registroActualizado');
            }
        }
    }
}
