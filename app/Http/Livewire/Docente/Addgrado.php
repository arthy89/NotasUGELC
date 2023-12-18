<?php

namespace App\Http\Livewire\Docente;

use App\Models\Docmultigrado;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Addgrado extends Component
{
    public Docmultigrado $multigrado;

    public $usuario;

    public function mount()
    {
        $this->multigrado = new Docmultigrado();
        $this->usuario = auth()->user();
    }

    public function rules()
    {
        return [
            'multigrado.grado' => 'required',
            'multigrado.seccion' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'multigrado.grado.required' => 'El campo Grado es obligatorio.',
            'multigrado.seccion.required' => 'El campo Sección es obligatorio.',
        ];
    }

    public function render()
    {
        return view('livewire.docente.addgrado');
    }

    public function guardar_grados()
    {
        $this->validate();

        // verificar existencia del grado y seccion en la tabla
        // verificar en la tambla docmultigrado
        $grado_ex = Docmultigrado::where('id_inst', $this->usuario->id_inst)
            ->where('grado', $this->multigrado['grado'])
            ->where('seccion', $this->multigrado['seccion'])
            ->first();

        // verificar en usuarios
        $grado_ex_user = User::where('id_inst', $this->usuario->id_inst)
            ->where('grado', $this->multigrado['grado'])
            ->where('seccion', $this->multigrado['seccion'])
            ->first();

        if ($grado_ex || $grado_ex_user) {
            throw ValidationException::withMessages([
                'email' => ('El Grado y Sección ya están ocupados.')
            ]);
        }

        $this->multigrado->user = $this->usuario->id;
        $this->multigrado->id_inst = $this->usuario->id_inst;

        $this->multigrado->save();
        $this->multigrado = new Docmultigrado();

        session()->flash('cerrarModal');
        session()->flash('gradoAgregado');

        $this->emitTo('docente.multigradolist', 'actualizarGrados');
    }
}
