<?php

namespace App\Http\Livewire\Docente;

use App\Mail\InvitaCorreo;
use App\Models\Invitacion;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Illuminate\Support\Str;

class Docentesinvitar extends Component
{
    public Invitacion $invitacion;

    public $usuario;

    public function mount()
    {
        $this->invitacion = new Invitacion();
        $this->usuario = auth()->user();
    }

    public function rules()
    {
        return [
            'invitacion.email' => 'required|email|unique:users,email',
        ];
    }

    public function messages()
    {
        return [
            'invitacion.email.required' => 'Se requiere el CORREO para poder enviar la invitacion',
            'invitacion.email.unique' => 'Este CORREO ya está registrado en el sistema',
            'invitacion.email.email' => 'Se requiere un CORREO válido',
        ];
    }

    public function render()
    {
        return view('livewire.docente.docentesinvitar');
    }

    public function enviar_invitacion()
    {
        $this->validate();

        $token = Str::random(60);

        $invitacion_act = Invitacion::where('email', $this->invitacion->email)->first();

        if ($invitacion_act) {
            $invitacion_act->update([
                'add_token' => $token,
            ]);

            $inv_correo = $invitacion_act;

            Mail::to($this->invitacion->email)->send(new InvitaCorreo($inv_correo));
            $this->emit('docenteInvRep');
        } else {
            $inv_new = Invitacion::create([
                'email' => $this->invitacion->email,
                'id_inst' => auth()->user()->institucion->id_inst,
                'user' => auth()->user()->id,
                'add_token' => $token,
            ]);

            $inv_correo = $inv_new;

            Mail::to($this->invitacion->email)->send(new InvitaCorreo($inv_correo));
            $this->emit('docenteInv');
        }

        // dump($invitacion_act);
        // dump(auth()->user()->institucion->id_inst);
        // dump($token);
        // dump($this->invitacion->email);
    }
}
