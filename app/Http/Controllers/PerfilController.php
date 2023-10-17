<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PerfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function perfil()
    {
        return view('perfil.verperfil');
    }

    public function perfil_act(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,' . $user->id . ',id|email',
        ], [
            'name.required' => 'El campo nombre es obligatorio.',
            'email.required' => 'El campo Correo es obligatorio.',
            'email.unique' => 'Este Correo ya está en uso.',
            'email.email' => 'El formato del Correo no es válido.',
        ]);

        $user->update([
            'name' => strtoupper($request->name),
            'email' => $request->email,
        ]);

        return back()->with('perfilAct', 'Sus datos fueron actualizados');
    }

    public function perfil_contra(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'password' => 'required|min:6|regex:/^[a-zA-Z0-9]+$/',
            'password2' => 'required|same:password',
        ], [
            'password.required' => 'El campo contraseña es obligatorio.',
            'password.min' => 'La contraseña debe tener al menos :min caracteres.',
            'password.regex' => 'La contraseña debe contener solo letras y números.',
            'password2.required' => 'El campo confirmación de contraseña es obligatorio.',
            'password2.same' => 'La confirmación de contraseña debe coincidir con la nueva contraseña.',
        ]);

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return back()->with('contraAct', 'Su contraseña fue acualizada');
    }
}
