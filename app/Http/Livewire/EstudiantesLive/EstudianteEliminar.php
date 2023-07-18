<?php

namespace App\Http\Livewire\EstudiantesLive;

use App\Models\Estudiantes;
use Livewire\Component;

class EstudianteEliminar extends Component
{
    public Estudiantes $est;

    public function render()
    {
        return view('livewire.estudiantes-live.estudiante-eliminar', [
            'est_act' => $this->est
        ]);
    }

    public function eliminar_estudiante()
    {
        Estudiantes::destroy($this->est->id_est);

        session()->flash('cerrarModal');
        $this->emit('estudianteEliminado');

        $this->emitTo('estudiantes-live.estudiantes', 'actualizarEstudiantes');
    }
}
