<?php

namespace App\Http\Livewire\Notas;

use App\Models\Estudiantes;
use App\Models\Notas;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

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
                    ->where('nota.id_curso', '=', $curso_id);
            })
            ->where('estudiante.est_grado', '=', $grado)
            ->where('estudiante.id_inst', '=', $usuario->id_inst)
            ->when($this->secc, function ($query, $secc) {
                return $query->where('estudiante.est_seccion', $secc);
            })
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
            'secciones' => $secciones,
        ]);
    }

    public function changeSecc($secc)
    {
        $this->secc = $secc;
        $this->mostrarTabla = true;
    }

    public function actualizar_nota()
    {
    }
}
