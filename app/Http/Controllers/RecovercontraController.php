<?php

namespace App\Http\Controllers;

use App\Mail\ContraCorreo;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RecovercontraController extends Controller
{
    public function formulario()
    {
        return view('auth.olvideview');
    }

    public function enviarcorreo(Request $request)
    {
        request()->validate([
            'email' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            $token = Str::random(60);
            $user->update(['reset_password_token' => $token]);

            Mail::to($request->email)->send(new ContraCorreo($user));
        } else {
            throw ValidationException::withMessages([
                'email' => ('invalid')
            ]);
        }

        return view('auth.correoenviado', [
            'email' => $request->email,
        ]);
    }

    public function formress($token)
    {
        $user = User::where('reset_password_token', $token)->first();
        if ($user) {
            return view('auth.formrecuperar', compact('token'));
        } else {
            return redirect()->route('login');
        }
    }

    public function reset(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6|regex:/^[a-zA-Z0-9]+$/',
            'password2' => 'required|same:password',
        ]);

        $user = User::where('reset_password_token', $request->token)->first();

        $user->update([
            'password' => Hash::make($request->password),
            'contra' => $request->password,
            'reset_password_token' => null,
        ]);

        return redirect('login')->with('contraAct', 'Su contraseña fue reestablecida correctamente');
    }
}
