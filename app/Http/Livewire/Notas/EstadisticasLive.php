<?php

namespace App\Http\Livewire\Notas;

use Livewire\Component;

class EstadisticasLive extends Component
{
    public $grado;

    public $curso;

    public $mostrarCard = false;

    protected $listeners = ['card' => 'changeCard'];

    public function render()
    {
        return view('livewire.notas.estadisticas-live', [
            'grado' => $this->grado,
            'curso' => $this->curso,
        ]);
    }

    public function changeCard($_grado, $_curso)
    {
        $this->grado = $_grado;
        $this->curso = $_curso;
        $this->mostrarCard = true;
    }
}
