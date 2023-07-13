<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\EditDatosRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Institucion;
use Yajra\DataTables\DataTables;
use DB;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $usuarios = User::join('institucion', function ($join) {
                $join->on('users.id_inst', '=', 'institucion.id_inst');
            })
                ->select('users.id', 'users.name', 'users.email', 'users.rol', 'users.contra', 'institucion.inst_name', 'institucion.distrito')->orderBy('users.name', 'asc')->get();
            return DataTables::of($usuarios)
                ->addIndexColumn()
                ->addColumn('institucion', function ($usuario) {
                    return $usuario->inst_name . ' - ' . $usuario->distrito;
                })
                ->addColumn('action', function ($row) {
                    $ruta_editar = route('editar_usuario', $row->id);
                    $ruta_eliminar = route('eliminar_usuario', $row->id);
                    $form = '<form action="' . $ruta_eliminar . '" method="POST" class="formulario">
                            ' . csrf_field() . '
                            ' . method_field("delete") . '
                            <a href="' . $ruta_editar . '" class="btn btn-warning btn-sm"><i class="fa-solid fa-user-pen"></i></a>
                            <button type="submit" class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash-can"></i></button>
                        </form>';
                    return $form;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $instituciones = Institucion::all();
        return view('users.create', compact('instituciones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        // return $request;
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'contra' => $request->password,
            'rol' => $request->rol,
            'id_inst' => $request->institucion,
        ]);
        return redirect()->route('usuarios')->with('creado', 'Usuario creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $usuario)
    {
        //
        // return $usuario;
        $instituciones = Institucion::all();
        return view('users.edit', compact('instituciones', 'usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditDatosRequest $request, User $usuario)
    {
        // return $request;
        $usuario->update([
            'name' => $request->name,
            'email' => $request->email,
            'rol' => $request->rol,
            'id_inst' => $request->institucion,
        ]);
        return back()->with('actualizado', 'Información actualizada correctamente');
    }

    public function updatepass(Request $request, User $usuario)
    {
        //
        $usuario->update([
            'password' => Hash::make($request->password),
            'contra' => $request->password
        ]);

        return back()->with('contra', 'Contraseña actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $usuario)
    {
        //
        $usuario->delete();
        return redirect()->route('usuarios')->with('eliminar', 'ok');
    }
}
