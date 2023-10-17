<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\Institucion;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $remember = $request->filled('remember');

        if (Auth::attempt($request->only('email', 'password'), $remember)) {
            $request->session()->regenerate();

            return redirect()
                ->intended('/')
                ->with('status', '¡Inicio de sesión exitoso!');
        }

        throw ValidationException::withMessages([
            'email' => ('invalid')
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login')->with('status', '¡Cierre de sesión exitoso!');
    }

    public function registro_view()
    {
        $instituciones = Institucion::all();
        return view('auth.register', compact('instituciones'));
    }

    public function registro(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email|email',
            'institucion' => 'required|unique:users,id_inst',
            'password' => 'required|min:6|regex:/^[a-zA-Z0-9]+$/',
            'password2' => 'required|same:password',
        ], [
            'name.required' => 'El campo nombre es obligatorio.',
            'email.required' => 'El campo Correo es obligatorio.',
            'email.unique' => 'Este Correo ya está en uso.',
            'email.email' => 'El formato del Correo no es válido.',
            'institucion.required' => 'El campo INSTITUCIÓN es obligatorio.',
            'institucion.unique' => 'Esta INSTITUCIÓN ya tiene un Director registrado.',
            'password.required' => 'El campo contraseña es obligatorio.',
            'password.min' => 'La contraseña debe tener al menos :min caracteres.',
            'password.regex' => 'La contraseña debe contener solo letras y números.',
            'password2.required' => 'El campo confirmación de contraseña es obligatorio.',
            'password2.same' => 'La confirmación de contraseña debe coincidir con la nueva contraseña.',
        ]);

        $director = User::create([
            'name' => strtoupper($request->name),
            'email' => $request->email,
            'id_inst' => $request->institucion,
            'password' => Hash::make($request->password),
            'contra' => $request->password,
            'rol' => 'Director'
        ]);

        Auth::login($director);

        return redirect()
            ->intended('/')
            ->with('status', '¡Inicio de sesión exitoso!');
    }
}
