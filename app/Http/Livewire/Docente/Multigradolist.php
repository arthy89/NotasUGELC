<?php

namespace App\Http\Livewire\Docente;

use App\Models\Docmultigrado;
use Livewire\Component;

class Multigradolist extends Component
{


    public $listeners = [
        'actualizarGrados' => 'render'
    ];

    public function render()
    {
        $usuario = auth()->user();

        $gradosList = Docmultigrado::where('user', $usuario->id)
            ->get();
        return view('livewire.docente.multigradolist', [
            'gradosList' => $gradosList
        ]);
    }
}
