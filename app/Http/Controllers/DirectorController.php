<?php

namespace App\Http\Controllers;

use App\Models\Invitacion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DirectorController extends Controller
{
    public function docentes()
    {
        return view('docentes.docentes');
    }

    public function docentes_registro($token)
    {
        $invitacion = Invitacion::where('add_token', $token)->first();

        if ($invitacion) {
            return view('docentes.docenteregistro', compact('invitacion', 'token'));
        } else {
            return redirect()->route('login');
        }
    }

    public function docentes_registro_store($token, Request $request)
    {
        // return $token;

        $invitacion = Invitacion::where('add_token', $token)->first();

        $request->validate([
            'name' => 'required',
            'grado' => 'required',
            'seccion' => 'required',
            'password' => 'required|min:6|regex:/^[a-zA-Z0-9]+$/',
            'password2' => 'required|same:password',
        ], [
            'name.required' => 'El campo nombre es obligatorio.',
            'grado.required' => 'Seleccione el GRADO',
            'seccion.required' => 'Seleccione la SECCIÓN',
            'password.required' => 'El campo contraseña es obligatorio.',
            'password.min' => 'La contraseña debe tener al menos :min caracteres.',
            'password.regex' => 'La contraseña debe contener solo letras y números.',
            'password2.required' => 'El campo confirmación de contraseña es obligatorio.',
            'password2.same' => 'La confirmación de contraseña debe coincidir con la nueva contraseña.',
        ]);

        $docente = User::create([
            'name' => strtoupper($request->name),
            'email' => $invitacion->email,
            'id_inst' => $invitacion->id_inst,
            'password' => Hash::make($request->password),
            'contra' => $request->password,
            'rol' => 'Docente',
            'grado' => $request->grado,
            'seccion' => $request->seccion,
        ]);

        $invitacion->delete();

        Auth::login($docente);

        return redirect()
            ->intended('/')
            ->with('status', '¡Inicio de sesión exitoso!');
    }
}
