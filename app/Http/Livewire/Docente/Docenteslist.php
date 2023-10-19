<?php

namespace App\Http\Livewire\Docente;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Docenteslist extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        $docentes = User::where('id_inst', auth()->user()->id_inst)
            ->where('rol', 'Docente')
            ->get();

        // Agregar el número de fila a cada estudiante
        $docentes->each(function ($docente, $index) use ($docentes) {
            $docente->rowNumber = $docentes->firstItem() + $index;
        });

        return view('livewire.docente.docenteslist', [
            'docentes' => $docentes,
        ]);
    }
}
