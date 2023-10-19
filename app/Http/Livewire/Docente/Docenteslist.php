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
            ->when($this->search, function ($query, $search) {
                return $query->where(function ($subQuery) use ($search) {
                    $subQuery->where('name', 'LIKE', '%' . $search . '%');
                });
            })
            ->orderBy('name', 'ASC')
            ->paginate(10);

        // dd($docentes);

        // Agregar el número de fila a cada estudiante
        $docentes->each(function ($docente, $index) use ($docentes) {
            $docente->rowNumber = $docentes->firstItem() + $index;
        });

        // if ($docentes->count() > 0) {
        //     // Si hay registros, asigna el número de fila
        //     $docentes[0]->rowNumber = 1;
        // }

        return view('livewire.docente.docenteslist', [
            'docentes' => $docentes,
        ]);
    }
}
