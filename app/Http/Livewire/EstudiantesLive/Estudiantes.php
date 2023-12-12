<?php

namespace App\Http\Livewire\EstudiantesLive;

use App\Models\Estudiantes as Est;
use App\Models\Institucion;
use Livewire\Component;
use Livewire\WithPagination;

class Estudiantes extends Component
{
    use WithPagination;

    public $search;

    public $listeners = [
        'actualizarEstudiantes' => 'render'
    ];

    public function render()
    {
        $usuario = auth()->user();
        // para llamar a todos los estudiantes cuando el usuario es el ADMINISTRADOR
        if ($usuario->rol == 'Admin' && $usuario->id_inst == 1) {
            $estudiantes = Est::join('institucion', 'estudiante.id_inst', '=', 'institucion.id_inst')
                ->select('estudiante.*', 'institucion.*')
                ->where('estudiante.est_name', 'LIKE', '%' . $this->search . '%')
                ->orWhere('estudiante.est_apell', 'LIKE', '%' . $this->search . '%')
                ->orWhere('institucion.inst_name', 'LIKE', '%' . $this->search . '%')
                ->orderBy('estudiante.est_apell', 'ASC')
                ->orderBy('estudiante.est_name', 'ASC')
                ->paginate(10);

            // Agregar el número de fila a cada estudiante
            $estudiantes->each(function ($estudiante, $index) use ($estudiantes) {
                $estudiante->rowNumber = $estudiantes->firstItem() + $index;
            });
        } else if ($usuario->rol == 'Admin' && $usuario->id_inst != 1) {
            //? filtro para ADMIN vigilancia
            $estudiantes = Est::join('institucion', 'estudiante.id_inst', '=', 'institucion.id_inst')
                ->select('estudiante.*', 'institucion.*')
                ->where('institucion.id_inst', '=', $usuario->id_inst)
                ->when($this->search, function ($query, $search) {
                    return $query->where(function ($subQuery) use ($search) {
                        $subQuery->where('estudiante.est_apell', 'LIKE', '%' . $search . '%')
                            ->orWhere('estudiante.est_name', 'LIKE', '%' . $search . '%');
                    });
                })
                ->orderBy('estudiante.est_apell', 'ASC')
                ->orderBy('estudiante.est_name', 'ASC')
                ->paginate(10);

            // Agregar el número de fila a cada estudiante
            $estudiantes->each(function ($estudiante, $index) use ($estudiantes) {
                $estudiante->rowNumber = $estudiantes->firstItem() + $index;
            });
        } else if ($usuario->rol == 'Director') {
            // filtros por director e institucion
            $estudiantes = Est::join('institucion', 'estudiante.id_inst', '=', 'institucion.id_inst')
                ->select('estudiante.*', 'institucion.*')
                ->where('institucion.id_inst', '=', $usuario->id_inst)
                ->when($this->search, function ($query, $search) {
                    return $query->where(function ($subQuery) use ($search) {
                        $subQuery->where('estudiante.est_apell', 'LIKE', '%' . $search . '%')
                            ->orWhere('estudiante.est_name', 'LIKE', '%' . $search . '%');
                    });
                })
                ->orderBy('estudiante.est_apell', 'ASC')
                ->orderBy('estudiante.est_name', 'ASC')
                ->paginate(10);

            // Agregar el número de fila a cada estudiante
            $estudiantes->each(function ($estudiante, $index) use ($estudiantes) {
                $estudiante->rowNumber = $estudiantes->firstItem() + $index;
            });
        } else if ($usuario->rol == 'Docente') {
            // filtros por docente e institucion
            $estudiantes = Est::join('institucion', 'estudiante.id_inst', '=', 'institucion.id_inst')
                ->select('estudiante.*', 'institucion.*')
                ->where('institucion.id_inst', '=', $usuario->id_inst)
                ->where('estudiante.est_grado', '=', $usuario->grado)
                ->where('estudiante.est_seccion', '=', $usuario->seccion)
                ->when($this->search, function ($query, $search) {
                    return $query->where(function ($subQuery) use ($search) {
                        $subQuery->where('estudiante.est_apell', 'LIKE', '%' . $search . '%')
                            ->orWhere('estudiante.est_name', 'LIKE', '%' . $search . '%');
                    });
                })
                ->orderBy('estudiante.est_apell', 'ASC')
                ->orderBy('estudiante.est_name', 'ASC')
                ->paginate(10);

            // Agregar el número de fila a cada estudiante
            $estudiantes->each(function ($estudiante, $index) use ($estudiantes) {
                $estudiante->rowNumber = $estudiantes->firstItem() + $index;
            });
        }

        // dd($estudiantes);
        return view('livewire.estudiantes-live.estudiantes', [
            'estudiantes' => $estudiantes,
        ]);
    }
}
