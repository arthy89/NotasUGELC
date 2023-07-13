<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $remember = $request->filled('remember');

        if (Auth::attempt($request->only('email','password'), $remember)){
            $request->session()->regenerate();

            return redirect()
            ->intended('/')
            ->with('status', '¡Inicio de sesión exitoso!');
        }

        throw ValidationException::withMessages([
            'email' => ('invalid')
        ]);
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login')->with('status','¡Cierre de sesión exitoso!');
    }
}
