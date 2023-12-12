<?php

namespace App\Http\Livewire\EstudiantesLive;

use App\Models\Estudiantes;
use App\Models\Institucion;
use Livewire\Component;

class EstudianteCrear extends Component
{
    public Estudiantes $estudiante;

    public $usuario;

    public function mount()
    {
        $this->estudiante = new Estudiantes();
        $this->usuario = auth()->user();
    }

    public function rules()
    {
        if ($this->usuario->rol == 'Admin' && $this->usuario->id_inst == 1) {
            return [
                'estudiante.est_apell' => 'required',
                'estudiante.est_name' => 'required',
                'estudiante.id_inst' => 'required',
                'estudiante.est_grado' => 'required',
                'estudiante.est_seccion' => 'required',
            ];
        } else if ($this->usuario->rol == 'Admin' && $this->usuario->id_inst != 1) {
            return [
                'estudiante.est_apell' => 'required',
                'estudiante.est_name' => 'required',
                'estudiante.est_grado' => 'required',
                'estudiante.est_seccion' => 'required',
            ];
        } else if ($this->usuario->rol == 'Director') {
            return [
                'estudiante.est_apell' => 'required',
                'estudiante.est_name' => 'required',
                'estudiante.est_grado' => 'required',
                'estudiante.est_seccion' => 'required',
            ];
        } else if ($this->usuario->rol == 'Docente') {
            return [
                'estudiante.est_apell' => 'required',
                'estudiante.est_name' => 'required',
            ];
        }
    }

    public function messages()
    {
        if ($this->usuario->rol == 'Admin' && $this->usuario->id_inst == 1) {
            return [
                'estudiante.est_apell.required' => 'Los APELLIDOS son requeridos',
                'estudiante.est_name.required' => 'Los NOMBRES son requeridos',
                'estudiante.id_inst.required' => 'Se requiere la INSTITUCIÓN',
                'estudiante.est_grado.required' => 'Se requiere el GRADO',
                'estudiante.est_seccion.required' => 'Se requiere la SECCIÓN',
            ];
        } else if ($this->usuario->rol == 'Admin' && $this->usuario->id_inst != 1) {
            return [
                'estudiante.est_apell.required' => 'Los APELLIDOS son requeridos',
                'estudiante.est_name.required' => 'Los NOMBRES son requeridos',
                'estudiante.est_grado.required' => 'Se requiere el GRADO',
                'estudiante.est_seccion.required' => 'Se requiere la SECCIÓN',
            ];
        } else if ($this->usuario->rol == 'Director') {
            return [
                'estudiante.est_apell.required' => 'Los APELLIDOS son requeridos',
                'estudiante.est_name.required' => 'Los NOMBRES son requeridos',
                'estudiante.est_grado.required' => 'Se requiere el GRADO',
                'estudiante.est_seccion.required' => 'Se requiere la SECCIÓN',
            ];
        } else if ($this->usuario->rol == 'Docente') {
            return [
                'estudiante.est_apell.required' => 'Los APELLIDOS son requeridos',
                'estudiante.est_name.required' => 'Los NOMBRES son requeridos',
            ];
        }
    }

    public function render()
    {
        $instituciones = Institucion::all();
        return view('livewire.estudiantes-live.estudiante-crear', compact('instituciones'));
    }

    public function guardar_estudiante()
    {
        $this->validate();
        if ($this->usuario->rol == 'Admin' && $this->usuario->id_inst != 1) {
            $this->estudiante->id_inst = $this->usuario->id_inst;
        } else if ($this->usuario->rol == 'Director') {
            $this->estudiante->id_inst = $this->usuario->id_inst;
        } else if ($this->usuario->rol == 'Docente') {
            $this->estudiante->id_inst = $this->usuario->id_inst;
            $this->estudiante->est_grado = $this->usuario->grado;
            $this->estudiante->est_seccion = $this->usuario->seccion;
        }
        $this->estudiante->save();
        $this->estudiante = new Estudiantes();

        session()->flash('cerrarModal');
        $this->emit('estudianteCreado');

        $this->emitTo('estudiantes-live.estudiantes', 'actualizarEstudiantes');
    }
}
