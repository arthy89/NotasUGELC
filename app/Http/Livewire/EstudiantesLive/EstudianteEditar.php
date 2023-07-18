<?php

namespace App\Http\Livewire\EstudiantesLive;

use App\Models\Estudiantes;
use App\Models\Institucion;
use Livewire\Component;

class EstudianteEditar extends Component
{
    public Estudiantes $est;

    public function render()
    {
        $instituciones = Institucion::all();
        return view('livewire.estudiantes-live.estudiante-editar', [
            'est_act' => $this->est,
            'instituciones' => $instituciones
        ]);
    }

    public function rules()
    {
        return [
            'est.est_apell' => 'required',
            'est.est_name' => 'required',
            'est.id_inst' => 'max:500',
            'est.est_grado' => 'max:500',
            'est.est_seccion' => 'max:500',
        ];
    }

    public function messages()
    {
        return [
            'est.est_apell.required' => 'Los APELLIDOS son requeridos',
            'est.est_name.required' => 'Los NOMBRES son requeridos',
            'est.id_inst.max' => 'Máximo',
            'est.est_grado.max' => 'Máximo',
            'est.est_seccion.max' => 'Máximo',
        ];
    }

    public function editar_estudiante()
    {
        $this->validate();
    }
}
