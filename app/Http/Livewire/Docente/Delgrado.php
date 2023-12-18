<?php

namespace App\Http\Livewire\Docente;

use App\Models\Docmultigrado;
use Livewire\Component;

class Delgrado extends Component
{
    public Docmultigrado $gradom;

    public function render()
    {
        return view('livewire.docente.delgrado', [
            'grado_act' => $this->gradom
        ]);
    }

    public function elminiar_grado()
    {
        Docmultigrado::destroy($this->gradom->id);
        // dump($this->gradom);

        session()->flash('cerrarModal');
        session()->flash('gradoBorrado');

        $this->emitTo('docente.multigradolist', 'actualizarGrados');
    }
}
