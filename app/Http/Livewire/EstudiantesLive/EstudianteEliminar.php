<?php

namespace App\Http\Livewire\EstudiantesLive;

use App\Models\Estudiantes;
use App\Models\Notas;
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
        //seleccionamos si tiene notas
        $est_nota = Notas::select('nota.*')->where('nota.id_est', '=', $this->est->id_est)->get();
        // dump($est_nota);

        // si existen las notas se eliminaran con el foreach
        if ($est_nota) {
            foreach ($est_nota as $nota) {
                Notas::destroy($nota->id_nota);
            }
            Estudiantes::destroy($this->est->id_est); //se elimina el est actual
        } else {
            // si no existen notas solo se elimina el estudiante
            Estudiantes::destroy($this->est->id_est);
        }

        session()->flash('cerrarModal');
        $this->emit('estudianteEliminado');

        $this->emitTo('estudiantes-live.estudiantes', 'actualizarEstudiantes');
    }
}
