<?php

namespace App\Http\Livewire\Notas;

use App\Models\Estudiantes;
use App\Models\Notas;
use Livewire\Component;

class EstadisticasLive extends Component
{
    public $grado;

    public $curso;

    public $mostrarCard = false;

    protected $listeners = [
        'card' => 'changeCard',
        // 'actualizar' => 'render'
    ];

    public function render()
    {
        $usuario = auth()->user();

        //! verificar el grado
        if ($this->grado == 'TODO') {
            // todos sus estudiantes y sus campos sin importar el grado
            $estudiantes = Estudiantes::where('estudiante.id_inst', $usuario->id_inst)
                ->select('estudiante.*')->get();

            // total estudiantes matriculados
            $matriculados_total = $estudiantes->count();

            // total de estudiantes que participaron en el examen
            $participantes_total = Notas::join('estudiante', 'nota.id_est', '=', 'estudiante.id_est')
                ->where('estudiante.id_inst', $usuario->id_inst)
                ->where('nota.id_curso', $this->curso)
                ->count();

            // datos de los participantes
            $participantes = Notas::join('estudiante', 'nota.id_est', '=', 'estudiante.id_est')
                ->where('estudiante.id_inst', $usuario->id_inst)
                ->where('nota.id_curso', $this->curso)
                ->get();
        } else {
            // todos sus estudiantes y sus campos
            $estudiantes = Estudiantes::where('estudiante.id_inst', $usuario->id_inst)
                ->where('estudiante.est_grado', $this->grado)
                ->select('estudiante.*')->get();

            // total estudiantes matriculados
            $matriculados_total = $estudiantes->count();

            // total de estudiantes que participaron en el examen
            $participantes_total = Notas::join('estudiante', 'nota.id_est', '=', 'estudiante.id_est')
                ->where('estudiante.id_inst', $usuario->id_inst)
                ->where('estudiante.est_grado', $this->grado)
                ->where('nota.id_curso', $this->curso)
                ->count();

            // datos de los participantes
            $participantes = Notas::join('estudiante', 'nota.id_est', '=', 'estudiante.id_est')
                ->where('estudiante.id_inst', $usuario->id_inst)
                ->where('estudiante.est_grado', $this->grado)
                ->where('nota.id_curso', $this->curso)
                ->get();
        }

        //conteo segun logro
        $est_inicio = $participantes->where('logro', 'C-EN INICIO')->count();
        $est_proceso = $participantes->where('logro', 'B-EN PROCESO')->count();
        $est_logrado = $participantes->where('logro', 'A-LOGRADO')->count();
        $est_destacado = $participantes->where('logro', 'AD-DESTACADO')->count();

        // dump($est_inicio);

        $this->emit(
            'actualizar',
            $matriculados_total,
            $participantes_total,
            $est_inicio,
            $est_proceso,
            $est_logrado,
            $est_destacado
        );

        return view('livewire.notas.estadisticas-live', [
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

    public function changeCard($_grado, $_curso)
    {
        $this->grado = $_grado;
        $this->curso = $_curso;
        $this->mostrarCard = true;
    }
}
